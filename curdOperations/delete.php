<?php
require_once('database.php');
$id=base64_decode($_GET['id']);

if(!empty($id)){
    

    $sql = "DELETE from users  WHERE id=".$id;

    $result = mysqli_query($con, $sql);
    if($result){
        $_SESSION['status'] = "Record got Deleted Successfully";
        header('location:view.php');
    }

}

?>