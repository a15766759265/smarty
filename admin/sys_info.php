<?php
include("../include/init.php");
include('check_admin.php');



$set = new M('settings');

$set_list = $set->select()->findAll();
// var_dump($set_list);
// exit;

if($_POST){
	$affect_arr = array();
	foreach($_POST as $key=>$item){
		$data = array(
			"set_value"=>$item,
		);

		$where = "set_name = '$key'";

		$affect_arr[] = $set->update($data,$where);
	}

	if(in_array(1,$affect_arr)){
		show_msg('修改网站配置成功','sys_info.php');
		exit;
	}else{
		show_msg('修改网站配置失败','sys_info.php');
		exit;
	}



	
}


//赋值
$smarty->assign("set_list",$set_list);


//设置模板路径
$smarty->display('admin/sys_info.html');



?>