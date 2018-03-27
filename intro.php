<?php
include("include/init.php");


$set = new M("settings");

//获取系统的配置信息
$set_info = $set->select("set_id IN(25,30,32,33)")->findAll();

$article = new M('article');

$article_list = $article->select()->orderBy(['article_id','DESC'])->findAll();


//赋值操作
$smarty->assign("set_info",$set_info);
$smarty->assign("article_list",$article_list);

//设置模板路径
$smarty->display('intro.html');



?>