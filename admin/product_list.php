<?php
include("../include/init.php");
include('check_admin.php');



//搜索
$start_time = isset($_GET['start_time']) ? strtotime($_GET['start_time']) : 0;
$end_time = isset($_GET['end_time']) ? strtotime($_GET['end_time']) : 0;
$keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : "";
$where = "";

if($start_time && !$end_time){
	$where = "product_time > $start_time";
}else if(!$start_time && $end_time){
	$where = "product_time < $end_time";
}else if($start_time && $end_time){
	$where = "product_time BETWEEN $start_time AND $end_time";
}else if(!empty($keywords)){
	$where = "product_name = '$keywords'";
}else{
	$where = 1;
}


$product = new M('product');
//单条删除
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : 0;

if($product_id){
	$affect_id = $product->delete("product_id = $product_id");
	if($affect_id){
		show_msg("删除产品成功",'product_list.php');
		exit;
	}else{
		show_msg("删除产品失败",'product_list.php');
		exit;
	}
}

//批量删除
$delete_product = isset($_GET['id']) ? $_GET['id'] : 0;

if($delete_product){
	$product_arr = implode(',',$delete_product);
	$where = "product_id IN($product_arr)";
	$affect_id = $product->delete($where);
	if($affect_id){
		show_msg("批量删除产品成功",'product_list.php');
		exit;
	}else{
		show_msg("批量删除产品失败",'product_list.php');
		exit;
	}
}

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$limit = 6;

$size = 5;

$start = ($page-1)*$limit;

$count = $product->select($where,"count(*) AS c")->find();

$product_list = $product->select($where)->orderBy(['product_id',"DESC"])->limit([$start,$limit])->findAll();

$page_str = page($page,$count['c'],$limit,$size);







//赋值
$smarty->assign("product_list",$product_list);
$smarty->assign("page_str",$page_str);
$smarty->assign("start_time",$start_time);
$smarty->assign("end_time",$end_time);

//设置模板路径
$smarty->display('admin/product_list.html');



?>