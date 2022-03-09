<?php

if (isset($_POST['btn-submit'])){

$establishmentName = $_POST['establishment_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$id = $_POST['id'];

$mailTo = "simington@gmail.com";
$headers = "From: ".$mailTo;
$txt = "You have received an email from ".$establishmentName.".\n\n".$message;

mail($mailTo,$txt,$headers);
header('location:contact.php?messagesend');
}
