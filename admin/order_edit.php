<?php
include("../include/init.php");
include('check_admin.php');



$order_id = isset($_GET['order_id']) ? $_GET['order_id']:0;
// var_dump($order_id );
// exit;
if(!$order_id){
	show_msg("该订单不存在","order_list.php");
	exit;
}


$order = new M("order");


$order_info = $order->select("order_id = $order_id")->find();

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

	if($_FILES['order_img']['size'] > 0){
		$path = WEB_DIR."/uploads/";
		$filename = uploads("order_img",1048576,$path);
		$data['order_img'] = "uploads/$filename";
	}

	$where = "order_id = $order_id";

	$affect_id = $order->update($data,$where);

	if($affect_id){
		show_msg("更新产品成功","order_list.php");
		exit;
	}else{
		show_msg("更新产品失败","order_edit.php?order_id=$order_id");
		exit;
	}


}

$smarty->assign("order_info",$order_info);


//设置模板路径
$smarty->display('admin/order_edit.html');



?>