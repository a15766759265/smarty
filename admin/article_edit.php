<?php
include("../include/init.php");
include ('check_admin.php');
$article_id = isset($_GET['article_id']) ? $_GET['article_id']:0;

if(!$article_id){
  show_msg("该产品不存在","article_list.php");
  exit;
}
$article = new M("article");
$article_info = $article->select("article_id = $article_id")->find();







if($_POST){
    $data=array(
       "article_title"=>$_POST['article_title'],
       "article_author"=>$_POST['article_author'],
       "article_desc"=>$_POST['article_desc'],
       "article_time"=>strtotime($_POST['article_time']),
       "article_content"=>$_POST['article_content'],
    

    	);
    // var_dump($data);
    // exit;


         if($_FILES['article_img']['size']>0){
         	
         	$path=WEB_DIR."/uploads";
         	$filename=uploads("article_img",21212,$path);
             $data['article_img']="uploads/$filename";
            }
            
  $where = "article_id = $article_id";

  $affect_id = $article->update($data,$where);
  // var_dump($affect_id);
  // exit;

  if($affect_id){
    show_msg("更新产品成功","article_list.php");
    exit;
  }else{
    show_msg("更新产品失败","article_edit.php?article_id=$article_id");
    exit;
  }


}

$smarty->assign("article_info",$article_info);

//设置模板路径

$smarty->display('admin/article_edit.html');



?>