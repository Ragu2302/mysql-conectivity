<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="welcome.php" method="post" class="forms">
user:<input type="text "name="c1"><br>
pass:<input type="text" name="c2"><br>
<button name="submit" class="button">login</button> 
</form>   
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  $username=$_POST['c1'];
  $password=$_POST['c2'];
  $con=mysqli_connect("localhost","root","","logesh");
  $sql="select username,password from ravi WHERE username='$username'AND password='$password'";
  $query=mysqli_query($con,$sql);
  $result=mysqli_num_rows($query);
  if($result==1)
  {
    header("location:forms.html");
  }
  else
  {
    echo "not connected";
  }
}
?>