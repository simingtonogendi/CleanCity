<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $emailAddress = $_POST['email'];
    $amountInDollars = $_POST['amount'];
    $id = $_POST['id'];

    $connection = mysqli_connect('localhost','root','' );
    $insertQuery = "INSERT INTO `donation`(`id`, `name`, `email`, `amount`) VALUES ('$name','$emailAddress','$amountInDollars','$id')";

    if (isset($connection)){
        echo "Success: You'll be contacted shortly";
    }else{
        echo "There was an error: Retry";
    }

}