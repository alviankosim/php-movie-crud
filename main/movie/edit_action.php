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

$id = 0;

if (daPost('submit')) {
    $id = daPost('id');

    //Updating
    $dataUpdate = array(
        daPost('title'),
        daPost('description'),
        daPost('image_link'),
        daPost('trailer_link'),
        $id
    );

    $statement = $mysqli->prepare("
        UPDATE movie SET title=?,description=?,image_link=?,trailer_link=? WHERE `id`=?
    ");
    $statement->bind_param('ssssi', ...$dataUpdate);
    $statement->execute();
    if (!$mysqli->errno && $statement->affected_rows) {
        set_message('success', "Successfully edit movie detail, you can check the changes now!");
    } else {
        set_message('error', $mysqli->error);
    }
}

redirect('main/movie/detail.php?id=' . $id);