<?php

if (isset($_POST['submit'])){
        $services = $_POST['service'];
        $period = $_POST['period'];
        $dayOfTheWeek = $_POST['day'];
        $time = $_POST['time'];
        $establishmentName = $_POST['establishment_name'];
        $phoneNumber = $_POST['contact'];
        $location = $_POST['location'];
        $message = $_POST['message'];
        $id = $_POST['id'];

        $connection = mysqli_connect('localhost','root','' );
        $insertQuery = "INSERT INTO `schedule`(`id`, `service`, `period`, `day`, `time`, `establishment_name`, `contact`, `location`, `message`) VALUES ('$services','$period','$dayOfTheWeek','$time','$establishmentName','$phoneNumber','$location','$message','$id')";

        if (isset($connection)){
            echo "Schedule set";
        }else{
            echo "All fields are required";
        }

}