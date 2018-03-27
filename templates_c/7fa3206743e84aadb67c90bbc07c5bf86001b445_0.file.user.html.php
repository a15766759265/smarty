<?php /* Smarty version 3.1.27, created on 2017-04-19 16:48:44
         compiled from "D:\phpStudy\WWW\MobiPark\templates\user.html" */ ?>
<?php
/*%%SmartyHeaderCode:2346158f7246c96e150_58462816%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fa3206743e84aadb67c90bbc07c5bf86001b445' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\user.html',
      1 => 1492412567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2346158f7246c96e150_58462816',
  'variables' => 
  array (
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f7246ca68183_00993142',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f7246ca68183_00993142')) {
function content_58f7246ca68183_00993142 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\phpStudy\\WWW\\MobiPark\\include\\smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '2346158f7246c96e150_58462816';
?>
<!DOCTYPE html>
<!-- saved from url=(0027)http://www.zjnby.com/Member -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>我的 - 农夫乐园官网</title>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <link href="./static/css/css.css" rel="stylesheet" type="text/css">
    <link href="./static/css/iconfont.css" rel="stylesheet" type="text/css">
</head>

<body class="mb80">
    <div class="user">
        <dl class="rel">
            <dt class="abs"><img src="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_img'];?>
" width="60" height="60"></dt>
            <dd>
                <strong class="n f16 db fw">手机号：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_phone'];?>
</strong>
                <span class="db f12"><em class="fw">登录时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_info']->value['user_login'],"%Y:%m:%e %H:%M:%S");?>
</em><a href="login.php?action=logout" class="ml15 f_wh">退出</a></span>
            </dd>
        </dl>
    </div>
    <div class="cate">
        <ul>
            <li class="cate_n01"><a href="http://www.zjnby.com/Member/ListOrder"><i class="iconfont"></i><strong class="n">订单管理</strong></a></li>
           
            <li class="cate_n05"><a href="http://www.zjnby.com/Member/Password"><i class="iconfont"></i><strong class="n">修改密码</strong></a></li>
        </ul>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 


</body></html><?php }
}
?>