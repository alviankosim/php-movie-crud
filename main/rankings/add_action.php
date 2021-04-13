<?php

/**
 * add_action.php
 * author: @alviankosim
 */

//Include db helper
include "../../utils/dbconnection.php";
//Include inputhelper
include "../../utils/inputhelper.php";
//Include genhelper
include "../../utils/genhelper.php";

//Check islogin
checklogin();

if (daPost('submit')) {

    //Inserting
    $dataInsert = array(
        daPost('movie_id'),
        my_sess('id'),
        intval(daPost('stars')),
        daPost('review'),
        date('Y-m-d H:i:s')
    );

    $statement = $mysqli->prepare("
        INSERT INTO `movie_stars`(movie_id,user_id,stars,review,created_date) VALUES(?,?,?,?,?)
    ");
    $statement->bind_param('iiiss', ...$dataInsert);
    $statement->execute();
    if (!$mysqli->errno && $statement->affected_rows) {
        set_message('success', "Successfully add new review, you can check your review now!");
    } else {
        set_message('error', $mysqli->error);
    }
}

redirect('main/movie/detail.php?id=' . daPost('movie_id'));