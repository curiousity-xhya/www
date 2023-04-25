<?php
//连接数据库
header('Content-Type:text/html;charset=utf-8');
$conn = mysqli_connect("localhost", "root", "root", "schooloa");
if ($conn) {
    // echo '连接成功';
} else {
    echo '连接失败';
}
