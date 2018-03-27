<?php

include('include/init.php');

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$name = '';

if($page == 1){
	$name = 1;
}else if($page == 2){
	$name = 2;
}

$url = $_SERVER['REQUEST_URI'];

$smarty->assign('name',$name);
//全局缓存   整个网站中的所有页面都将会被缓存
$smarty->display("cache.html",$url);
//部分缓存 有部分页面不被缓存
$smarty->clearCache("cache.html",$url);





?>