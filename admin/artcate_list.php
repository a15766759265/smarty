<?php
include("../include/init.php");
include ('check_admin.php');


//搜索
$start_time = isset($_GET['start_time']) ? strtotime($_GET['start_time']) : 0;
$end_time = isset($_GET['end_time']) ? strtotime($_GET['end_time']) : 0;
$keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : "";
$where = "";

if($start_time && !$end_time){
	$where = "artcate_time > $start_time";
}else if(!$start_time && $end_time){
	$where = "artcate_time < $end_time";
}else if($start_time && $end_time){
	$where = "artcate_time BETWEEN $start_time AND $end_time";
}else if(!empty($keywords)){
	$where = "artcate_name = '$keywords'";
}else{
	$where = 1;
}


$artcate = new M('article_cate');

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$limit = 6;

$size = 5;

$start = ($page-1)*$limit;

$count = $artcate->select($where,"count(*) AS c")->find();

$artcate_list = $artcate->select($where)->orderBy(['artcate_id',"DESC"])->limit([$start,$limit])->findAll();
// var_dump($artcate_list);
// exit;

$page_str = page($page,$count['c'],$limit,$size);


//单条删除
$artcate_id = isset($_GET['artcate_id']) ? $_GET['artcate_id'] : 0;

if($artcate_id){
	$affect_id = $artcate->delete("artcate_id = $artcate_id");
	if($affect_id){
		show_msg("删除产品成功",'artcate_list.php');
		exit;
	}else{
		show_msg("删除产品失败",'artcate_list.php');
		exit;
	}
}

//批量删除
$delete_artcate = isset($_GET['id']) ? $_GET['id'] : 0;

if($delete_artcate){
	// var_dump($delete_artcate);
 //   exit;
	$artcate_arr = implode(',',$delete_artcate);
	$where = "artcate_id IN($artcate_arr)";
	$affect_id = $artcate->delete($where);
	if($affect_id){
		show_msg("批量删除产品成功",'artcate_list.php');
		exit;
	}else{
		show_msg("批量删除产品失败",'artcate_list.php');
		exit;
	}
}



//赋值
$smarty->assign("artcate_list",$artcate_list);
$smarty->assign("page_str",$page_str);
$smarty->assign("start_time",$start_time);
$smarty->assign("end_time",$end_time);

//设置模板路径
$smarty->display('admin/artcate_list.html');



?>