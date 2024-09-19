<?php
include 'db.php';
if(isset($_POST['submit'])=='1')
{
    header('Location:gen.php');
}
else if(isset($_POST['submit'])=='2')
{
    header('Location:view.php');
}
else if(isset($_POST['submit'])=='4')
{
    header('Location:exit.php');
}
else
{
    echo "Invalid Input";
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
       <?php include 'fetch.php'; ?>
      <tr>
            <td>Press 1 for generate Note</td>
        </tr>
      <tr>
      <td>Press 2 for View Note</td>
        </tr>
      <tr>
      <td>Press 4 for Exit</td>
        </tr>
      <tr>
            <td>Enter your choice :</td>
            <td>
                <input type="text" name="choice" >
            </td>
      </tr>
    <tr><td><input type="submit" name="submit"></tr>
      </tbody>
    </table>
</form>
</center>
    </body>
</html>