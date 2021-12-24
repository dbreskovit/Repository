<?php

    if (session_status() !== PHP_SESSION_ACTIVE)
    {
        session_start();
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "website";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {die("Connection failed: " . mysqli_connect_error());}

?>