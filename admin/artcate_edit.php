<?php
include("../include/init.php");
include ('check_admin.php');
$artcate_id = isset($_GET['artcate_id']) ? $_GET['artcate_id']:0;

if(!$artcate_id){
  show_msg("该产品不存在","artcate_list.php");
  exit;
}
$artcate = new M("article_cate");
$artcate_info = $artcate->select("artcate_id = $artcate_id")->find();






if($_POST){
    $data=array(
       "artcate_name"=>$_POST['artcate_name'],
       // "artcate_author"=>$_POST['artcate_author'],
       // "artcate_desc"=>$_POST['artcate_desc'],
       "artcate_time"=>strtotime($_POST['artcate_time']),
       // "artcate_content"=>$_POST['artcate_content'],
    

      );
    // var_dump($data);
    // exit;


         if($_FILES['artcate_img']['size']>0){
         	
         	$path=WEB_DIR."/uploads";
         	$filename=uploads("artcate_img",21212,$path);
             $data['artcate_img']="uploads/$filename";
            }
            
  $where = "artcate_id = $artcate_id";

  $affect_id = $artcate->update($data,$where);
  // var_dump($affect_id);
  // exit;

  if($affect_id){
    show_msg("更新产品成功","artcate_list.php");
    exit;
  }else{
    show_msg("更新产品失败","artcate_edit.php?artcate_id=$artcate_id");
    exit;
  }


}

$smarty->assign("artcate_info",$artcate_info);

//设置模板路径

$smarty->display('admin/artcate_edit.html');



?>