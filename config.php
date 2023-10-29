<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "task_manager";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) { //if there's no database established
    die("Database not configured." . mysqli_connect_error());
}
