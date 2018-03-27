<?php /* Smarty version 3.1.27, created on 2017-04-19 16:48:36
         compiled from "D:\phpStudy\WWW\MobiPark\templates\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:2944958f724646eba28_32657847%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8507dc54360705f20738457189e02d79026521df' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\login.html',
      1 => 1492412228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2944958f724646eba28_32657847',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f7246479f543_86396601',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f7246479f543_86396601')) {
function content_58f7246479f543_86396601 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2944958f724646eba28_32657847';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <title>用户登录</title>
    <link rel="stylesheet" href="static/css/css.css" />
    <link rel="stylesheet" href="static/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="/Static/DaShiLang/js/lightbox/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" href="static/css/wuxie.css" />
</head>
<body class="mb10">
    <div class="login_logo">
        <img src="./static/images/male_180.png" width="90" height="90">
    </div>
<form action="login.php" method="post" novalidate="novalidate">
   <div class="login_main pd15">
        <div class="login_tit f12 g6">手机号直接登录 <span class="field-validation-valid" data-valmsg-for="UserName" data-valmsg-replace="true"></span></div>
        <ul class="login_val mt10">
            <li class="login_phone"><input type="text" name="user_phone" id="UserName" class="txt" placeholder="请输入手机号" maxlength="11"></li>
            <li class="login_phone"><input type="password" name="user_pwd" id="Password" class="txt lt" placeholder="请输入密码" maxlength="6"><!--<input type="button" id="Button1" class="btn rt" value="获取验证码"></li>-->
        </ul>
        <div class="login_btn"><input style="margin-top:20px;" type="button" class="btn" value="登录" id="Button"></div>
    </div>
</form>    <?php echo '<script'; ?>
 src="./static/js/jquery-1.8.2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./static/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./static/js/jquery.validate.unobtrusive.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        String.prototype.IsMobile = function () {
            return /^1[3,4,5,7,8][0-9]/.test(this);
        }
        var timer;
        var secs = 60;
        function Timer() {
            secs--;
            $("#Button1").val(secs + "秒后重送");
            if (secs == 0) {
                secs = 60;
                window.clearInterval(timer);//清楚定时任务
                $("#Button1").attr("disabled", false);
                $("#Button1").val("获取验证码");
            }
        }

        $(document).ready(function () {

            $("#UserName").bind("blur", function () {
                if ($(this).val() == "") {
                    $(".login_error").html("请输入登录账号");
                } else {
                    $(".login_error").html("");
                }
            });
            $("#Password").bind("blur", function () {
                if ($(this).val() == "") {
                    $(".login_error").html("请输入密码");
                } else {
                    $(".login_error").html("");
                }
            });
            $("#Button1").bind("click", function () {
                if ($("#UserName").val() == "") {
                    alert("请输入手机号码");
                    $("#UserName").focus();
                    return false;
                }
                if (!$("#UserName").val().IsMobile()) {
                    alert("请输入正确手机号码");
                    $("#UserName").focus();
                    return false;
                }
                $("#Button1").attr("disabled", true).val("获取中...");

                $.ajax({
                    type: 'post',
                    url: 'SendMobilePassword',
                    data: 'Mobile=' + $("#UserName").val(),
                    timeout: 60000,
                    success: function (res) {
                        if (res.Success) {
                            timer = window.setInterval("Timer()", 1000);//启用定时倒计
                        } else {
                            $("#Button1").attr("disabled", false).val("获取验证码");
                        }
                        alert(res.ErrorMessages);
                    },
                    error: function () {
                        $("#Button1").attr("disabled", false).val("获取验证码");
                        alert('连接服务器错误，请稍后再试！');
                    }
                });
            });
            $("#Button").bind("click", function () {
                if ($("#UserName").val() == "") {
                    alert("请输入手机号码");
                    $("#UserName").focus();
                    return false;
                }
                if (!$("#UserName").val().IsMobile()) {
                    alert("请输入正确手机号码");
                    $("#UserName").focus();
                    return false;
                }
                $("#Button").val("登录中...").unbind("click");
                $("form").submit();
            });
        });
    <?php echo '</script'; ?>
>


</body>
</html><?php }
}
?>