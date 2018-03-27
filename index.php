<?php
include("include/init.php");


$article = new M("article");


//首页头条文章(5条)
$article_hot = $article->select()->orderBy(['article_id',"desc"])->limit([5])->findAll();
// var_dump($article_hot);
// exit();



//赋值操作
$smarty->assign("article_hot",$article_hot);


//设置模板路径
$smarty->display('index.html');



?>