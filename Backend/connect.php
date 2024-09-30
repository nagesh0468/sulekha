<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "sulelha";

$con = new mysqli($host, $user, $password, $dbName);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
};
?>