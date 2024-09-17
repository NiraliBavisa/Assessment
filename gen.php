<?php
include 'db.php';
    $id = $_GET['uid'];
    $sql = "select * from users where id=$id ";
    $run = mysqli_query($conn,$sql);
    $fetch = mysqli_fetch_array($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="assessment1.php">GO back</a>
    <h1>User Details : </h1>
   <h2>Id :   <?php echo $id; ?></h2>
   <h3>Generator Name:  <?php echo $fetch['name'];?> </h3>
   <h3>Title:  <?php echo $fetch['title'];?></h3>
   <h3>Content:  <?php echo $fetch['con'];?></h3>
</body>
</html>