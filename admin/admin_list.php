<?php
include("../include/init.php");
include ('check_admin.php');
$admin = new M('admin');

//搜索
// $start_time = isset($_GET['start_time']) ? strtotime($_GET['start_time']) : 0;
// $end_time = isset($_GET['end_time']) ? strtotime($_GET['end_time']) : 0;
$keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : "";
$where = "";

// if($start_time && !$end_time){
// 	$where = "admin_time > $start_time";
// }else if(!$start_time && $end_time){
// 	$where = "admin_time < $end_time";
// }else if($start_time && $end_time){
// 	$where = "admin_time BETWEEN $start_time AND $end_time";
// }else if(!empty($keywords)){
// 	$where = "admin_name = '$keywords'";
// }else{
// 	$where = 1;
// }
    if(!empty($keywords)){
         $where="admin_name = '$keywords'";
    }else{
    	$where=1;
    }
$admin_id = isset($_GET['admin_id']) ? $_GET['admin_id'] : 0;

if($admin_id){
	$affect_id = $admin->delete("admin_id = $admin_id");
	if($affect_id){
		show_msg("删除会员成功",'admin_list.php');
		exit;
	}else{
		show_msg("删除会员失败",'admin_list.php');
		exit;
	}
}

//批量删除
$delete_admin = isset($_GET['id']) ? $_GET['id'] : 0;

if($delete_admin){
	// var_dump($delete_admin);
 //   exit;
	$admin_arr = implode(',',$delete_admin);
	$where = "admin_id IN($admin_arr)";
	$affect_id = $admin->delete($where);
	if($affect_id){
		show_msg("批量删除会员成功",'admin_list.php');
		exit;
	}else{
		show_msg("批量删除会员失败",'admin_list.php');
		exit;
	}
}



$page = isset($_GET['page']) ? $_GET['page'] : 1;

$limit = 6;

$size = 5;

$start = ($page-1)*$limit;

$count = $admin->select($where,"count(*) AS c")->find();

$admin_list = $admin->select($where)->orderBy(['admin_id',"DESC"])->limit([$start,$limit])->findAll();
// var_dump($admin_list);
// exit;

$page_str = page($page,$count['c'],$limit,$size);


//单条删除




//赋值
$smarty->assign("admin_list",$admin_list);
$smarty->assign("page_str",$page_str);
// $smarty->assign("start_time",$start_time);
// $smarty->assign("end_time",$end_time);

//设置模板路径
$smarty->display('admin/admin_list.html');



?>