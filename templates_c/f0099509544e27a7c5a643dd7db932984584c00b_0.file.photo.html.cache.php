<?php /* Smarty version 3.1.27, created on 2017-06-12 20:46:39
         compiled from "D:\phpStudy\WWW\MobiPark\templates\photo.html" */ ?>
<?php
/*%%SmartyHeaderCode:11476593e8d2fc05af3_72122807%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0099509544e27a7c5a643dd7db932984584c00b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\photo.html',
      1 => 1492397416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11476593e8d2fc05af3_72122807',
  'variables' => 
  array (
    'article_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_593e8d2fcc51a5_97511938',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593e8d2fcc51a5_97511938')) {
function content_593e8d2fcc51a5_97511938 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11476593e8d2fc05af3_72122807';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>美图分享 - 农夫乐园官网</title>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="static/css/css.css" rel="stylesheet" type="text/css" />
    <link href="static/css/iconfont.css" rel="stylesheet" type="text/css" />
    
</head>
<body class="mb90">
    
<div class="logo"><a href="/Mobile"><img src="static/images/201604062008554821632.png" width="150" height="39" /></a></div>
<div class="photo">
    <ul class="flx">
        
        <?php
$_from = $_smarty_tpl->tpl_vars['article_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        <li><a href="photo_detail.php?article_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
" class="db f_wh"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['article_img'];?>
" class="wp100 db" /><span>梦幻灯光展</span></a></li>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>


    </ul>
</div>

    <!--div class="footer">© 2015-2030 田园熊出没乐园版权所有</div!-->
    <?php echo $_smarty_tpl->getSubTemplate ("nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    
    <?php echo '<script'; ?>
 src="static/js/jquery-1.8.2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="static/js/swipe.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="static/js/app.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
        var number = 2;
        $(document).ready(function () {
            var noMore = false;
            var range = 0;             //距下边界长度/单位px
            var totalheight = 0;

            $(window).scroll(function () {
                var srollPos = $(window).scrollTop();    //滚动条距顶部距离(页面超出窗口的高度)
                totalheight = parseFloat($(window).height()) + parseFloat(srollPos);
                if (($(document).height() - range) <= totalheight) {
                    GetData();
                }
            });
        });

        function GetData() {
            $.ajax({
                type: 'get',
                url: 'photo.php',
                data: 'pageindex=' + number,
                dataType:'json',
                timeout: 60000,
                success: function (res) {
                    var html = '';
                    if (res != "") {
                        
                        for(var i=0;i<res.length;i++){
                            html += '<li><a href="photo_detail.php?article_id='+res[i]['article_id']+'" class="db f_wh"><img src="'+res[i]['article_img']+'" class="wp100 db" /><span>'+res[i]['article_title']+'</span></a></li>'+"\r\n";
                        }
                        $(".flx").append(html);
                        number++;
                    }
                },
                error: function () {
                    alert('连接服务器错误，请稍后再试！');
                }
            });
        }
    <?php echo '</script'; ?>
>

</body>
</html><?php }
}
?>