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
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.themoviedb.org/3/trending/movie/week?api_key=' . $api_key,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
$decoded = json_decode($response);
$result_weekend = $decoded->results;

//Include views 
include "./views/layout/header.php";
include "./views/home.php";
include "./views/layout/footer.php";