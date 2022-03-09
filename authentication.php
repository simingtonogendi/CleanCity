<?php
session_start();

$connection = mysqli_connect('localhost','root','');
mysqli_select_db($connection, 'clean_city_website');

$establishmentName = $_POST['establishment_name'];
$password = $_POST['password'];
$id = $_POST['id'];

$selectQuery = "SELECT * FROM `registration_table` WHERE establishment_name = '$establishmentName' && password = '$password'";
$result = mysqli_query($connection,$selectQuery);

$number = mysqli_num_rows($result);

if ($number == 1){
    header('location:home.php');
}else{
    header('location:login.php');
}