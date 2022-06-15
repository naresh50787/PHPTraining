<?php
require_once('database.php');
    echo "<h2>Add User</h2>";

    if(isset($_POST['user_name'])){
        //print_r($_POST);

        $user_name = $_POST['user_name'];
        $full_name = $_POST['full_name'];
        $age       = $_POST['age'];

        

        $sql = "INSERT INTO users (`user_name`, `full_name`, `age`) values ('".$user_name."', '".$full_name."', ".$age.")";

        $result = mysqli_query($con, $sql);

        if($result){
            header('location:insert.php?status=1');
            //echo "<h1>User Created Successfully</h1>";
        }else{
            header('location:insert.php?status=0');
            //echo "<h1>Some thing went wrong User not able to create";
        }


    }

?>