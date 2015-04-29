<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-29 15:49:16
         compiled from "tpl\class web\classPhoto\albumIndex2.html" */ ?>
<?php /*%%SmartyHeaderCode:171255540e119121f24-95747681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '246463620a46edf17bd9a71585c3c372e0416a9f' => 
    array (
      0 => 'tpl\\class web\\classPhoto\\albumIndex2.html',
      1 => 1430315349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171255540e119121f24-95747681',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5540e1194758f7_01122114',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5540e1194758f7_01122114')) {function content_5540e1194758f7_01122114($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link href="tpl/class web/css/photo/albumIndex.css" rel="stylesheet" type="text/css" /><!-- 相册css文件 -->
<link href="tpl/class web/css/gather.css"           rel="stylesheet" type="text/css" /><!-- 公共css文件 -->
<link href="tpl/class web/css/index/header.css"           rel="stylesheet" type="text/css" /><!-- 头部css文件 -->
<link href="tpl/class web/css/index/login.css"            rel="stylesheet" type="text/css" /><!-- 登录注册css文件 -->
<link href="tpl/class web/css/index/banner.css"           rel="stylesheet" type="text/css" /><!-- 轮播器css文件 -->
<link href="tpl/class web/css/index/footer.css"           rel="stylesheet" type="text/css" /><!-- 页脚器css文件 -->




</head>
<body>
	

	<?php echo $_smarty_tpl->getSubTemplate ('class web/index/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
           <!--  header -->
	<?php echo $_smarty_tpl->getSubTemplate ('class web/index/login.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            <!--  login -->
	<?php echo $_smarty_tpl->getSubTemplate ('class web/index/banner.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
           <!--  banner -->
	<?php echo $_smarty_tpl->getSubTemplate ('class web/classPhoto/albumContent.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<!--  photoContent -->
	<?php echo $_smarty_tpl->getSubTemplate ('class web/index/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
           <!--  footer -->




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
<?php }} ?>
