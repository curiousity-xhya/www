<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
	<title>树洞</title>
</head>
<body>
	<div id="header">
		<div class="header-two clearfix">
			<div class="content-width clearfix">
				<ul class="ul-one color-hui clearfix">
					<li class=" header-li">
						
						
						<?php if(!$_COOKIE){
							echo '<a href="login.html" class="text-font text-red">你好，请登录/注册</a>&nbsp;&nbsp;';
						}else{
							echo '<a class="text-font text-red">用户名：';
							echo $_COOKIE['username'];
							echo '</a>&nbsp;&nbsp;';
						}
						?>
						
						
					</li>
				</ul>
			</div>
		</div>
	
	
	<?php    include '../php/home page.php'?>
	<div id="All">
		<!--页面内容-->
		<div id="Page">

			<!--页面顶部，包含网页logo-->
				<div id="Top">
					<div id="Title"><a href="#"><img src="../img/treehole.png" alt="树洞" width="100px" /></a></div>
				</div>
				<!--页面导航栏-->
				<div id="Nav">
					<ul>
						<li><a href="index.php">首页</a></li>
						<li><a href="#">热门</a></li>
						<li><a href="#">最新</a></li>
						<li><a href="#">关注</a></li>
						<li><a href="sendp.html">发帖</a></li>
						<li><a href="myArticle.php">我的文章</a></li>
					</ul>
				</div>

				<div id="Main">
					<!--页面文章区，send.html页发送过来的内容在此展现-->
                	<ul class="list">
                       
							<?php    while($row = mysqli_fetch_assoc($results)){ ?> 
							<li>
                        	<a ><h3><?php echo $row['username']?></h3></a>
                            <p><?php echo "<td>" . $row['article'] . "</td>"?></p>
							<p><?php echo "第" . $row['no'] ."条帖子" ?>
							<div class="comment-box">
								<a href="#" class="comment">点赞</a>
                            	<a href="#" class="comment">评论</a>
                                <a href="#" class="comment">举报</a>
                            </div>
                        </li>
						<?php	} ?>
                    </ul>
					<?php
						// $page=5;
						
						// global $totalModel;
						// $total = $totalModel($sql);
						// $pageAll =ceil($total / $page);
						// $dpage = $_GET['page'] ?? 1;
						// $prePage =$dpage -1 < 1 ? 1 :($dpage -1);
						// $nextPage = $dpage + 1 >$pageAll ? $pageAll : ($dpage +1);
						// $num =($dpage -1)* $page;
						// $limit = " LIMIT {$num},{$page}"
						// $s ="select * from article".$limit;
					?>
					<!--翻页-->
					<tr>
						<td colspan="9">
							<span>
							<a href="#"><span class="page first-page">&laquo;</span></a><span class="page now-page">1</span>
						<a href><span class="page">2</span></a>
						<a href><span class="page">3</span></a>
						<a href><span class="page">4</span></a>
					    <a href><span class="page">5</span></a>
					    <a href><span class="page">6</span></a>
						<a href><span class="page">7</span></a>
						<a href><span class="page last-page">&raquo;</span></a>
						</span>
						</td>
						
					</tr>
				</div>

				<!--页面侧边栏-->
				<div id="Side">
					<!--搜索框-->
					<dl class="function">
						<dt class="function_t">搜索</dt>
						<dd class="function_c">
									<form method="post">
										<input type="text" id="edtSearch" size="12" /> 
										<input type="submit" value="提交" id="btnPost" /></form>
						</dd>
					</dl>
					<dl class="function"><!--标签-->
						<dt class="function_t">标签</dt>
                        <dd>
                        	<div class="content">
			<a href="#">家庭</a><a href="#">校园</a><a href="#">情感</a><a href="#">理财</a><a href="#">大学</a><a href="#">职场</a><a href="#">健康</a><a href="#">更多...</a>
		</div>
                        </dd>
					</dl>
					<dl class="function"><!--图片-->
                       <img src="images/12.png" width="270">
					</dl>
				</div>
				<div id="Bottom"><!--页面版权页-->
					<h3 id="copy">&copy 南京邮电大学通达学院 挑战杯 树洞</h3>
				</div>
		</div>
</body>
</html>