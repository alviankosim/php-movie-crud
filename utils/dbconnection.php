<?php
//set default timezone
date_default_timezone_set('Asia/Jakarta');
/**
 * dbconnection.php
 * author: @alviankosim
 */

$mysqli = new mysqli("localhost","root","","damovies");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}