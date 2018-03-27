<?php /* Smarty version 3.1.27, created on 2017-04-18 17:05:54
         compiled from "D:\phpStudy\WWW\MobiPark\templates\admin\info.html" */ ?>
<?php
/*%%SmartyHeaderCode:2691158f5d6f216b293_73989838%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9f4731cd788d15d054e7ed330ee4596dc21a798' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\admin\\info.html',
      1 => 1492496430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2691158f5d6f216b293_73989838',
  'variables' => 
  array (
    'set_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f5d6f2203835_62952176',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f5d6f2203835_62952176')) {
function content_58f5d6f2203835_62952176 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2691158f5d6f216b293_73989838';
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
</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['set_name'];?>
" value="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['set_value']);?>
" />
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