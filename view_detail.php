<?php
include("include/init.php");


$article_id = isset($_GET['article_id']) ? $_GET['article_id'] : 0;
// var_dump($article_id);

if(!$article_id){
	show_msg("该页面不存在",'view.php');
	exit;
}

$article = new M('article');

$view_detail = $article->select("article_id = $article_id")->find();


//赋值操作
$smarty->assign("view_detail",$view_detail);

//设置模板路径
$smarty->display('view_detail.html');



?>