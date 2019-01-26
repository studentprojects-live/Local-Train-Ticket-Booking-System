<?php
$hostname  = 'localhost';
$username = 'root';
$password='';
$dbname = 'LocalTrainTicketBookingSystem';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>