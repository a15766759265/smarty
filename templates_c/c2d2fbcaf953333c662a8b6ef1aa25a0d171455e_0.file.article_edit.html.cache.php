<?php /* Smarty version 3.1.27, created on 2017-04-18 19:58:42
         compiled from "D:\phpStudy\WWW\MobiPark\templates\admin\article_edit.html" */ ?>
<?php
/*%%SmartyHeaderCode:1304158f5ff722d7d48_97157410%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2d2fbcaf953333c662a8b6ef1aa25a0d171455e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\admin\\article_edit.html',
      1 => 1492516716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1304158f5ff722d7d48_97157410',
  'variables' => 
  array (
    'article_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f5ff72350ed0_26953675',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f5ff72350ed0_26953675')) {
function content_58f5ff72350ed0_26953675 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\phpStudy\\WWW\\MobiPark\\include\\smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1304158f5ff722d7d48_97157410';
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
          <label>文章名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['article_info']->value['article_title'];?>
" name="article_title" data-validate="required:请输入文章" />
          <div class="tips"></div>
        </div>
      </div>
       <div class="form-group">
        <div class="label">
          <label>文章描述：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['article_info']->value['article_desc'];?>
" name="article_desc" data-validate="required:请输入文章" />
          <div class="tips"></div>
        </div>
      </div>
 <div class="form-group">
        <div class="label">
          <label>文章作者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['article_info']->value['article_author'];?>
" name="article_author" data-validate="required:请输入文章" />
          <div class="tips"></div>
        </div>
      </div>


      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          
          <input type="file" class="button bg-blue margin-left" id="image1" name="article_img"  value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div>     
      
    
      <div class="form-group">
        <div class="label">
          <label>文章内容：</label>
        </div>
        <div class="field">
          <textarea name="article_content" class="input" style="height:450px; border:1px solid #ddd;">
          <?php echo $_smarty_tpl->tpl_vars['article_info']->value['article_desc'];?>
</textarea>
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="clear"></div>
    
     
      <div class="form-group">
        <div class="label">
          <label>文章时间：</label>
        </div>
        <div class="field"> 
         
          <input type="date" class="laydate-icon input w50" name="article_time"  value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article_info']->value['article_time'],'%Y-%m-%d');?>
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