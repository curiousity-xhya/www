<?php
//不打印报错信息在页面
error_reporting(0);
//代码
header('Content-Type:text/html;charset=utf-8');
//引入数据库
include_once("./conn.php");
$sql = "select * from notice ";
$res = mysqli_query($conn, $sql);
//输出内容1测试
// while ($notice = mysqli_fetch_array($res)) {
//     // print_r($notice);
//     $i = 1;
//     print_r($notice['title'] . '<br/>');
//     // echo '<br />';
// }
//输出内容2测试
// while ($notice = mysqli_fetch_array($res)) {
//     // echo "<div>" . $row['message'] . "</div>";
//     echo "<h4>" . $notice['title'] . "</h4>";
//     echo "<h6>" . $notice['time'] . "</h6>";
// }
