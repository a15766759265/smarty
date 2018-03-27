<?php
include("include/init.php");


$article = new M("article");

$view_info = $article->select()->orderBy(['article_id',"asc"])->limit([7])->findAll();

// var_dump($view_info );
// exit;



//赋值操作
$smarty->assign("view_info",$view_info);


//设置模板路径
$smarty->display('view.html');



?>