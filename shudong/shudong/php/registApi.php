<?php
header('Content-Type:text/html;charset=utf-8');
//引入数据库
include_once("conn.php");
mysqli_select_db($con,"shudong");

//判断是否被点击(此处须填入前端提交按钮name)
if(isset($_POST['button'])){
	echo"<script>alert('非法访问');</script>";
	echo'<meta http-equiv="refresh" content="0.1; url=../html/login.html">';
}else{
	
	//获取用户名和密码
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	//查询数据库
	$che=mysqli_query($con,"select username from user where username='$username' limit 1 ");
	if(mysqli_fetch_array($che)){
		echo"<script>alert('错误：用户名已存在，请重新注册');</script>";
		echo'<meta http-equiv="refresh" content="0.1; url=../html/login.html">';
	}else{
		$sql="insert into user (username,password,email) values('$username','$password','$email')";
		$res=mysqli_query($con,$sql);
		if($res>0){
			 echo "<script>alert('注册成功，请返回登陆');</script>";
			//str '注册成功';
			echo'<meta http-equiv="refresh" content="0.1; url=../html/login.html">';		//此处须添加返回登录位置
		}
	else{
			echo"<script>alert('错误，请重试');</script>";
	}
		
	//$password =md5($password);
	
	}
	
	
}

//关闭连接
	mysqli_close($con);

?>