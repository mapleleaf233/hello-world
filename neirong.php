<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>


<?php 
session_start();
$id=$_SESSION['name'];
$content = $_POST['content'];
$title = $_POST['title'];
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'liuyan'); 
mysqli_set_charset($con, "utf8"); 
$result = mysqli_query($con,"insert into note (title,content) values ('$title','$content')");

if(!$result){
	echo "发布失败！ <a href='liuyan.php'>返回上一层</a>";
}else{
	echo "发布成功！<a href='liuyan.php'>返回上一层</a>";
}


 ?>