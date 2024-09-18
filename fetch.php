<?php 
include 'db.php';
$sql = "SELECT * FROM users";
$run = mysqli_query($conn,$sql);
$fetch = mysqli_fetch_array($run);
?>