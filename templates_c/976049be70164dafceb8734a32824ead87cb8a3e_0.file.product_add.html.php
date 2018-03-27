<?php /* Smarty version 3.1.27, created on 2017-04-19 15:09:40
         compiled from "D:\phpStudy\WWW\MobiPark\templates\admin\product_add.html" */ ?>
<?php
/*%%SmartyHeaderCode:409458f70d348ecd10_34405614%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '976049be70164dafceb8734a32824ead87cb8a3e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\admin\\product_add.html',
      1 => 1492585678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '409458f70d348ecd10_34405614',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f70d3494a921_18820523',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f70d3494a921_18820523')) {
function content_58f70d3494a921_18820523 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '409458f70d348ecd10_34405614';
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
    <form method="post" class="form-x" action="" enctype="multipart/form-data">  
      <div class="form-group">
        <div class="label">
          <label>产品名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="product_name" data-validate="required:请输入产品名称" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>产品价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="product_price" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label>地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="product_address" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>服务承诺：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="product_promise" data-validate="required:请输入服务承诺" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" name="product_img" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div>     
      
      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="product_desc" style=" height:90px;"></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <textarea name="product_content" class="input" style="height:450px; border:1px solid #ddd;"></textarea>
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label>发布时间：</label>
        </div>
        <div class="field"> 
          <!-- <?php echo '<script'; ?>
 src="../static/admin/js/laydate/laydate.js"><?php echo '</script'; ?>
> -->
          <input type="date" class="laydate-icon input w50" name="product_time" value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
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