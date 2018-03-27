<?php
include("../include/init.php");
include('check_admin.php');



$product_id = isset($_GET['product_id']) ? $_GET['product_id']:0;
// var_dump($product_id );
// exit;
if(!$product_id){
	show_msg("该产品不存在","product_list.php");
	exit;
}


$product = new M("product");


$product_info = $product->select("product_id = $product_id")->find();

if($_POST){
	$data = array(
		"product_name"=>$_POST['product_name'],
		"product_price"=>$_POST['product_price'],
	
		"product_address"=>$_POST['product_address'],
		"product_promise"=>$_POST['product_promise'],
		"product_desc"=>$_POST['product_desc'],
		"product_content"=>$_POST['product_content'],
		"product_time"=>strtotime($_POST['product_time']),
	);

	if($_FILES['product_img']['size'] > 0){
		$path = WEB_DIR."/uploads/";
		$filename = uploads("product_img",1048576,$path);
		$data['product_img'] = "uploads/$filename";

	}
		


	$where = "product_id = $product_id";

	$affect_id = $product->update($data,$where);

	if($affect_id){
		show_msg("更新产品成功","product_list.php");
		exit;
	}else{
		show_msg("更新产品失败","product_edit.php?product_id=$product_id");
		exit;
	}


}

$smarty->assign("product_info",$product_info);


//设置模板路径
$smarty->display('admin/product_edit.html');



?>