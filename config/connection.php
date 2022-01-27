<?php 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "perhotelan";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if (!$conn) {
        echo "error";
        die();
    }

?>