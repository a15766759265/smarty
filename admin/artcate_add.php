<?php
include("../include/init.php");
include ('check_admin.php');

$artcate = new M("article_cate");

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
            
            $insert_id=$artcate->save($data);
// var_dump( $insert_id);
//           exit;
            if($insert_id){
              show_msg("添加成功","artcate_list.php");
              exit;
            }else{
            	show_msg("添加失败","artcate_add.php");
            	exit;
            }


            };



//设置模板路径

$smarty->display('admin/artcate_add.html');



?>