<?php

$hostName = "localhost";
$dbUser = "steve";
$dbPassword = "1234";
$dbName = "satechs_solutions";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong!");
}

?>