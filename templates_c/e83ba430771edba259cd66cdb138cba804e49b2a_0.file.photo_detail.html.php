<?php /* Smarty version 3.1.27, created on 2017-08-19 23:54:55
         compiled from "D:\phpStudy\WWW\MobiPark\templates\photo_detail.html" */ ?>
<?php
/*%%SmartyHeaderCode:3026459985f4fe9cda0_99899082%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e83ba430771edba259cd66cdb138cba804e49b2a' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\photo_detail.html',
      1 => 1492393872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3026459985f4fe9cda0_99899082',
  'variables' => 
  array (
    'article_detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59985f50b22666_50153119',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59985f50b22666_50153119')) {
function content_59985f50b22666_50153119 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3026459985f4fe9cda0_99899082';
?>
<!DOCTYPE html>
<html class="photo_bg">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['article_detail']->value['article_title'];?>
- 农夫乐园官网</title>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="static/css/css.css" rel="stylesheet" type="text/css" />
    <link href="static/css/iconfont.css" rel="stylesheet" type="text/css" />
</head>

<body class="mb10 photo_bg">
    <div class="photo_view">
        <img src="<?php echo $_smarty_tpl->tpl_vars['article_detail']->value['article_img'];?>
" class="db" />
    </div>
    <div class="back_btn fa_wh"><a href="photo.php"><i class="iconfont">&#xe610;</i></a></div>
   
</body>
</html>
<?php }
}
?>