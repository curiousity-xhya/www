<?php
header("Content-type: text/html; charset=utf-8");
//引入连接数据库的文件
include_once("php/conn.php");
mysqli_select_db($con,"shudong");
//拿到前端传过来的用户名和密码
 $username = $_POST['usernameIn'];
 $password = $_POST['passwordIn'];
 //查询用户是否存在
 $sql = "select * from user where username='$username' and password='$password' limit 1";
 //$res=mysqli_query($con,$sql);
 $res=$con->query($sql);
 $row=mysqli_fetch_array($res);
 // $che=mysqli_query("select id from user where username='$username' and password='$password' limit 1");
 // $row=mysqli_fetch_array($che);
 //echo mysql_error();
 if($row){
	//检索数据库内容
	 $sql="select * from user where username='$username'";
	 $results = mysqli_query($con,$sql);
	 $row = mysqli_fetch_assoc($results);
	 //设置通行证
	 setcookie('username',$row['username'],time()+60*60,'/');
	 //setcookie('username',$username,time()+60*60,'/');
	 setcookie('id',$row['id'],time()+60*60,'/');
	 //echo ' $_COOKIE['username'] ';
	 echo"<script>alert('登陆成功');</script>";
    echo '<meta http-equiv="refresh" content="0.1; url=html/index.php"> ';
 }else{
	echo"<script>alert('账号或密码错误');</script>";
    echo'<meta http-equiv="refresh" content="0.1; url=html/login.html">';
 }
?>