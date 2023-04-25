<?php
header('Content-Type:text/html;charset=utf-8');
//引入数据库
include_once("conn.php");
mysqli_select_db($con,"shudong");
// 
$sql="select * from article";
$results = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($results);
$no=$row['no'];

$che=mysqli_query($con,"delete from article where no='$no'");
   
    

if($che){
    echo "<script>alert('删除成功！');</script>";
}else{
    echo "<script>alert('删除失败！');</script>";
}

echo'<meta http-equiv="refresh" content="0.1; url=../html/myArticle.php">'

?>