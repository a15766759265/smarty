<?php /* Smarty version 3.1.27, created on 2017-06-10 00:09:56
         compiled from "D:\phpStudy\WWW\MobiPark\templates\article_detail.html" */ ?>
<?php
/*%%SmartyHeaderCode:31322593ac85402eb46_33220033%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '434d94b3cc199460409fe88afb58b512df933bba' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\article_detail.html',
      1 => 1492330031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31322593ac85402eb46_33220033',
  'variables' => 
  array (
    'article_detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_593ac85419dea1_05625015',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593ac85419dea1_05625015')) {
function content_593ac85419dea1_05625015 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\phpStudy\\WWW\\MobiPark\\include\\smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '31322593ac85402eb46_33220033';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>关于农夫乐园夏季灯光节期间时间调整及年卡用户特别通知 - 农夫乐园官网</title>
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
        <h1 class="f16 n"><?php echo $_smarty_tpl->tpl_vars['article_detail']->value['article_title'];?>
</h1>
        <p class="g9 tc"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article_detail']->value['article_time'],"%Y:%e:%B %H:%M:%S");?>
</p>
    </div>
    <div class="intro_text pd10 lh18">
       <?php echo $_smarty_tpl->tpl_vars['article_detail']->value['article_content'];?>

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