<?php /* Smarty version 3.1.27, created on 2017-04-18 18:49:53
         compiled from "D:\phpStudy\WWW\MobiPark\templates\admin\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:207758f5ef515d4d92_44105881%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d617abffc94260f4edb2b09fe64e53a8471fe3e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\admin\\login.html',
      1 => 1492498592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207758f5ef515d4d92_44105881',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f5ef517e4396_76155470',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f5ef517e4396_76155470')) {
function content_58f5ef517e4396_76155470 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '207758f5ef515d4d92_44105881';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>登录</title>  
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
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">           
            </div>         
            <form action="" method="post">
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>后台管理中心</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" name="admin_name" placeholder="登录账号" data-validate="required:请填写账号" />
                            <span class="icon icon-user margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="admin_pwd" placeholder="登录密码" data-validate="required:请填写密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input input-big" name="img_code" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
                           <img src="img_code.php" alt="" width="100" height="32" class="passcode" style="height:43px;cursor:pointer;" onclick="this.src=this.src+'?'">  
                                                   
                        </div>
                    </div>
                </div>
                <div style="padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big" value="登录"></div>
            </div>
            </form>          
        </div>
    </div>
</div>

</body>
</html><?php }
}
?>