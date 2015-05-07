<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-07 10:13:42
         compiled from "tpl\class web\classPhoto\albumIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:160825549a6bc418ef5-72038986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68bf505ac8226d37bf59e4e9a9c74b596b537142' => 
    array (
      0 => 'tpl\\class web\\classPhoto\\albumIndex.html',
      1 => 1430893798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160825549a6bc418ef5-72038986',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5549a6bc447d09_72122590',
  'variables' => 
  array (
    'albumState' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5549a6bc447d09_72122590')) {function content_5549a6bc447d09_72122590($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link href="tpl/class web/css/photo/albumIndex.css" rel="stylesheet" type="text/css" /><!-- 相册css文件 -->
<link href="tpl/class web/css/gather.css"           rel="stylesheet" type="text/css" /><!-- 公共css文件 -->
<link href="tpl/class web/css/index/header.css"     rel="stylesheet" type="text/css" /><!-- 头部css文件 -->
<link href="tpl/class web/css/index/login.css"      rel="stylesheet" type="text/css" /><!-- 登录注册css文件 -->
<link href="tpl/class web/css/index/banner.css"     rel="stylesheet" type="text/css" /><!-- 轮播器css文件 -->
<link href="tpl/class web/css/index/footer.css"     rel="stylesheet" type="text/css" /><!-- 页脚器css文件 -->
<link href="tpl/class web/css/photo/pager.css"      rel="stylesheet" type="text/css" /><!-- 相册页面页码css文件 -->




</head>
<body>
	
	

	<?php echo $_smarty_tpl->getSubTemplate ('class web/index/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
           <!--  header -->
	<?php echo $_smarty_tpl->getSubTemplate ('class web/index/login.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            <!--  login -->
	<?php echo $_smarty_tpl->getSubTemplate ('class web/index/banner.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	           <!--  banner -->
	<?php if ($_smarty_tpl->tpl_vars['albumState']->value=='normal') {?>
		<?php echo $_smarty_tpl->getSubTemplate ('class web/classPhoto/albumContent.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<!--  photoContent -->
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['albumState']->value=='search') {?>
		<?php echo $_smarty_tpl->getSubTemplate ('class web/classPhoto/albumSearch.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<!--  photoSearch -->
	<?php }?>

	<?php echo $_smarty_tpl->getSubTemplate ('class web/index/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
           <!--  footer -->
	


<?php if ($_smarty_tpl->tpl_vars['username']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var loginModel  = document.getElementById('loginModel');
		var userUserName  = document.getElementById('userUserName');

		loginModel.style.display = "none";
		userUserName.style.display = "block";
	<?php echo '</script'; ?>
>
<?php } else { ?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var loginModel  = document.getElementById('loginModel');
		var userUserName  = document.getElementById('userUserName');

		loginModel.style.display = "block";
		userUserName.style.display = "none";
	<?php echo '</script'; ?>
>
<?php }?>


</body>
</html>


<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/banner.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/js.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/registerCheck.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/nav.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/userPhoto.js"><?php echo '</script'; ?>
>
 <?php }} ?>
