<h1>Add User</h1>

<?php
    if(isset($_REQUEST['status']) && $_REQUEST['status'] == 1){
        echo "<h1>User Created Successfully</h1>";
    }
?>

<form name="addUser" method="post" action="addUser.php">

<table>

    <tr><td>UserName</td><td><input type="text" name="user_name"></td></tr>
    <tr><td>Full Name</td><td><input type="text" name="full_name"></td></tr>
    <tr><td>Age</td><td><input type="text" name="age"></td></tr>

    <tr><td><input type="submit" name="submit" value="addUser"></td></tr>

</table>



</form>