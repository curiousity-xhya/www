<?php 
header("Content-type:text/html;charset=utf-8");
/*
参数说明：
$count：总记录数
$page_size：每页显示的记录数
$num_btn：要展示的页码按钮数目
$page：分页的get参数
*/
function page($count,$page_size,$num_btn=10,$page='page'){
	if(!isset($_GET[$page]) || !is_numeric($_GET[$page]) || $_GET[$page]<1){
		$_GET[$page]=1;
	}
	//总页数
	$page_num_all=ceil($count/$page_size);
	if($_GET[$page]>$page_num_all){
		$_GET[$page]=$page_num_all;
	}
	$start=($_GET[$page]-1)*$page_size;
	$limit="limit {$start},{$page_size}";
	echo '当前页：'.$_GET[$page].'<br />';
	$html='';
	if($num_btn>=$page_num_all){
		//把所有的页码按钮全部显示
		for($i=1;$i<=$page_num_all;$i++){//这边的$page_num_all是限制循环次数以控制显示按钮数目的变量,$i是记录页码号
			if($_GET[$page]==$i){
				$html.="<span>{$i}</span> ";
			}else{
				$html.="<a href='test.php?page={$i}'>{$i}</a> ";
			}
		}
	}else{
		$num_left=floor(($num_btn-1)/2);
		$start=$_GET[$page]-$num_left;
		$end=$start+($num_btn-1);
		echo '结束按钮号'.$end.'<br />';
		if($start<1){
			$start=1;
		}
		if($end>$page_num_all){
			$start=$page_num_all-($num_btn-1);
		}
		for($i=0;$i<$num_btn;$i++){
			if($_GET[$page]==$start){
				$html.="<span>{$start}</span> ";
			}else{
				$html.="<a href='test.php?page={$start}'>{$start}</a> ";
			}
			$start++;
		}
	}
	$data=array(
		'limit'=>$limit,
		'html'=>$html
	);
	return $data;
}

?>