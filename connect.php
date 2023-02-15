<body>
<form action="#" method="POST">
product name :<input type="text" name="a1"><br>
product price:<input type="text" name="a2"><br>
product qty  :<input type="text" name="a3"><br>
<!-- product amount  :<input type="text" name="a4"><br> -->
<input type="submit" name="submit" id="submit" value="submit">
</form>
</body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="connect";
$con= new mysqli($servername,$username,$password,$dbname);
// if($con->connect_error)
// {
// echo "connection failed";
// die ("connection failed".$con->connect_error);
// }
// else
// {
// echo "connected succesfully";
// }
$t1=$_POST['a1'];
$t2=$_POST['a2'];
$t3=$_POST['a3'];
$t4=$_POST['a2']*$_POST['a3'];
// $sql= "CREATE table product1(name varchar(30),price int(5) ,quantity int(5),amount int(5))";
// if($con->query ($sql)===true)
// {
//     echo "table created succesfully";
// }
// else
// {
//     echo "invalid";
// }
// $con->close();
$sql="INSERT INTO `product1`(`name`,`price`,`quantity`,`amount`)VALUES('$t1','$t2','$t3','$t4')";
$rs=mysqli_query($con,$sql);
if($rs)
{
    echo "records inserted";
}

?>