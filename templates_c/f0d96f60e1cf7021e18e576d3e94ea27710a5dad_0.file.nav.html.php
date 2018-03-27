<?php /* Smarty version 3.1.27, created on 2017-04-18 16:59:46
         compiled from "D:\phpStudy\WWW\MobiPark\templates\nav.html" */ ?>
<?php
/*%%SmartyHeaderCode:256858f5d582d42651_37110178%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d96f60e1cf7021e18e576d3e94ea27710a5dad' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\nav.html',
      1 => 1492411715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256858f5d582d42651_37110178',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f5d582d4a355_04711935',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f5d582d4a355_04711935')) {
function content_58f5d582d4a355_04711935 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '256858f5d582d42651_37110178';
?>
<div class="nav">
    <ul class="fa_wh fix">
        <li class="nav_clo">
            <a href="/Mobile/Mall" class="db tc">
                <i class="iconfont">&#xe606;</i>
                <strong class="db n">在线预订</strong>
            </a>
        </li>
        <li>
            <a href="user.php" class="db tc">
                <i class="iconfont">&#xe600;</i>
                <strong class="db n">会员中心</strong>
            </a>
        </li>
        <li>
            <a href="index.php" class="db tc">
                <span class="nav_home"><i class="iconfont">&#xe604;</i></span>
            </a>
        </li>
        <li>
            <a href="/Mobile/Map" class="db tc">
                <i class="iconfont">&#xe607;</i>
                <strong class="db n">一键导航</strong>
            </a>
        </li>
        <li>
            <a href="tel:0571-88760888" class="db tc">
                <i class="iconfont">&#xe603;</i>
                <strong class="db n">拨号</strong>
            </a>
        </li>
    </ul>
</div>  <?php }
}
?>