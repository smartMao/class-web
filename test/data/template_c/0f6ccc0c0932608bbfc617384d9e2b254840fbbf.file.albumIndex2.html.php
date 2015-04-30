<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-30 04:43:02
         compiled from "tpl\class web\classPhoto\albumIndex2.html" */ ?>
<?php /*%%SmartyHeaderCode:23656554196b6303f41-36125037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f6ccc0c0932608bbfc617384d9e2b254840fbbf' => 
    array (
      0 => 'tpl\\class web\\classPhoto\\albumIndex2.html',
      1 => 1430360819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23656554196b6303f41-36125037',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554196b633e8d4_12556396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554196b633e8d4_12556396')) {function content_554196b633e8d4_12556396($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<link href="tpl/class web/css/photo/pager.css" rel="stylesheet" type="text/css" >




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
