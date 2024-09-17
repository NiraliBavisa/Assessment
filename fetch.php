<?php 
include 'db.php';
$sql = "SELECT * FROM users";
$run = mysqli_query($conn,$sql);
?>