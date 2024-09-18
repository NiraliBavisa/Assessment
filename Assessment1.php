<?php
include 'db.php';
if($conn)
{
    echo "connected...!";
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
            <td><a href="gen.php"><input type="submit" name="gen" value="Press 1 for generate Note"></a></td>
        </tr>
      <tr>
      <td><a href="view.php"><input type="submit" name="view" value="Press 2 for View Note"></a></td>
        </tr>
      <tr>
      <td><a href="Assessment1.php"><input type="submit" name="exit" value="Press 4 for Exit"></a></td>
        </tr>
      <tr>
            <td>Enter your choice :</td>
            <td>
                <input type="text" name="choice" >
            </td>
        </tr>
      </tbody>
    </table>
</form>
</center>
    </body>
</html>