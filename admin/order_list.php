<?php
include("../include/init.php");
include('check_admin.php');



//搜索
$start_time = isset($_GET['start_time']) ? strtotime($_GET['start_time']) : 0;
$end_time = isset($_GET['end_time']) ? strtotime($_GET['end_time']) : 0;
$keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : "";
$where = "";

if($start_time && !$end_time){
	$where = "order_time > $start_time";
}else if(!$start_time && $end_time){
	$where = "order_time < $end_time";
}else if($start_time && $end_time){
	$where = "order_time BETWEEN $start_time AND $end_time";
}else if(!empty($keywords)){
	$where = "order_sn = '$keywords'";
}else{
	$where = 1;
}


$order = new M('order');
//单条删除
$order_id = isset($_GET['order_id']) ? $_GET['order_id'] : 0;

if($order_id){
	$affect_id = $order->delete("order_id = $order_id");
	if($affect_id){
		show_msg("删除产品成功",'order_list.php');
		exit;
	}else{
		show_msg("删除产品失败",'order_list.php');
		exit;
	}
}

//批量删除
$delete_order = isset($_GET['id']) ? $_GET['id'] : 0;

if($delete_order){
	$order_arr = implode(',',$delete_order);
	$where = "order_id IN($order_arr)";
	$affect_id = $order->delete($where);
	if($affect_id){
		show_msg("批量删除产品成功",'order_list.php');
		exit;
	}else{
		show_msg("批量删除产品失败",'order_list.php');
		exit;
	}
}

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$limit = 6;

$size = 5;

$start = ($page-1)*$limit;

$count = $order->select($where,"count(*) AS c")->find();

$order_list = $order->select($where)->orderBy(['order_id',"DESC"])->limit([$start,$limit])->findAll();

$page_str = page($page,$count['c'],$limit,$size);







//赋值
$smarty->assign("order_list",$order_list);
$smarty->assign("page_str",$page_str);
$smarty->assign("start_time",$start_time);
$smarty->assign("end_time",$end_time);

//设置模板路径
$smarty->display('admin/order_list.html');



?>