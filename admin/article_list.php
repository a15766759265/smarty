<?php
include("../include/init.php");
include ('check_admin.php');


//搜索
$start_time = isset($_GET['start_time']) ? strtotime($_GET['start_time']) : 0;
$end_time = isset($_GET['end_time']) ? strtotime($_GET['end_time']) : 0;
$keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : "";
$where = "";

if($start_time && !$end_time){
	$where = "article_time > $start_time";
}else if(!$start_time && $end_time){
	$where = "article_time < $end_time";
}else if($start_time && $end_time){
	$where = "article_time BETWEEN $start_time AND $end_time";
}else if(!empty($keywords)){
	$where = "article_title = '$keywords'";
}else{
	$where = 1;
}


$article = new M('article');

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$limit = 6;

$size = 5;

$start = ($page-1)*$limit;

$count = $article->select($where,"count(*) AS c")->find();

$article_list = $article->select($where)->orderBy(['article_id',"DESC"])->limit([$start,$limit])->findAll();

$page_str = page($page,$count['c'],$limit,$size);


//单条删除
$article_id = isset($_GET['article_id']) ? $_GET['article_id'] : 0;

if($article_id){
	$affect_id = $article->delete("article_id = $article_id");
	if($affect_id){
		show_msg("删除产品成功",'article_list.php');
		exit;
	}else{
		show_msg("删除产品失败",'article_list.php');
		exit;
	}
}

//批量删除
$delete_article = isset($_GET['id']) ? $_GET['id'] : 0;

if($delete_article){
	// var_dump($delete_article);
 //   exit;
	$article_arr = implode(',',$delete_article);
	$where = "article_id IN($article_arr)";
	$affect_id = $article->delete($where);
	if($affect_id){
		show_msg("批量删除产品成功",'article_list.php');
		exit;
	}else{
		show_msg("批量删除产品失败",'article_list.php');
		exit;
	}
}



//赋值
$smarty->assign("article_list",$article_list);
$smarty->assign("page_str",$page_str);
$smarty->assign("start_time",$start_time);
$smarty->assign("end_time",$end_time);

//设置模板路径
$smarty->display('admin/article_list.html');



?>