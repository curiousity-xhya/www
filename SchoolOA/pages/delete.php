<?php
//不打印报错信息在页面
error_reporting(0);
//代码
header('Content-Type:text/html;charset=utf-8');
//引入数据库
include_once("./conn.php");
mysqli_select_db($con, "schooloa");
$sql = "select * from notice";
$res = mysqli_query($conn, $sql);
$notice = mysqli_fetch_assoc($res);
$title = $notice['title'];
$che = mysqli_query($conn, "delete from notice where title='$title'");
if ($che) {
    echo "<script>alert('删除成功！');location.href='./anndel.php'</script>";
} else {
    echo "<script>alert('删除失败！');location.href='./anndel.php'</script>";
}

echo '<meta http-equiv="refresh" content="0.1; url=../html/myArticle.php">';
