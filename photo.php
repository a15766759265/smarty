<?php
include("include/init.php");


$pageindex = isset($_GET['pageindex']) ? $_GET['pageindex'] : 0;
$limit = 12;

$article = new M('article');

if($pageindex){
	$start = ($pageindex-1)*$limit;
	$article_list = $article->select("artcate_id = 3")->orderBy(['article_id','DESC'])->limit([$start,$limit])->findAll();
	/*
		当通过ajax进行请求数据的时候，记得json输出数据之后一定要退出
	 */
	echo json_encode($article_list);
	exit();
}


$article_list = $article->select("artcate_id = 3")->orderBy(['article_id','DESC'])->limit([0,$limit])->findAll();

//赋值操作
$smarty->assign("article_list",$article_list);

//设置模板路径
$smarty->display('photo.html');



?>