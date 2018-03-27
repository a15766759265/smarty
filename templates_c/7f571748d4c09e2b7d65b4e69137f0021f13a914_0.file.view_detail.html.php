<?php /* Smarty version 3.1.27, created on 2017-06-10 10:27:28
         compiled from "D:\phpStudy\WWW\MobiPark\templates\view_detail.html" */ ?>
<?php
/*%%SmartyHeaderCode:53593b59106a54c8_75305382%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f571748d4c09e2b7d65b4e69137f0021f13a914' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\view_detail.html',
      1 => 1492354939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53593b59106a54c8_75305382',
  'variables' => 
  array (
    'view_detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_593b591072e068_89815591',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593b591072e068_89815591')) {
function content_593b591072e068_89815591 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\phpStudy\\WWW\\MobiPark\\include\\smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '53593b59106a54c8_75305382';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>重要通知：农夫乐园1月1日起即将休园 - 农夫乐园官网</title>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="static/css/css.css" rel="stylesheet" type="text/css" />
    <link href="static/css/iconfont.css" rel="stylesheet" type="text/css" />
    
</head>
<body class="mb90">
    
<div class="logo"><a href="/Mobile/"><img src="static/images/201604062008554821632.png" width="150" height="39" /></a></div>
<div class="news_view bgwh">
    <div class="news_view_tit">
        <h1 class="f16 n"><?php echo $_smarty_tpl->tpl_vars['view_detail']->value['article_desc'];?>
</h1>
        <p class="g9 tc"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['view_detail']->value['article_time'],"%Y:%e:%B %H:%M:%S");?>
</p>
    </div>
    <div class="intro_text pd10 lh18">
       <p><img src="static/images/201612221146095183707.jpg" title="休园通知.jpg" style="width: 683px; height: 663px;"/></p>
    </div>
</div>
    <!--div class="footer">© 2015-2030 田园熊出没乐园版权所有</div!-->
       <?php echo $_smarty_tpl->getSubTemplate ("nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  
    
    <?php echo '<script'; ?>
 src="static/js/jquery-1.8.2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="static/js/swipe.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="static/js/app.js"><?php echo '</script'; ?>
>
    
</body>
</html><?php }
}
?>