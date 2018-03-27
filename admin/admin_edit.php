<?php
include("../include/init.php");
include('check_admin.php');



$admin_id = isset($_GET['admin_id']) ? $_GET['admin_id']:0;

if(!$admin_id){
  show_msg("该管理员不存在","admin_list.php");
  exit;
}


$admin = new M("admin");


$admin_info = $admin->select("admin_id = $admin_id")->find();

if($_POST){
    $data=array(
       "admin_name"=>$_POST['admin_name'],
       "admin_pwd"=>md5($_POST['admin_pwd']),
       // "admin_desc"=>$_POST['admin_desc'],
       // "admin_time"=>strtotime($_POST['admin_time']),
       // "admin_content"=>$_POST['admin_content'],
    

      );

  if($_FILES['admin_img']['size'] > 0){
    $path = WEB_DIR."/uploads/";
    $filename = uploads("admin_img",1048576,$path);
    $data['admin_img'] = "uploads/$filename";
  }

  $where = "admin_id = $admin_id";

  $affect_id = $admin->update($data,$where);

  if($affect_id){
    show_msg("更新管理员成功","admin_list.php");
    exit;
  }else{
    show_msg("更新管理员失败","admin_edit.php?admin_id=$admin_id");
    exit;
  }


}

$smarty->assign("admin_info",$admin_info);


//设置模板路径
$smarty->display('admin/admin_edit.html');



?>