<?php

/**
 * delete.php
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
//check isAdmin
checkIsAdmin();

$id = 0;

if (daGet('id')) {
    $id = daGet('id');

    $statement = $mysqli->prepare("
        DELETE FROM movie WHERE `id`=?
    ");
    $statement->bind_param('i', $id);
    $statement->execute();
    if (!$mysqli->errno && $statement->affected_rows) {
        set_message('success', "Successfully delete desired movie, you can check the changes now!");
    } else {
        set_message('error', $mysqli->error);
    }
}

redirect('main/movie/list.php');