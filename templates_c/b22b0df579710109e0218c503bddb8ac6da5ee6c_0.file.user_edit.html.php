<?php /* Smarty version 3.1.27, created on 2017-04-19 16:08:21
         compiled from "D:\phpStudy\WWW\MobiPark\templates\admin\user_edit.html" */ ?>
<?php
/*%%SmartyHeaderCode:106058f71af5c74bc1_73558886%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22b0df579710109e0218c503bddb8ac6da5ee6c' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\admin\\user_edit.html',
      1 => 1492589297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106058f71af5c74bc1_73558886',
  'variables' => 
  array (
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f71af5cfd766_50282821',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f71af5cfd766_50282821')) {
function content_58f71af5cfd766_50282821 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\phpStudy\\WWW\\MobiPark\\include\\smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '106058f71af5c74bc1_73558886';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="../static/admin/css/pintuer.css">
<link rel="stylesheet" href="../static/admin/css/admin.css">
<?php echo '<script'; ?>
 src="../static/admin/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../static/admin/js/pintuer.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action=""   enctype="multipart/form-data">  
      <div class="form-group">
        <div class="label">
          <label>用户电话：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_phone'];?>
" name="user_phone" data-validate="required:请输入电话号码" />
          <div class="tips"></div>
        </div>
      </div>
            <div class="form-group">
        <div class="label">
          <label>用户密码：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_pwd'];?>
" name="user_pwd" data-validate="required:请输入密码" />
          <div class="tips"></div>
        </div>
      </div>
     


      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          
          <input type="file" class="button bg-blue margin-left" id="image1" name="user_img"  value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：500*500</div>

          <?php if ($_smarty_tpl->tpl_vars['user_info']->value['user_img'] != '') {?>
              <img src="../<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_img'];?>
" style="width:100px;height:100px;" />
          <?php }?>
        </div>
      </div>     
      
    
     
      <div class="clear"></div>
    
     <div class="form-group">
        <div class="label">
          <label>注册时间：</label>
        </div>
        <div class="field"> 
         
          <input type="date" class="laydate-icon input w50" name="user_time"  value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_info']->value['user_time'],'%Y-%m-%d');?>
"  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>登录时间：</label>
        </div>
        <div class="field"> 
         
          <input type="date" class="laydate-icon input w50" name="user_login"  value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_info']->value['user_login'],'%Y-%m-%d');?>
"  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div>
     
     
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body></html><?php }
}
?>