<?php
//连接mysql数据库  $con钥匙
$con=mysqli_connect("localhost","root","root","club");
//设置字符集
header('Content-type:text/html;charset=utf-8');
//选择数据库
// mysqli_query($con,"use club");
//mysqli_query(); 返回一个对象、
//mysqli_fetch_assoc(); 返回一个一维的关联数组
//mysqli_fetch_row();返回一个索引数组
//mysqli_fetch_array();返回一个有索引有关联的数组
//mysqli_num_rows();返回查询时候的结果集的总条数
//mysqli_affected_rows();返回你修改的，删除，添加时受影响的行数
//mysqli_insert_id();返回你插入的当前数据的自增ID
?>
