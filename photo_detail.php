<?php
include("include/init.php");


$article_id = isset($_GET['article_id']) ? $_GET['article_id'] : 0;

if(!$article_id){
	show_msg("该页面不存在",'photo.php');
	exit;
}

$article = new M('article');

$article_detail = $article->select("article_id = $article_id")->find();


//赋值操作
$smarty->assign("article_detail",$article_detail);

//设置模板路径
$smarty->display('photo_detail.html');



?>