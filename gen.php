<?php
include 'db.php';
include 'fetch.php';
if(isset($_POST['add']))
{
    $name = $_POST['name'];
    $title = $_POST['title'];
    $con = $_POST['con'];
    $sql  = "insert into users (GeneratorName,Title,Content) values ('$name','$title','$con')";
   $insert =  mysqli_query($conn,$sql);

   if($insert)
   {
    echo "<br>record inserted..<br>";
    header('Location:Assessment1.php');
   }
}
?>
<html>
    <head><title>Assessment</title></head>
    <body>
    <center>
<form method="post">
    <table>
        <thead>
            <tr>
                <th>Welcome to Python E - Note</th>
            </tr>
        </thead>
      <tbody>    
<tr>
    <td>Enter Python E-Note Generator Name :</td>
    <td>
        <input type="text" name="name" >
    </td>
</tr>
<tr>
    <td>Enter Python E-Note Title :</td>
    <td>
        <input type="text" name="title" >
    </td>
</tr>
<tr>
    <td>Enter Python E-Note Content :</td>
    <td>
        <input type="text" name="con" >
    </td>
</tr>
<tr>    
            <td>
                <input type="submit" name="add" value="Generate">
            </td>
        </tr>
</tbody>
</center>
</form>
</body>
</html>