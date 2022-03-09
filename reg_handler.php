<?php
session_start();

header('location:login.php');

$connection = mysqli_connect('localhost','root','');
mysqli_select_db($connection, 'clean_city_website');

$establishmentName = $_POST['establishment_name'];
$email = $_POST['email'];
$location = $_POST['location'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$id = $_POST['id'];

$selectQuery = "SELECT * FROM `registration_table` WHERE establishment_name = '$establishmentName'";
$result = mysqli_query($connection,$selectQuery);

$num = mysqli_num_rows($result);

if ($num == 1){
    echo "Establishment already registered";
}else{
    $registration = "INSERT INTO `registration_table`(`id`, `establishment_name`, `email_address`, `location`, `contact`, `password`) VALUES ('$id','$establishmentName','$email','$location','$contact','$password')";
    mysqli_query($connection,$registration);
    echo "Registration successful";
}