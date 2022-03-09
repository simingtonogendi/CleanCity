<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "clean_city_website";

$connection = mysqli_connect('localhost','root','' );

if (isset($connection)){
    die("Connection to database failed");
}