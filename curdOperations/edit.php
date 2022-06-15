<?php
require_once('database.php');
$id = base64_decode($_REQUEST['id']);

if(isset($_POST['user_name'])){
    $user_name = $_POST['user_name'];
    $full_name = $_POST['full_name'];
    $age = $_POST['age'];

    $sql = "UPDATE users SET `user_name`='".$user_name."',
                             `full_name`='".$full_name."',
                             `age`=".$age." WHERE id=".$id;

    $result = mysqli_query($con, $sql);
    if($result){
        $_SESSION['status'] = "Record Updated Successfully";
        header('location:view.php');
    }

}


$sql = "SELECT * from users where id=".$id;

$result = mysqli_query($con, $sql);

if($result){
    $record = mysqli_fetch_assoc($result);
    //print_r($record);
}


?>

<h1>Edit User Information</h1>
<form name="addUser" method="post" action="">

<table>

    <tr><td>UserName</td><td><input type="text" name="user_name" value="<?php echo $record['user_name']; ?>"></td></tr>
    <tr><td>Full Name</td><td><input type="text" name="full_name" value="<?php echo $record['full_name']; ?>"></td></tr>
    <tr><td>Age</td><td><input type="text" name="age" value="<?php echo $record['age']; ?>"></td></tr>

    <tr><td><input type="submit" name="submit" value="Update User"></td></tr>

</table>



</form>
