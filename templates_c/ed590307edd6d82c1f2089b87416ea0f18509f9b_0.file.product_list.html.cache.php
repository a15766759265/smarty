<?php /* Smarty version 3.1.27, created on 2017-04-18 19:11:00
         compiled from "D:\phpStudy\WWW\MobiPark\templates\admin\product_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:1375158f5f444536831_98531202%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed590307edd6d82c1f2089b87416ea0f18509f9b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\admin\\product_list.html',
      1 => 1492479266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1375158f5f444536831_98531202',
  'variables' => 
  array (
    'start_time' => 0,
    'end_time' => 0,
    'product_list' => 0,
    'item' => 0,
    'page_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f5f4445f2060_67935934',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f5f4445f2060_67935934')) {
function content_58f5f4445f2060_67935934 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\phpStudy\\WWW\\MobiPark\\include\\smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1375158f5f444536831_98531202';
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
<link rel="stylesheet" href="../static/css/page.css">
<?php echo '<script'; ?>
 src="../static/admin/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../static/admin/js/pintuer.js"><?php echo '</script'; ?>
>
</head>
<body>
<form method="get" name="product_form" action="product_list.php" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="product_add.php"> 添加产品</a> </li>
        <li>搜索：</li>
        <li><input class="input" type="date" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['start_time']->value,'%Y-%m-%d');?>
" name="start_time" onchange="javascript:document.product_form.submit();"></li>
        <li><input class="input" type="date" name="end_time" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['end_time']->value,'%Y-%m-%d');?>
" onchange="javascript:document.product_form.submit();"></li>
        
        <li>
          <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <button class="button border-main icon-search"  > 搜索</button></li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <th width="10%">产品名称</th>
        <th>产品价格</th>
        <th>添加时间</th>
        <th>产品地址</th>
        <th width="310">操作</th>
      </tr>
        
        <?php
$_from = $_smarty_tpl->tpl_vars['product_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        <tr>
          <td style="text-align:left; padding-left:20px;">
            <input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['product_id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['item']->value['product_id'];?>

          </td>
          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['product_name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['product_price'];?>
</td>
          <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['product_time'],"%Y %m %e %H:%M:%S");?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['product_address'];?>
</td>
          <td><div class="button-group"> <a class="button border-main" href="product_edit.php?product_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['product_id'];?>
"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(<?php echo $_smarty_tpl->tpl_vars['item']->value['product_id'];?>
)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
   		 
      <tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
          全选 </td>
        <td colspan="7" style="text-align:left;padding-left:20px;">
        <a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"> 删除</a></td>
      </tr>
      <tr>
        <td colspan="8"><div class="pagelist"> <?php echo $_smarty_tpl->tpl_vars['page_str']->value;?>
 </div></td>
      </tr>
    </table>
  </div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">

//搜索
function changesearch(){	
		
}

//单个删除
function del(product_id){
	if(confirm("您确定要删除吗?")){
		window.location.href = 'product_list.php?product_id='+product_id;
	}
}

//全选
$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

//批量删除
function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false;		
		$("#listform").submit();		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

//批量排序
function sorts(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		return false;
	}
}


//批量首页显示
function changeishome(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}

//批量推荐
function changeisvouch(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");	
		
		return false;
	}
}

//批量置顶
function changeistop(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}


//批量移动
function changecate(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		
		return false;
	}
}

//批量复制
function changecopy(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		var i = 0;
	    $("input[name='id[]']").each(function(){
	  		if (this.checked==true) {
				i++;
			}		
	    });
		if(i>1){ 
	    	alert("只能选择一条信息!");
			$(o).find("option:first").prop("selected","selected");
		}else{
		
			$("#listform").submit();		
		}	
	}
	else{
		alert("请选择要复制的内容!");
		$(o).find("option:first").prop("selected","selected");
		return false;
	}
}

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>