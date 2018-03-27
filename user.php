<?php
include("include/init.php");

//判断是否有登录
if(empty($_COOKIE['user_info'])){
	show_msg("请重新登录",'login.php');
	exit;
}

//赋值
$smarty->assign("user_info",json_decode($_COOKIE['user_info'],true));


//设置模板路径
$smarty->display('user.html');



?>