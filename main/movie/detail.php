<?php

/**
 * detail.php
 * author: @alviankosim
 */

//Include db helper
include "../../utils/dbconnection.php";
//Include input helper
include "../../utils/inputhelper.php";
//Include genhelper
include "../../utils/genhelper.php";

if (daGet('id')) {

    //Querying
    $id = daGet('id');

    $user_id = 0;
    if (my_sess('username')) {
        $user_id = my_sess('id');
    }

    $statement = $mysqli->prepare("
    SELECT
        movie.*,
        (
        SELECT
            COUNT(sub.id)
        FROM
            movie_stars sub
        WHERE
            sub.movie_id = movie.id
    ) AS count_review,
    (
        SELECT
            AVG(sub.stars)
        FROM
            movie_stars sub
        WHERE
            sub.movie_id = movie.id
    ) AS review,
    movie_stars.id as movie_stars_id,
    movie_stars.stars as movie_stars_stars,
    movie_stars.review as movie_stars_review
    FROM
        movie
    LEFT JOIN
        `movie_stars` ON
        (movie.id = movie_stars.movie_id AND movie_stars.user_id = ". $user_id .")
    WHERE
        movie.id = ?
    LIMIT 1
    ");
    $statement->bind_param('i', $id);
    $statement->execute();
    $statement_result = $statement->get_result();
    if (!$statement->errno && $statement_result->num_rows > 0) {
        
        $result = $statement_result->fetch_array();
        // var_dump($result);exit;
        parse_str( parse_url( $result['trailer_link'], PHP_URL_QUERY ), $daLink );
        $url = $daLink['v'];

        //Querying user review
        $user_review = array();
        $query = $mysqli->query("
        SELECT
            `user`.`username`,
            `movie_stars`.`review`,
            movie_stars.stars
        FROM
            `movie_stars`
        INNER JOIN `user` ON(movie_stars.user_id = `user`.`id`)
        WHERE
            `movie_stars`.movie_id = ". $result['id'] ."
        ORDER BY
            movie_stars.created_date
        DESC
        LIMIT 10
        ");
        while ($row = $query->fetch_assoc()) {
            $user_review[] = $row;
        }

        //Querying random other movie
        $other_movie = array();
        $query_other_movie = $mysqli->query("
        SELECT
            *
        FROM
            movie
        ORDER BY
            RAND()
        LIMIT 10
        ");
        while ($row = $query_other_movie->fetch_assoc()) {
            $other_movie[] = $row;
        }

        include "../../views/layout/header.php";
        include "../../views/movieDetail.php";
        include "../../views/layout/footer.php";
        exit;

    } else {
        set_message('error', $statement->error ?? "The movie was not found");
    }

}

redirect('main/movie/list.php');