<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_monitor";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("<h2>Connection failed: " . $conn->connect_error."</h2>");
}

?>