<?php
require('database.php');

$sql = "SELECT * FROM users";

$result = mysqli_query($con, $sql);
//echo "<pre>";

if(isset($_SESSION['status'])){
    echo "<h1 style='color:green'>".$_SESSION['status']."</h1>";
    unset($_SESSION['status']);
}
?>

<table><tr><th>Id</th><th>User Name</th><th>Full Name</th>
<th>Age</th><th>Created</th>
<th>Edit</th><th>Delete</th></tr>
<?php
if($result){
    while($row = mysqli_fetch_array($result)){ // mysqli_fetch_row // mysqli_fetch_assoc
        //print_r($row);

        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['user_name']."</td>
                <td>".$row['full_name']."</td>
                <td>".$row['age']."</td>
                <td>".$row['created']."</td>
                <td><a href='edit.php?id=".base64_encode($row['id'])."'>Edit</a></td>
                <td><a href='delete.php?id=".base64_encode($row['id'])."'>Delete</a></td>
                </tr>";
    }
}


?>