<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>欢迎来到小小留言板</title>
</head>
<body>


<style type="text/css">
	html{   
    width: 100%;   
    height: 100%;   
    overflow: hidden;   
    font-style: sans-serif;
     background-image:url(3.jpg);
     background-size:cover  
}  
body{   
    width: 100%;   
    height: 100%;   
    font-family: 'Open Sans',sans-serif;   
    margin: 0;   
     
}   
#liuyan{   
    position: absolute;   
    top: 48%;   
    left:25%;   
    margin: 220px 0 0 -100px;   
    width: 70px;   
    height: 80px;   
}   


input{   
    width: 278px;   
    height: 18px;   
    margin-bottom: 10px;   
    outline: none;   
    padding: 10px;   
    font-size: 13px;   
    color: #fff;   
    text-shadow:1px 1px 1px;   
    border-top: 1px solid #312E3D;   
    border-left: 1px solid #312E3D;   
    border-right: 1px solid #312E3D;   
    border-bottom: 1px solid #56536A;   
    border-radius: 4px;   
    background-color: #2D2D3F;   
}   
.but{   
    width: 300px;   
    min-height: 20px;   
    display: block;   
    background-color: #4a77d4;   
    border: 1px solid #3762bc;   
    color: #fff;   
    padding: 9px 14px;   
    font-size: 15px;   
    line-height: normal;   
    border-radius: 5px;   
    margin: 0;   
}  





</style>

<p>欢迎来到小小留言板</p>
<?php 
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'liuyan'); 
mysqli_set_charset($con, "utf8"); 
$result = mysqli_query($con,"select * from note");


while ($su=mysqli_fetch_array($result,MYSQLI_ASSOC)) {

	
	echo"<br><br>标题:$su[title]<br>内容:$su[content]";
}
echo "<br>欢迎您！".$_SESSION['name'];
	echo  "	<br>

	<form method='post' action='neirong.php'>
		标题:<input type='textarea' name='title'><br>
		内容:<input type='textarea' name='content'>
		
		<input type='submit' name='' id='liuyan'>
	</form>";

?>
</body>
</html>