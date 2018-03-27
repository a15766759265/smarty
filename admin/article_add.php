<?php
include("../include/init.php");
include ('check_admin.php');

$article = new M("article");

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
            
            $insert_id=$article->save($data);
// var_dump( $insert_id);
//           exit;
            if($insert_id){
              show_msg("添加成功","article_list.php");
              exit;
            }else{
            	show_msg("添加失败","article_add.php");
            	exit;
            }


            };



//设置模板路径

$smarty->display('admin/article_add.html');



?>