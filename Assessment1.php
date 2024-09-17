<?php
include 'db.php';
if($conn)
{
    echo "connected...!";
}
if(isset($_POST['gen']))
{
    $name = $_POST['name'];
    $title=$_POST['title'];
    $con=$_POST['con'];
    $sql  = "insert into users (name,title,con) values ('$name','$title','$con')";
   $insert =  mysqli_query($conn,$sql);

   if($insert)
   {
    echo "<br>record inserted..<br>";
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
            <td><a href="gen.php?uid=<?php echo $fetch['id']?>"><input type="submit" name="gen" value="Press 1 for generate Note"></td>
        </tr>
      <tr>
      <td><a href="view.php?uid=<?php echo $fetch['id']?>"><input type="submit" name="view" value="Press 2 for View Note"></td>
        </tr>
      <tr>
      <td><input type="submit" name="exit" value="Press 4 for Exit"></td>
        </tr>
      <tr>
            <td>Enter your choice :</td>
            <td>
                <input type="text" name="choice" >
            </td>
        </tr>
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
      </tbody>
    </table>
</form>
</center>
    </body>
</html>