<?php /* Smarty version 3.1.27, created on 2017-10-06 11:08:36
         compiled from "D:\phpStudy\WWW\MobiPark\templates\admin\user_add.html" */ ?>
<?php
/*%%SmartyHeaderCode:1015459d6f3b47031b7_00796113%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a525c5cef2c7744dc8c14f1ad7fc252bace040ac' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\admin\\user_add.html',
      1 => 1492568809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1015459d6f3b47031b7_00796113',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59d6f3b4baf426_29975184',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59d6f3b4baf426_29975184')) {
function content_59d6f3b4baf426_29975184 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1015459d6f3b47031b7_00796113';
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
          <input type="text" class="input w50" value="" name="user_phone" data-validate="required:请输入文章" />
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
        </div>
      </div>     
      
    
     
      <div class="clear"></div>
    
     <div class="form-group">
        <div class="label">
          <label>注册时间：</label>
        </div>
        <div class="field"> 
         
          <input type="date" class="laydate-icon input w50" name="user_time"  value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>登录时间：</label>
        </div>
        <div class="field"> 
         
          <input type="date" class="laydate-icon input w50" name="user_login"  value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
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