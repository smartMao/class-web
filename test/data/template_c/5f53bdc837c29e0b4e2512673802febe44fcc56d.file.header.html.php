<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-01 11:24:09
         compiled from "tpl\class web\index\header.html" */ ?>
<?php /*%%SmartyHeaderCode:18326556c24b989e8f2-72795656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f53bdc837c29e0b4e2512673802febe44fcc56d' => 
    array (
      0 => 'tpl\\class web\\index\\header.html',
      1 => 1432775043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18326556c24b989e8f2-72795656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'photo' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556c24b98a65f6_19477942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c24b98a65f6_19477942')) {function content_556c24b98a65f6_19477942($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

</head>

<body>
<div class="header">
  <div class="header-frame">
  	<div class="logo"><a href="#"><img src="tpl/class web/images/header/logo.jpg" /></a></div>
      <div class="nav" >
      	<ul id="headerNav">
          	<li><a href="index.php?controller=header&method=index"  class="on">首页</a></li>
          	<li><a href="index.php?controller=frontInfo&method=articleList&page=1#">活跃文章</a></li>
          	<li><a href="index.php?controller=header&method=albumIndex">班级相册</a></li>
          	<li><a href="#" >站务留言</a></li>
          	<li><a href="http://www.gzittc.com/" target="__blank">学校主页</a></li>
          </ul>
      </div>
      <div class="login"  id="loginModel" style="display:block;">
      	<a href="javascript:showDialog();"  class="login-btn">登录</a>
          <a href="javascript:RshowDialog();" class="register-btn">注册</a>
      </div>
     
      <div class="user-username" id="userUserName" style="display:none;">
        <div class="user-photo-frame" id="userPhotoFrame">
            <a href="index.php?controller=admin&method=UserInfoList">
              <div class="user-photo"><!--用户头像--><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['photo']->value)===null||$tmp==='' ? '' : $tmp);?>
" width="48" height="48"/></div>
            </a>
        </div>
        <div class="user-options" id="userOptions" style="display:none;">
            <ul>
                <li><?php echo (($tmp = @$_smarty_tpl->tpl_vars['username']->value)===null||$tmp==='' ? '' : $tmp);?>
</li>
                <li class="text-indent-25"><i class="user-set-icon"></i>
                	<a href="index.php?controller=admin&method=UserInfoList">账号设置</a>
                </li>
                <li class="text-indent-25"><i class="user-logout-icon"></i>
                	<a href="index.php?controller=admin&method=logout" onclick="logoutBtn();">退出登录</a>
                  <!--<a href="#" onclick="logoutBtn();">退出登录</a>-->
                </li>
            </ul>
        </div>
      </div>
  </div>
</div>
</body>
</html>


<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/nav.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/common.js"><?php echo '</script'; ?>

<?php }} ?>
