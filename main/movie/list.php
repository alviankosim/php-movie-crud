<?php

//DB Connection
include "../../utils/dbconnection.php";
//Input Connection
include "../../utils/inputhelper.php";

//Querying
$query = $mysqli->query("
    SELECT
    *
    FROM
    `movie`
");
$result = array();
while ($row = $query->fetch_array()) {
    $result[] = $row;
}

include "../../views/layout/header.php";
include "../../views/movieList.php";
include "../../views/layout/footer.php";