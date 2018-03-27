<?php
include("../include/init.php");
include ('check_admin.php');

$admin = new M("admin");

if($_POST){
    $data=array(
       "admin_name"=>$_POST['admin_name'],
       "admin_pwd"=>md5($_POST['admin_pwd']),
       // "admin_desc"=>$_POST['admin_desc'],
       // "admin_time"=>strtotime($_POST['admin_time']),
       // "admin_content"=>$_POST['admin_content'],
    

    	);
    // var_dump($data);
    // exit;


         if($_FILES['admin_img']['size']>0){
         	
         	$path=WEB_DIR."/uploads";
         	$filename=uploads("admin_img",21212,$path);
             $data['admin_img']="uploads/$filename";
            }
            
            $insert_id=$admin->save($data);
// var_dump( $insert_id);
//           exit;
            if($insert_id){
              show_msg("添加会员成功","admin_list.php");
              exit;
            }else{
            	show_msg("添加会员失败","admin_add.php");
            	exit;
            }


            };



//设置模板路径

$smarty->display('admin/admin_add.html');



?>