<?php /* Smarty version 3.1.27, created on 2017-06-08 15:02:07
         compiled from "D:\phpStudy\WWW\MobiPark\templates\admin\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:272055938f66f1a7fe7_57464139%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e7edd2dba806ebdf70b6ce5bd3ba28c3baea971' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\admin\\index.html',
      1 => 1496905322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272055938f66f1a7fe7_57464139',
  'variables' => 
  array (
    'admin_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5938f66f1e2973_40597859',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5938f66f1e2973_40597859')) {
function content_5938f66f1e2973_40597859 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '272055938f66f1a7fe7_57464139';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="../static/admin/css/pintuer.css">
    <link rel="stylesheet" href="../static/admin/css/admin.css">
    <?php echo '<script'; ?>
 src="../static/admin/js/jquery.js"><?php echo '</script'; ?>
>   
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top"W>
    <h1><img src="../<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['admin_img'];?>
" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href=".././index.php" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="login.php?action=logout"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:block">
    <li><a href="sys_info.php" target="right"><span class="icon-caret-right"></span>网站设置</a></li>
    <li><a href="product_list.php" target="right"><span class="icon-caret-right"></span>产品管理</a></li>
    <li><a href="admin_list.php" target="right"><span class="icon-caret-right"></span>管理员</a></li>
    <li><a href="article_list.php" target="right"><span class="icon-caret-right"></span>文章管理</a></li>
    <li><a href="artcate_list.php" target="right"><span class="icon-caret-right"></span>文章分类管理</a></li>
    <li><a href="order_list.php" target="right"><span class="icon-caret-right"></span>订单管理</a></li>
    <li><a href="user_list.php" target="right"><span class="icon-caret-right"></span>用户管理</a></li>
  </ul>   
</div>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
<?php echo '</script'; ?>
>
<ul class="bread">
  <li><a href="#" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="sys_info.php" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html><?php }
}
?>