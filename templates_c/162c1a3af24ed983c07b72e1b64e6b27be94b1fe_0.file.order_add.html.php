<?php /* Smarty version 3.1.27, created on 2017-04-19 15:44:45
         compiled from "D:\phpStudy\WWW\MobiPark\templates\admin\order_add.html" */ ?>
<?php
/*%%SmartyHeaderCode:3084258f7156d2ef225_22296744%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '162c1a3af24ed983c07b72e1b64e6b27be94b1fe' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\admin\\order_add.html',
      1 => 1492587557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3084258f7156d2ef225_22296744',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f7156d329ba8_13769754',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f7156d329ba8_13769754')) {
function content_58f7156d329ba8_13769754 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3084258f7156d2ef225_22296744';
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加订单</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">  
      <div class="form-group">
        <div class="label">
          <label>订单号：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="order_sn" data-validate="required:请输入订单号" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>产品价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="order_price" data-validate="required:请输入价格" />
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label>订单人名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="order_username" data-validate="required:请输入名称" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>订单人电话：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="order_phone" data-validate="required:请输入服务承诺" />
          <div class="tips"></div>
        </div>
      </div>
    <!--   <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" name="order_img" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div>      -->
    
     
      <div class="form-group">
        <div class="label">
          <label>下单时间：</label>
        </div>
        <div class="field"> 
          <!-- <?php echo '<script'; ?>
 src="../static/admin/js/laydate/laydate.js"><?php echo '</script'; ?>
> -->
          <input type="date" class="laydate-icon input w50" name="order_time" value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>游玩时间：</label>
        </div>
        <div class="field"> 
          <!-- <?php echo '<script'; ?>
 src="../static/admin/js/laydate/laydate.js"><?php echo '</script'; ?>
> -->
          <input type="date" class="laydate-icon input w50" name="order_date" value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
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