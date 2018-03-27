<?php /* Smarty version 3.1.27, created on 2017-06-08 14:29:17
         compiled from "D:\phpStudy\WWW\MobiPark\templates\admin\sys_info.html" */ ?>
<?php
/*%%SmartyHeaderCode:150595938eebdbeaf40_98562054%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3151d1bc7fe4123cba2b6701ffc077a28bdb6906' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\admin\\sys_info.html',
      1 => 1496819234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150595938eebdbeaf40_98562054',
  'variables' => 
  array (
    'set_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5938eebe743b45_04403485',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5938eebe743b45_04403485')) {
function content_5938eebe743b45_04403485 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '150595938eebdbeaf40_98562054';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <link rel="stylesheet" href="../static/admin/css/pintuer.css">
    <link rel="stylesheet" href="../static/admin/css/admin.css">
    <?php echo '<script'; ?>
 src="../static/admin/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../static/admin/js/pintuer.js"><?php echo '</script'; ?>
>  
    <link rel="stylesheet" href="../static/kindeditor/themes/default/default.css" />
    <?php echo '<script'; ?>
 src="../static/kindeditor/kindeditor-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../static/kindeditor/lang/zh_CN.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      var editor;
      KindEditor.ready(function(K) {
        editor = K.create('textarea[name="site_link"]', {
          allowFileManager : true
        });
      });
      KindEditor.ready(function(K) {
        editor = K.create('textarea[name="company_desc"]', {
          allowFileManager : true
        });
      });
      <?php echo '</script'; ?>
>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
      <?php
$_from = $_smarty_tpl->tpl_vars['set_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
      <div class="form-group">
        <div class="label">
          <label><?php echo $_smarty_tpl->tpl_vars['item']->value['set_title'];?>
：</label>
        </div>
        <div class="field">
          <?php if ($_smarty_tpl->tpl_vars['item']->value['set_name'] == 'site_link' || $_smarty_tpl->tpl_vars['item']->value['set_name'] == 'company_desc') {?>
              <textarea name="<?php echo $_smarty_tpl->tpl_vars['item']->value['set_name'];?>
" id="" cols="100" rows="10" ><?php echo $_smarty_tpl->tpl_vars['item']->value['set_value'];?>
</textarea>
          <?php } else { ?>
          <input type="text" class="input" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['set_name'];?>
" value="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['set_value']);?>
" />
          <?php }?>
          <div class="tips"></div>
        </div>
      </div>
      <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>

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