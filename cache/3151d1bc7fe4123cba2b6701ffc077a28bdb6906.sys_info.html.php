<?php
/*%%SmartyHeaderCode:3245358f5f4417f5029_14147394%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3151d1bc7fe4123cba2b6701ffc077a28bdb6906' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\MobiPark\\templates\\admin\\sys_info.html',
      1 => 1492495526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3245358f5f4417f5029_14147394',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'set_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f5f4418c40d0_79527127',
  'cache_lifetime' => 86400,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f5f4418c40d0_79527127')) {
function content_58f5f4418c40d0_79527127 ($_smarty_tpl) {
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
    <script src="../static/admin/js/jquery.js"></script>
    <script src="../static/admin/js/pintuer.js"></script>  
    <link rel="stylesheet" href="../static/kindeditor/themes/default/default.css" />
    <script src="../static/kindeditor/kindeditor-min.js"></script>
    <script src="../static/kindeditor/lang/zh_CN.js"></script>
    <script>
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
      </script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
            <div class="form-group">
        <div class="label">
          <label>公司版权：</label>
        </div>
        <div class="field">
                    <input type="text" class="input" name="copyright" value="© 2017 杭州三祺酒店管理有限公司ssa" />
                    <div class="tips"></div>
        </div>
      </div>
            <div class="form-group">
        <div class="label">
          <label>技术支持：</label>
        </div>
        <div class="field">
                        <textarea name="site_link" id="" cols="100" rows="10" > 聚赢智业 aaaa</textarea>
                    <div class="tips"></div>
        </div>
      </div>
            <div class="form-group">
        <div class="label">
          <label>座机：</label>
        </div>
        <div class="field">
                    <input type="text" class="input" name="phone" value="0571-88760888a" />
                    <div class="tips"></div>
        </div>
      </div>
            <div class="form-group">
        <div class="label">
          <label>传真：</label>
        </div>
        <div class="field">
                    <input type="text" class="input" name="phone2" value="0571-88781275" />
                    <div class="tips"></div>
        </div>
      </div>
            <div class="form-group">
        <div class="label">
          <label>邮箱：</label>
        </div>
        <div class="field">
                    <input type="text" class="input" name="email" value="hznfly@163.com" />
                    <div class="tips"></div>
        </div>
      </div>
            <div class="form-group">
        <div class="label">
          <label>qq：</label>
        </div>
        <div class="field">
                    <input type="text" class="input" name="qq" value="2873374847" />
                    <div class="tips"></div>
        </div>
      </div>
            <div class="form-group">
        <div class="label">
          <label>微信：</label>
        </div>
        <div class="field">
                    <input type="text" class="input" name="wechat" value="lz-nfly" />
                    <div class="tips"></div>
        </div>
      </div>
            <div class="form-group">
        <div class="label">
          <label>地址：</label>
        </div>
        <div class="field">
                    <input type="text" class="input" name="address" value="杭州余杭区良渚街道东西大道旁" />
                    <div class="tips"></div>
        </div>
      </div>
            <div class="form-group">
        <div class="label">
          <label>微信二维码：</label>
        </div>
        <div class="field">
                    <input type="text" class="input" name="wechat_code" value="static/images/201603291531255264616.jpg" />
                    <div class="tips"></div>
        </div>
      </div>
            <div class="form-group">
        <div class="label">
          <label>营业时间：</label>
        </div>
        <div class="field">
                    <input type="text" class="input" name="company_time" value="9:00 - 16:00" />
                    <div class="tips"></div>
        </div>
      </div>
            <div class="form-group">
        <div class="label">
          <label>公司描述：</label>
        </div>
        <div class="field">
                        <textarea name="company_desc" id="" cols="100" rows="10" > “农夫乐园是一个以文化创意为魂，以绿色环保、亲子动漫为主题，颠覆传统农业旅游形态的国家AAA级生态亲子主题旅游景区。2010年至2013年连续四届杭州西博会项目之一；2011年-2015年连续5届国际动漫节分会场，被评为中国国际动漫节最佳分会场；连续举办两届“冰雕节”；2011年开始至2015年秋季每年举办“乡村狂欢节”。 2016年农夫乐园举办杭州首届国际梦幻灯光节！        2016年10月份秋季农夫乐园将推出第五届乡村“萌宠总动员”，有可爱的萌宠互动，有教育意义的蝴蝶科普，有欢乐的家庭亲子表演互动活动（抗日向英雄、沙滩寻宝、水枪大战、撕名牌、小香猪赛跑、农夫运动会等活动），更有数不尽的游乐设施骑马、卡丁车、划船等乐不胜收。</textarea>
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