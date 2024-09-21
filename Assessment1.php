<?php
include 'db.php';
if(isset($_POST['submit']))
{
    header('Location:gen.php');
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
    <table border="1" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>GeneratorName</th>
            <th>Title</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>   
<?php 
include 'fetch.php';
while($fetch = mysqli_fetch_array($run))
{
?>
        <tr>
            <td><?php echo $fetch['Id'] ?></td>
            <td><?php  echo $fetch['GeneratorName']?></td>
            <td><?php  echo $fetch['Title']?></td>
            <td><?php  echo $fetch['Content']?></td>
            <td>
            <a href="gen.php?genid=<?php echo $fetch['Id']?>">Generate</a>
                <a href="view.php?vid=<?php echo $fetch['Id']?>">View</a>
                <a href="exit.php?delid=<?php echo $fetch['Id']?>">Exit</a>
            </td>
        </tr>

<?php } ?>
    </tbody>
</table>
</form>
</center>
    </body>
</html>