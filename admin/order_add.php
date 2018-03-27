<?php
include("../include/init.php");
include('check_admin.php');



$order = new M("order");


if($_POST){
	$data = array(
		"order_sn"=>$_POST['order_sn'],
		"order_price"=>$_POST['order_price'],
		
		"order_username"=>$_POST['order_username'],
		"order_phone"=>$_POST['order_phone'],
		"order_date"=>strtotime($_POST['order_date']),
	// "order_content"=>$_POST['order_content'],
		"order_time"=>strtotime($_POST['order_time']),
	);
	// var_dump($data);
	// exit;

	if($_FILES['order_img']['size'] > 0){
		$path = WEB_DIR."/uploads/";
		$filename = uploads("order_img",1048576,$path);
		$data['order_img'] = "uploads/$filename";
	}

	$insert_id = $order->save($data);

	if($insert_id){
		show_msg("添加产品成功","order_list.php");
		exit;
	}else{
		show_msg("添加产品失败","order_add.php");
		exit;
	}


}


//设置模板路径
$smarty->display('admin/order_add.html');



?>