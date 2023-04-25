<?php
header('Content-Type:text/html;charset=utf-8');
//引入数据库
include_once("conn.php");
//获取账号ID，在id所在数据库下写入文章

//mysql_select_db("$id",$con);
mysqli_select_db($con,"shudong");
$text = $_POST['text'];
$id=$_COOKIE['id'];
$username=$_COOKIE['username'];

//写入数据库
//$sql="insert into _'$id' (text) values('$text')";
$sql="insert into article(article,id,username) values('$text','$id','$username')";
	$res=mysqli_query($con,$sql);
$sql="insert into article_branch(article,username) values ('$text','$username')";
mysqli_query($con,$sql);
	// no
	setcookie('no',$row['no'],time()+60*60,'/');

	
	if($res>0){
		echo '<meta http-equiv="refresh" content="0.1; url=../html/index.php"> ';
	}else{
		echo "文章发表失败";
	}

?>