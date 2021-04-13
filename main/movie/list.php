<?php

//DB Connection
include "../../utils/dbconnection.php";
//Input Connection
include "../../utils/inputhelper.php";

//Querying
$query_string = "
    SELECT
    *
    FROM
    `movie`
    ";

//If there is a search param
$dataSearch = array();
if (daGet('q') && daGet('q') != 'null') {
    $dataSearch = array("%". daGet('q') ."%");
    $query_string .= "
     WHERE `movie`.title LIKE ?";
}

$statement = $mysqli->prepare($query_string);
if (count($dataSearch) > 0) {
    $statement->bind_param('s', ...$dataSearch);
}
$statement->execute();
$query = $statement->get_result();

$result = array();
while ($row = $query->fetch_array()) {
    $result[] = $row;
}

include "../../views/layout/header.php";
include "../../views/movieList.php";
include "../../views/layout/footer.php";