<?php

session_start();
$conn = mysqli_connect("localhost","root", "","kidstracker");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



?>