<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylep.css">
	<title>树洞</title>
</head>
<body>
	<?php   header("Content-type: text/html; charset=utf-8");
	        
			//引入连接数据库的文件
			include_once("../php/conn.php");
			mysqli_select_db($con,"shudong");
			
			//MySQLModel();
			// global $selectModel;
			// $x=$_COOKIE['id'];
			// $sql = 'select * from article where id=$x';
			// $arr = $selectModel($sql);
			
			
				$x=$_COOKIE['id'];
				//$sql='select * from article where id=$x';
				$sql="select * from article WHERE id='{$x}'";
				$results = mysqli_query($con,$sql);
			//echo mysqli_error();
	?>
	<div id="All">
		<div id="Page"><!--页面内容-->
				<div id="Top"><!--页面顶部，包含网页logo-->
					<div id="Title"><a href="#"><img src="../images/1.png" alt="树洞" width="100px" /></a></div>
				</div>
				<div id="Nav"><!--页面导航栏-->
					<ul>
						<li><a href="index.php">首页</a></li>
						<li><a href="#">热门</a></li>
						<li><a href="#">最新</a></li>
						<li><a href="#">关注</a></li>
						<li><a href="sendp.html">发帖</a></li>
						<li><a href="myArticle.php">我的文章</a></li>
					</ul>
				</div>
				<div id="Main"><!--页面文章区，sendp.html页发送过来的内容在此展现-->
                	<ul class="list">
						<?php    while($row = mysqli_fetch_assoc($results)){ 
								
								// if(is_array($arr) && !empty($arr)){
								// 	foreach($arr as $v){
						?>
                        <li>
                        	<a href="#"><h3><?php echo $_COOKIE['username'];?></h3></a>
                            <p><?php echo '<td>'.$row['article'].'</td>';  ;?></p>
							<p><?php echo "第" . $row['no'] ."条帖子" ?>
							<div class="c2">
								<a href="#"><img src="../images/编辑 (1).png" alt=""><p>编辑</p></a>
							</div>
						    <div class="c2">
							    <a href="../php/delete.php"><img src="../images/删 除.png" alt=""><p>删除</p></a>
						    </div>
                        </li>
						<?php }
								?>
                        
                        
                    </ul>
					<div ><!--翻页-->
						<span class="page">
					<?php include_once("../php/page.php");   
                              $page=page(100,10,5);
						      echo $page['html'];
						 ?>
						</span>
						</div>
				</div>
				<div id="Side"><!--页面侧边栏-->
					<dl class="function">
						<div class="button">
							<button><a href="#">文章管理</a>
							<button><a href="sendp.html">发表内容</a>
						</dl>
					</div>
				
				<div id="Bottom"><!--页面版权页-->
					<h3 id="copy">&copy 南京邮电大学通达学院 挑战杯 树洞</h3>
				</div>
		</div>
</body>
</html>