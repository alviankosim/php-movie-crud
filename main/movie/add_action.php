<?php

/**
 * edit_action.php
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

    //Updating
    $dataInsert = array(
        daPost('title'),
        daPost('description'),
        daPost('image_link'),
        daPost('trailer_link')
    );

    $statement = $mysqli->prepare("
        INSERT INTO `movie`(title,description,image_link,trailer_link) VALUES(?,?,?,?)
    ");
    $statement->bind_param('ssss', ...$dataInsert);
    $statement->execute();
    if (!$mysqli->errno && $statement->affected_rows) {
        set_message('success', "Successfully add new movie, you can check the changes now!");
    } else {
        set_message('error', $mysqli->error);
    }
}

redirect('main/movie/list.php');