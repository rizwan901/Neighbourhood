<?php
require('db.php');
include('auth.php');
$username=$_SESSION['username'];
$name = stripslashes($_REQUEST['name']);
$name =  mysqli_real_escape_string($con, $name);
$query = "DELETE FROM `wishList` WHERE name='$name' and username='$username'"; 
$result = mysqli_query($con,$query);
header("Location: wishList.php"); 
?>