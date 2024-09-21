<?php
include 'db.php';
$id=$_GET['vid'];
    $sql = "select * from users where Id=$id";
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
    <h1>Welcome to Python E - Note</h1>
   <h3>Generator Name:  <?php echo $fetch['GeneratorName'];?> </h3>
   <h3>Title:  <?php echo $fetch['Title'];?></h3>
   <h3>Content:  <?php echo $fetch['Content'];?></h3>
</body>
</html>