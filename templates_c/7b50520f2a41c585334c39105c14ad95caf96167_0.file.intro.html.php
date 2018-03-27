<?php /* Smarty version 3.1.27, created on 2017-05-18 11:28:59
         compiled from "D:\phpStudy\WWW\MobiPark\templates\intro.html" */ ?>
<?php
/*%%SmartyHeaderCode:13029591d14fb45b616_05637257%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b50520f2a41c585334c39105c14ad95caf96167' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\intro.html',
      1 => 1492394219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13029591d14fb45b616_05637257',
  'variables' => 
  array (
    'set_info' => 0,
    'article_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591d14fb731fb7_13845212',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591d14fb731fb7_13845212')) {
function content_591d14fb731fb7_13845212 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\phpStudy\\WWW\\MobiPark\\include\\smarty\\plugins\\modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '13029591d14fb45b616_05637257';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>景点介绍 - 农夫乐园官网</title>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="static/css/css.css" rel="stylesheet" type="text/css" />
    <link href="static/css/iconfont.css" rel="stylesheet" type="text/css" />
    
</head>
<body class="mb90">
    

<div class="banner rel">
    <img src="static/images/201611011337543460226.jpg!640320" class="db wp100">
</div>
<div class="intro bgwh">
    <h2 class="n f16 intro_tit">农夫乐园官网</h2>
    
        <dl class="rel">
            <dt class="abs"><i class="iconfont f16 g9">&#xe60d;</i></dt>
            <dd><?php echo $_smarty_tpl->tpl_vars['set_info']->value[1]['set_value'];?>
</dd>
            <dd class="abs"><i class="iconfont g9">&#xe605;</i></dd>
        </dl>
     <a href="tel:<?php echo $_smarty_tpl->tpl_vars['set_info']->value[0]['set_value'];?>
" class="db">
        <dl class="rel">
            <dt class="abs"><i class="iconfont g9">&#xe60c;</i></dt>
            <dd><?php echo $_smarty_tpl->tpl_vars['set_info']->value[0]['set_value'];?>
</dd>
            <dd class="abs"><i class="iconfont g9">&#xe605;</i></dd>
        </dl>
    </a>
    <dl class="rel">
        <dt class="abs"><i class="iconfont g9">&#xe60b;</i></dt>
        <dd>营业时间：<?php echo $_smarty_tpl->tpl_vars['set_info']->value[2]['set_value'];?>
</dd>
    </dl>
</div>
<div class="intro_about bgwh mt15">
    <h3 class="n f14 intro_about_tit"><i class="iconfont">&#xe60f;</i>景区概述</h3>
    <div class="intro_text f12 pd15 lh18">
              <?php echo $_smarty_tpl->tpl_vars['set_info']->value[3]['set_value'];?>

  
        
    </div>
</div>
<div class="intro_about bgwh mt15">
    <h3 class="n f14 intro_about_tit"><i class="iconfont">&#xe60e;</i>景点介绍</h3>
        <?php
$_from = $_smarty_tpl->tpl_vars['article_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        <a href="article_detail.php?article_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
" class="db">
            <dl class="rel">
                <dt class="abs"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['article_img'];?>
" class="db" width="110" height="66" /></dt>
                <dd>
                    <strong class="n g0"><?php echo $_smarty_tpl->tpl_vars['item']->value['article_title'];?>
</strong>
                    <p class="f12 g9"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['article_desc'],100,"...");?>
</p>
                </dd>
            </dl>
        </a>  
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>

    
   
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