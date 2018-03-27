<?php
include("../include/init.php");
include ('check_admin.php');

$user = new M("user");

if($_POST){
    $data=array(
       "user_phone"=>$_POST['user_phone'],
       "user_login"=>$_POST['user_login'],
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
            
            $insert_id=$user->save($data);
// var_dump( $insert_id);
//           exit;
            if($insert_id){
              show_msg("添加会员成功","user_list.php");
              exit;
            }else{
            	show_msg("添加会员失败","user_add.php");
            	exit;
            }


            };



//设置模板路径

$smarty->display('admin/user_add.html');



?>