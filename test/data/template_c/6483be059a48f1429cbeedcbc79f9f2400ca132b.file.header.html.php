<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-30 04:40:38
         compiled from "tpl\class web\index\header.html" */ ?>
<?php /*%%SmartyHeaderCode:2251955419626e3f571-66611120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6483be059a48f1429cbeedcbc79f9f2400ca132b' => 
    array (
      0 => 'tpl\\class web\\index\\header.html',
      1 => 1430292998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2251955419626e3f571-66611120',
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
  'unifunc' => 'content_55419626e76086_17790060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55419626e76086_17790060')) {function content_55419626e76086_17790060($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
          	<li><a href="admin.php?controller=index&method=index"  class="on">首页</a></li>
          	<li><a href="#">班级社区</a></li>
          	<li><a href="admin.php?controller=header&method=albumIndex">班级相册</a></li>
          	<li><a href="#" >站务留言</a></li>
          	<li><a href="http://www.gzittc.com/">学校主页</a></li>
          </ul>
      </div>
      <div class="login"  id="loginModel" style="display:block;">
      	<a href="javascript:showDialog();"  class="login-btn">登录</a>
          <a href="javascript:RshowDialog();" class="register-btn">注册</a>
      </div>
     
      <div class="user-username" id="userUserName" style="display:none;">
        <div class="user-photo-frame" id="userPhotoFrame">
            <a href="admin.php?controller=admin&method=UserInfoList">
              <div class="user-photo"><!--用户头像--><img src="./<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" width="48" height="48"/></div>
            </a>
        </div>
        <div class="user-options" id="userOptions" style="display:none;">
            <ul>
                <li><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</li>
                <li class="text-indent-25"><i class="user-set-icon"></i>
                	<a href="admin.php?controller=admin&method=UserInfoList">账号设置</a>
                </li>
                <li class="text-indent-25"><i class="user-logout-icon"></i>
                	<a href="index.php?controller=admin&method=logout">退出登录</a>
                </li>
            </ul>
        </div>
      </div>
  </div>
</div>
</body>
</html>


<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/jquery-2.1.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/nav.js"><?php echo '</script'; ?>
><?php }} ?>
