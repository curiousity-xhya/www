<?php
header("Content-type: text/html; charset=utf-8");
//引入连接数据库的文件
include_once("conn.php");
mysqli_select_db($con,"shudong");

//检索数据库内容
 // MYSQLModel();
 // global $selectModel;
 $sql='select * from article';
 $results = mysqli_query($con,$sql);
 // while($row = mysqli_fetch_assoc($results)){
	// 		echo "<meta charset='UTF-8'>";
 //            echo "<td>" . $row['article'] . "</td>";
			
 //           };
?>