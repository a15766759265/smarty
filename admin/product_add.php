<?php
include("../include/init.php");
include('check_admin.php');



$product = new M("product");


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
	// $path = WEB_DIR."/uploads/";
	// 	var_dump($path);
	//           exit;
	// var_dump($_POST);
	// exit;

	if($_FILES['product_img']['size'] > 0){
		$path = WEB_DIR."/uploads/";
		$filename = uploads("product_img",1048576,$path);
		$data['product_img'] = "uploads/$filename";
	}
	// var_dump($filename);
	// exit;

	$insert_id = $product->save($data);

	if($insert_id){
		show_msg("添加产品成功","product_list.php");
		exit;
	}else{
		show_msg("添加产品失败","product_add.php");
		exit;
	}


}


//设置模板路径
$smarty->display('admin/product_add.html');



?>