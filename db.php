<?php

$servername = "127.0.0.1";
$username = "root";
$password = "pass";
$dbname = "examdb";

$link = mysqli_connect($servername, $username, $password);

if (!$link){
    die("Connection error: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if (!mysqli_query($link, $sql)) {
    echo "Could not create database";
}

mysqli_close($link);

$link= mysqli_connect($servername,$username, $password, $dbname);

$sql= "CREATE TABLE IF NOT EXISTS users(
    id INT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(20) NOT NULL
)";

if(!mysqli_query($link, $sql)){
    echo "Could not create Users table";
}



mysqli_close($link);
?>