<?php

/**
 * index.php
 * author: @alviankosim
 */

//Include db helper
include "../../utils/dbconnection.php";
//Include input helper
include "../../utils/inputhelper.php";
//Include gen helper
include "../../utils/genhelper.php";


//Querying
$id = my_sess('id');
$statement = $mysqli->prepare("
        SELECT * FROM `user` WHERE id = ?
    ");
$statement->bind_param('i', $id);
$statement->execute();
$statement_result = $statement->get_result();
if (!$statement->errno && $statement_result->num_rows > 0) {

    $result = $statement_result->fetch_array();

    include "../../views/layout/header.php";
    include "../../views/profile.php";
    include "../../views/layout/footer.php";
    exit;
}

redirect('');