<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "crud_php";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn -> connect_error){
    die("Error de conección_ ".$conn->connect_error);
}