<?php
include("include/init.php");

$action = isset($_GET['action']) ? $_GET['action'] : "";


if($action == "logout"){
	setcookie("user_info",NULL,time()-1111);
	show_msg('退出成功','index.php');
	exit;
}

$user = new M('user');

if($_POST){
	$user_phone = trim($_POST['user_phone']);
	$user_pwd = md5($_POST['user_pwd']);

	$user_info = $user->select("user_phone = '$user_phone' AND user_pwd = '$user_pwd'")->find();

	if(!empty($user_info)){
		$data = array("user_login"=>time());
		$where = "user_id = ".$user_info['user_id'];
		$affect_id = $user->update($data,$where);

		if($affect_id){
			setcookie("user_info",json_encode($user_info),time()+3600*24);  //用户手机号码
			show_msg("登录成功",'user.php');
			exit();
		}
		
	}


}



//设置模板路径
$smarty->display('login.html');



?>