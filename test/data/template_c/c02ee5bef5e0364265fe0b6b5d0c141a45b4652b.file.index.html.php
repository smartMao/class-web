<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-31 16:08:55
         compiled from "tpl\class web\index.html" */ ?>
<?php /*%%SmartyHeaderCode:16099556b15f7804432-27070897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c02ee5bef5e0364265fe0b6b5d0c141a45b4652b' => 
    array (
      0 => 'tpl\\class web\\index.html',
      1 => 1432724666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16099556b15f7804432-27070897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556b15f78370b0_17948498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556b15f78370b0_17948498')) {function content_556b15f78370b0_17948498($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广州工贸学院,12网站开发班</title>

<link href="tpl/class web/css/gather.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/header.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/login.css"  rel="stylesheet" type="text/css" /> 
<link href="tpl/class web/css/index/banner.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/info.css"   rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/footer.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/study.css"  rel="stylesheet" type="text/css" />

<?php echo '<script'; ?>
 src="tpl/class web/js/jquery-1.8.2-min.js"><?php echo '</script'; ?>
><!-- 用于 header 的点击后标记 -->

</head>

<body onselectstart="return false;">


<?php echo $_smarty_tpl->getSubTemplate ("class web/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/study.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!--
	include('header.html'); 
	include('login.html');  
	include('banner.html'); 
	include('study.html');  
	include('info.html');  
	include('footer.html');
-->



<?php if ($_smarty_tpl->tpl_vars['username']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var loginModel    = document.getElementById('loginModel');
		var userUserName  = document.getElementById('userUserName');

		loginModel.style.display = "none";
		userUserName.style.display = "block";
	<?php echo '</script'; ?>
>
<?php } else { ?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var loginModel    = document.getElementById('loginModel');
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
 type="text/javascript" src="tpl/class web/js/userPhoto.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/infoTabSwitch.js"><?php echo '</script'; ?>
>
<?php }} ?>
