<?php

/**
 * edit.php
 * author: @alviankosim
 */

//Include db helper
include "../../utils/dbconnection.php";
//Include input helper
include "../../utils/inputhelper.php";
//Include genhelper
include "../../utils/genhelper.php";

//Check islogin
checklogin();

if (daGet('id')) {

    //Querying
    $id = daGet('id');
    $statement = $mysqli->prepare("
        SELECT * FROM `movie` WHERE id = ?
    ");
    $statement->bind_param('i', $id);
    $statement->execute();
    $statement_result = $statement->get_result();
    if (!$statement->errno && $statement_result->num_rows > 0) {
        
        $result = $statement_result->fetch_array();

        include "../../views/layout/header.php";
        include "../../views/movieEdit.php";
        include "../../views/layout/footer.php";
        exit;

    } else {
        set_message('error', $statement->error ?? "The movie was not found");
    }

}

redirect('main/movie/list.php');