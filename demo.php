<?php

include("./include/smartyBC_init.php");


//设置模板解析路径和变量结构

//传送变量到HTML模板里面
//name 的意思代表为：传输的变量名
//php 变量名 所对应的值
$smarty->assign("name","php");

$smarty->assign('articleTitle', "War Dims Hope for Peace. \r\nsadsadsadasd. \r\n asdsadsadsadsad.  \r\n");

$smarty->assign('title',"&Stiff Opposition Expected to Casketless Funeral Plan'");


$data = array(234,324,23,4324,32,432,4,32,4324);


$time = 0;


$smarty->assign("demo_list",$data);
$smarty->assign("time",$time);

//设置模板路径
$smarty->display('demo.html');



?>