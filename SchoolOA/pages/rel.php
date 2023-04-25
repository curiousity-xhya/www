<?php
//不打印报错信息在页面
error_reporting(0);
header('Content-Type:text/html;charset=utf-8');
//引入数据库
include_once("./conn.php");
//公告发布
$time = $_POST['time'];
$location = $_POST['location'];
$people = $_POST['people'];
$content = $_POST['content'];
$details = $_POST['details'];
$title = $_POST['title'];
$username = $_COOKIE['username'];
//打印$_POST的数组// print_r($_POST);//$_POST显示为空，则返回发布页面//empty($_POST):$_POST为空则empty($_POST)为flase，不为空为true
if (empty($_POST)) {
    // require('./annrel.html');
} else {
    $sql = "insert into notice(time,location,people,content,details,title,username) values
    ('$time','$location','$people','$content','$details','$title','$username')";
    $res1 = mysqli_query($conn, $sql);
    if ($res1) {
        echo "<script>alert('公告发布成功！');location.href='./annrel.html';</script>";
    } else {
        echo "<script>alert('公告发布失败！');location.href='./annrel.html';</script>";
    }
}
//留言发布
$username = $_COOKIE['username'];
$message = $_GET['message'];
$time = date('Y-m-d h:i:s', time());
if (empty($_GET)) {
    require('./message.php');
} else {
    $sql = "insert into message(username,message,time) values('$username','$message','$time' )";
    $res2 = mysqli_query($conn, $sql);
    if ($res2) {
        echo "<script>alert('留言成功！');location.href='./message.php';</script>";
    } else {
        echo "<script>alert('留言失败！');location.href='./message.php';</script>";
    }
}
//申请教室
//申请功能正在开发中

// function apply()
// {
//     include_once("./conn.php");
//     $sql = "SELECT * FROM document WHERE approval='否'; ";
//     $res = mysqli_query($conn, $sql);
//     $yes = mysqli_fetch_array($res);
//     // print_r($yes);
//     $address = $yes['address'];
//     echo "<script>alert('申请成功成功！');location.href='./classroom.php';</script>";
//     $sql = "UPDATE classromm SET availability = '占用'WHERE address = $address;";
//     $res3 = mysqli_query($conn, $sql);
//     if ($res3) {
//         echo "<script>alert('申请成功！');location.href='./classroom.php';</script>";
//     } else {

//         echo "<script>alert('申请失败！');location.href='./classroom.php';</script>";
//     }
// }
