<?php /* Smarty version 3.1.27, created on 2017-06-12 20:46:31
         compiled from "D:\phpStudy\WWW\MobiPark\templates\view.html" */ ?>
<?php
/*%%SmartyHeaderCode:7317593e8d27881696_98963191%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72ea5227e882237829e3e585ff7bc40a2828f65b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\view.html',
      1 => 1492390759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7317593e8d27881696_98963191',
  'variables' => 
  array (
    'view_info' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_593e8d2793ceb0_72165052',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593e8d2793ceb0_72165052')) {
function content_593e8d2793ceb0_72165052 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7317593e8d27881696_98963191';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>景区动态 - 农夫乐园官网</title>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="static/css/css.css" rel="stylesheet" type="text/css" />
    <link href="static/css/iconfont.css" rel="stylesheet" type="text/css" />
    
</head>
<body class="mb90">
    
<div class="banner rel">
    <div id="banner_box" class="box_swipe">
        <ul>
                    <li><a href="http://www.zjnby.com/Home/View?ID=277"><img src="static/images/201612221152057407454.jpg!640320"></a></li>
                    <li><a href="http://www.zjnby.com/Mobile/Mall"><img src="static/images/201610281114470512541.jpg!640320"></a></li>
                    <li><a href="/mobile"><img src="static/images/201609251534303848285.jpg!640320"></a></li>
                    <li><a href="1"><img src="static/images/201604071522086287848.jpg!640320"></a></li>
                    <li><a href="/mobile"><img src="static/images/201604070942172924671.jpg!640320"></a></li>
                    <li><a href="/mobile"><img src="static/images/201603301424399421526.jpg!640320"></a></li>
    
        </ul>
        <div class="banner_page">
        </div>
    </div>
</div>
<div class="content pd15">
    <div class="news">

                     <?php
$_from = $_smarty_tpl->tpl_vars['view_info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>

                 <a href="view_detail.php?article_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
" class="db">
                    <dl class="rel">
                        <dt><?php echo $_smarty_tpl->tpl_vars['item']->value['article_desc'];?>
</dt>
                        <dd class="abs"><i class="iconfont g9">&#xe605;</i></dd>
                    </dl>
                </a>   
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
    

    </div>
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
        var range = 50;             //距下边界长度/单位px
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
            url: 'ListNewsByAjax',
            data: 'pageindex=' + number,
            timeout: 60000,
            success: function (res) {
                var html = '';
                if (res != "") {
                    $(".news").append(res);
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