<?php
require('db.php');
include('auth.php');
$username=$_SESSION['username'];
$name = stripslashes($_REQUEST['name']);
$name = mysqli_real_escape_string($con, $name);
$query   = "INSERT into `wishList` (username, name) VALUE ('$username','$name')";
$result  = mysqli_query($con, $query);
echo "<h2>Added to Wish List successfully</h3>";
header("Location: wishlist.php"); 
?>