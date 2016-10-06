<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "yokai_db";

    $mysqli = new mysqli($servername, $username, $password, $dbname);
    
    if ($mysqli->connect_error) {
        die("Conexión fallida: " . $mysqli->connect_error);
    }
?>