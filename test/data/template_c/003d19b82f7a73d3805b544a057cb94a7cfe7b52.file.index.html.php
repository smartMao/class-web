<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-30 04:43:09
         compiled from "tpl\class web\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2465554196bd7fba08-96374364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '003d19b82f7a73d3805b544a057cb94a7cfe7b52' => 
    array (
      0 => 'tpl\\class web\\index.html',
      1 => 1430098828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2465554196bd7fba08-96374364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554196bd859618_57783708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554196bd859618_57783708')) {function content_554196bd859618_57783708($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

<link href="tpl/class web/css/gather.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/header.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/login.css"  rel="stylesheet" type="text/css" /> 
<link href="tpl/class web/css/index/banner.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/info.css"   rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/footer.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/study.css"  rel="stylesheet" type="text/css" />



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
<?php }} ?>
