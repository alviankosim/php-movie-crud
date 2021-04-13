<?php

/**
 * index.php file
 * author: @alviankosim
 */

//Querying db
include "./utils/dbconnection.php";
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

//Call API
include "./utils/tmdbhelper.php";
$api_key = get_key();
$call = file_get_contents('https://api.themoviedb.org/3/trending/movie/week?api_key=' . $api_key);
$decoded = json_decode($call);
$result_weekend = $decoded->results;

//Include views 
include "./views/layout/header.php";
include "./views/home.php";
include "./views/layout/footer.php";