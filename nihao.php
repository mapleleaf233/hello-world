
<?php
session_start();
header("content-Type:text/html;charset=utf-8");


$name=$_POST['name'];
$xh=$_POST["xh"];
$password=$_POST["password"];

$con=mysqli_connect("localhost","root","");
if (!$con) {    die("Connection failed: " . mysqli_connect_error()); } echo "连接成功"; 

mysqli_select_db($con,"nihao"); 

mysqli_set_charset($con,"utf-8");

$sql="SELECT * FROM student where xh='$xh'" ;

$result = mysqli_query($con,$sql);

$su=mysqli_fetch_assoc($result); 


 if($su['password']==$password)
{
     echo '登录成功';
     echo '<a href=".\liuyan.php">前往留言板</a>';
     $_SESSION['name'] =$name;

}

?>