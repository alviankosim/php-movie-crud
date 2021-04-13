<?php

//DB Connection
include "../../utils/dbconnection.php";
//Input Connection
include "../../utils/inputhelper.php";

//Querying
$query = $mysqli->query("
    SELECT
    movie.*,
    (
        IFNULL(
            (
            SELECT
                AVG(sub.stars)
            FROM
                movie_stars sub
            WHERE
                sub.movie_id = movie.id
        ),
        0
        )
    ) AS stars
    FROM
    `movie`
    ORDER BY (
        IFNULL(
            (
            SELECT
                AVG(sub.stars)
            FROM
                movie_stars sub
            WHERE
                sub.movie_id = movie.id
        ),
        0
        )
    ) DESC
    LIMIT 10
");
$result = array();
while ($row = $query->fetch_array()) {
    $result[] = $row;
}

include "../../views/layout/header.php";
include "../../views/rankingsList.php";
include "../../views/layout/footer.php";    