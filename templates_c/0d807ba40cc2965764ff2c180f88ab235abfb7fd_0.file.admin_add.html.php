<?php /* Smarty version 3.1.27, created on 2017-04-19 10:30:37
         compiled from "D:\phpStudy\WWW\MobiPark\templates\admin\admin_add.html" */ ?>
<?php
/*%%SmartyHeaderCode:1455858f6cbcd4083a0_44152054%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d807ba40cc2965764ff2c180f88ab235abfb7fd' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\admin\\admin_add.html',
      1 => 1492569031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1455858f6cbcd4083a0_44152054',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f6cbcd442d36_16705669',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f6cbcd442d36_16705669')) {
function content_58f6cbcd442d36_16705669 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1455858f6cbcd4083a0_44152054';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, admin-scalable=no" />
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
          <label>用户名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="admin_name" data-validate="required:请输入名称" />
          <div class="tips"></div>
        </div>
      </div>
           <div class="form-group">
        <div class="label">
          <label>用户密码：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="admin_pwd" data-validate="required:请输入密码" />
          <div class="tips"></div>
        </div>
      </div>


      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          
          <input type="file" class="button bg-blue margin-left" id="image1" name="admin_img"  value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div>     
      
    
     
      <div class="clear"></div>

   <!--  
     <div class="form-group">
        <div class="label">
          <label>注册时间：</label>
        </div>
        <div class="field"> 
         
          <input type="date" class="laydate-icon input w50" name="admin_time"  value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>登录时间：</label>
        </div>
        <div class="field"> 
         
          <input type="date" class="laydate-icon input w50" name="admin_login"  value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div> -->
     
     
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