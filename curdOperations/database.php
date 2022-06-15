<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "PHPTraining");
// echo "<pre>";
 if(!$con){
     echo "Not able to connect to database";
     die();
 }

?>