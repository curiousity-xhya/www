<?php
header("Content-type: text/html; charset=utf-8");
//引入连接数据库的文件
include_once("./conn.php");
mysqli_select_db($conn, "schooloa");
//拿到前端传过来的用户名和密码
$username = $_POST['username'];
$password = $_POST['password'];
//查询用户是否存在
$sql = "select * from user where username='$username' and password='$password' limit 1";
//$res=mysqli_query($con,$sql);
$res = $conn->query($sql);
$row = mysqli_fetch_array($res);

if ($row) {
	//检索数据库内容
	$sql = "select * from user where username='$username'";
	$results = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($results);
	//设置通行证
	setcookie('username', $row['username'], time() + 60 * 60, '/');
	echo "<script>alert('登陆成功');</script>";
	echo '<meta http-equiv="refresh" content="0.1; url=document.php"> ';
} else {
	echo "<script>alert('账号或密码错误');</script>";

	echo '<meta http-equiv="refresh" content="0.1; url=login.html">';
}
