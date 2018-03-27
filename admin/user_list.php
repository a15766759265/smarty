<?php
include("../include/init.php");
include ('check_admin.php');


//搜索
$start_time = isset($_GET['start_time']) ? strtotime($_GET['start_time']) : 0;
$end_time = isset($_GET['end_time']) ? strtotime($_GET['end_time']) : 0;
$keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : "";
$where = "";

if($start_time && !$end_time){
	$where = "user_time > $start_time";
}else if(!$start_time && $end_time){
	$where = "user_time < $end_time";
}else if($start_time && $end_time){
	$where = "user_time BETWEEN $start_time AND $end_time";
}else if(!empty($keywords)){
	$where = "user_phone = '$keywords'";
}else{
	$where = 1;
}


$user = new M('user');

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$limit = 6;

$size = 5;

$start = ($page-1)*$limit;

$count = $user->select($where,"count(*) AS c")->find();

$user_list = $user->select($where)->orderBy(['user_id',"DESC"])->limit([$start,$limit])->findAll();
// var_dump($user_list);
// exit;

$page_str = page($page,$count['c'],$limit,$size);


//单条删除
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : 0;

if($user_id){
	$affect_id = $user->delete("user_id = $user_id");
	if($affect_id){
		show_msg("删除会员成功",'user_list.php');
		exit;
	}else{
		show_msg("删除会员失败",'user_list.php');
		exit;
	}
}

//批量删除
$delete_user = isset($_GET['id']) ? $_GET['id'] : 0;

if($delete_user){
	// var_dump($delete_user);
 //   exit;
	$user_arr = implode(',',$delete_user);
	$where = "user_id IN($user_arr)";
	$affect_id = $user->delete($where);
	if($affect_id){
		show_msg("批量删除会员成功",'user_list.php');
		exit;
	}else{
		show_msg("批量删除会员失败",'user_list.php');
		exit;
	}
}



//赋值
$smarty->assign("user_list",$user_list);
$smarty->assign("page_str",$page_str);
$smarty->assign("start_time",$start_time);
$smarty->assign("end_time",$end_time);

//设置模板路径
$smarty->display('admin/user_list.html');



?>