<?php
include("../include/init.php");
include ('check_admin.php');






$user_id = isset($_GET['user_id']) ? $_GET['user_id']:0;

if(!$user_id){
  show_msg("该产品不存在","user_list.php");
  exit;
}


$user = new M("user");


$user_info = $user->select("user_id = $user_id")->find();
if($_POST){
    $data=array(
       "user_phone"=>$_POST['user_phone'],
       "user_login"=>$_POST['user_login'],
       "user_pwd"=>$_POST['user_pwd'],
       // "user_desc"=>$_POST['user_desc'],
       "user_time"=>strtotime($_POST['user_time']),
       // "user_content"=>$_POST['user_content'],
    

    	);
    // var_dump($data);
    // exit;


         if($_FILES['user_img']['size']>0){
         	
         	$path=WEB_DIR."/uploads";
         	$filename=uploads("user_img",21212,$path);
             $data['user_img']="uploads/$filename";
            }
            
  $where = "user_id = $user_id";

  $affect_id = $user->update($data,$where);

  if($affect_id){
    show_msg("更新会员成功","user_list.php");
    exit;
  }else{
    show_msg("更新会员失败","user_edit.php?user_id=$user_id");
    exit;
  }


}

$smarty->assign("user_info",$user_info);

//设置模板路径

$smarty->display('admin/user_edit.html');



?>