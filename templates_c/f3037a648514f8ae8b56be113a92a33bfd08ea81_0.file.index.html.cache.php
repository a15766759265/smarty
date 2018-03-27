<?php /* Smarty version 3.1.27, created on 2017-06-12 20:46:16
         compiled from "D:\phpStudy\WWW\MobiPark\templates\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:25844593e8d18d96d24_41991318%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3037a648514f8ae8b56be113a92a33bfd08ea81' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\index.html',
      1 => 1492591694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25844593e8d18d96d24_41991318',
  'variables' => 
  array (
    'article_hot' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_593e8d18ef6676_71603596',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593e8d18ef6676_71603596')) {
function content_593e8d18ef6676_71603596 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25844593e8d18d96d24_41991318';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>首页 - 农夫乐园官网</title>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="static/css/css.css" rel="stylesheet" type="text/css" />
    <link href="static/css/iconfont.css" rel="stylesheet" type="text/css" />
    
</head>
<body class="mb90">
    
<div class="banner rel">
    <div id="banner_box" class="box_swipe">
        <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['article_hot']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                <li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['article_img'];?>
"></a></li> 
            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
        </ul>
        <div class="banner_page">
        </div>
    </div>
</div>

<div class="content pd15">
    <div class="index_nav">
                <a href="intro.php" class="db f_wh index_nav_left i_n_1">
                    <dl class="rel">
                        <dt class="abs">景点介绍<i class="iconfont db">&#xe601;</i></dt>
                        <dd><img src="static/images/201603301425054136095.jpg!430220" class="db wp100" /></dd>
                    </dl>
                </a> 
                <a href="view.php" class="db f_wh index_nav_right i_n_2">
                    <dl class="rel">
                        <dt class="abs">景区动态<i class="iconfont db">&#xe601;</i></dt>
                        <dd><img src="static/images/201603301425157171988.jpg!430220" class="db wp100" /></dd>
                    </dl>
                </a> 
                <a href="photo.php" class="db f_wh index_nav_left i_n_3">
                    <dl class="rel">
                        <dt class="abs">美图分享<i class="iconfont db">&#xe601;</i></dt>
                        <dd><img src="static/images/201607200123387406598.jpg!430220" class="db wp100" /></dd>
                    </dl>
                </a> 
                <a href="user.php" class="db f_wh index_nav_right i_n_4">
                    <dl class="rel">
                        <dt class="abs">会员中心<i class="iconfont db">&#xe601;</i></dt>
                        <dd><img src="static/images/201603301425090828194.jpg!430220" class="db wp100" /></dd>
                    </dl>
                </a> 
       
      
    </div>
</div>

    <!--div class="footer">© 2015-2030 田园熊出没乐园版权所有</div!-->
    <?php echo $_smarty_tpl->getSubTemplate ("nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
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