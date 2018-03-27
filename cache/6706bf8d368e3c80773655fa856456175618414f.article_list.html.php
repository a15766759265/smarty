<?php
/*%%SmartyHeaderCode:1199858f5fda861b0c0_10517252%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6706bf8d368e3c80773655fa856456175618414f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\admin\\article_list.html',
      1 => 1492516234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1199858f5fda861b0c0_10517252',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'start_time' => 0,
    'end_time' => 0,
    'article_list' => 0,
    'item' => 0,
    'page_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f5fda86f5cf6_54014896',
  'cache_lifetime' => 86400,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f5fda86f5cf6_54014896')) {
function content_58f5fda86f5cf6_54014896 ($_smarty_tpl) {
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
<script src="../static/admin/js/jquery.js"></script>
<script src="../static/admin/js/pintuer.js"></script>
</head>
<body>
<form method="get" name="article_form" action="article_list.php" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="article_add.php"> 添加内容</a> </li>
        <li>搜索：</li>
        <li><input class="input" type="date" value="" name="start_time" onchange="javascript:document.article_form.submit();"></li>
        <li><input class="input" type="date" name="end_time" value="" onchange="javascript:document.article_form.submit();"></li>
        
        <li>
          <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <button class="button border-main icon-search"  > 搜索</button></li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <th width="10%">文章名称</th>
        <th>文章描述</th>
        <th>添加时间</th>
        <th>文章作者</th>
        <th width="310">操作</th>
      </tr>
        
                <tr>
          <td style="text-align:left; padding-left:20px;">
            <input type="checkbox" name="id[]" value="52" />52
          </td>
          <td>qqqaa</td>
          <td>asaa</td>
          <td>2017 04 14 00:00:00</td>
          <td>as</td>
          <td><div class="button-group"> <a class="button border-main" href="article_edit.php?article_id=52"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(52)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
                <tr>
          <td style="text-align:left; padding-left:20px;">
            <input type="checkbox" name="id[]" value="50" />50
          </td>
          <td>碰碰车</td>
          <td></td>
          <td></td>
          <td></td>
          <td><div class="button-group"> <a class="button border-main" href="article_edit.php?article_id=50"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(50)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
                <tr>
          <td style="text-align:left; padding-left:20px;">
            <input type="checkbox" name="id[]" value="49" />49
          </td>
          <td>摇头飞椅</td>
          <td></td>
          <td></td>
          <td></td>
          <td><div class="button-group"> <a class="button border-main" href="article_edit.php?article_id=49"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(49)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
                <tr>
          <td style="text-align:left; padding-left:20px;">
            <input type="checkbox" name="id[]" value="48" />48
          </td>
          <td>休园通知</td>
          <td></td>
          <td></td>
          <td></td>
          <td><div class="button-group"> <a class="button border-main" href="article_edit.php?article_id=48"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(48)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
                <tr>
          <td style="text-align:left; padding-left:20px;">
            <input type="checkbox" name="id[]" value="47" />47
          </td>
          <td>交通线路</td>
          <td>交通线路</td>
          <td>2017 01 23 00:00:00</td>
          <td>交通线路</td>
          <td><div class="button-group"> <a class="button border-main" href="article_edit.php?article_id=47"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(47)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
                <tr>
          <td style="text-align:left; padding-left:20px;">
            <input type="checkbox" name="id[]" value="46" />46
          </td>
          <td>关于我们</td>
          <td>关于我们</td>
          <td>2017 01 12 00:00:00</td>
          <td>关于我们</td>
          <td><div class="button-group"> <a class="button border-main" href="article_edit.php?article_id=46"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(46)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
               
      <tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
          全选 </td>
        <td colspan="7" style="text-align:left;padding-left:20px;">
        <a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"> 删除</a></td>
      </tr>
      <tr>
        <td colspan="8"><div class="pagelist"> <div class="sabrosus"><span class="disabled">首&nbsp;&nbsp;页</span><span class="disabled">  &lt;上一页 </span><span class="current">1</span><a href="/MobiPark/admin/article_list.php?page=2">2</a><a href="/MobiPark/admin/article_list.php?page=3">3</a><a href="/MobiPark/admin/article_list.php?page=4">4</a><a href="/MobiPark/admin/article_list.php?page=5">5</a><a href="/MobiPark/admin/article_list.php?page=2">下一页&gt; </a><a href="/MobiPark/admin/article_list.php?page=9">尾&nbsp;&nbsp;页 </a></div> </div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

//搜索
function changesearch(){  
    
}

//单个删除
function del(article_id){
  if(confirm("您确定要删除吗?")){
    window.location.href = 'article_list.php?article_id='+article_id;
  
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

</script>
</body>
</html><?php }
}
?>