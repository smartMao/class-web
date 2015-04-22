<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 16:21:09
         compiled from "tpl\backstage\photo\photo\photoUploadRes.html" */ ?>
<?php /*%%SmartyHeaderCode:122525537ae55de7985-07953348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0b0524c85971940785caa5b76759328ed0f71ab' => 
    array (
      0 => 'tpl\\backstage\\photo\\photo\\photoUploadRes.html',
      1 => 1429698864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122525537ae55de7985-07953348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'album' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5537ae55e0ac18_61918293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537ae55e0ac18_61918293')) {function content_5537ae55e0ac18_61918293($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>

	<a href="admin.php?controller=back&method=photoList&id=<?php echo $_smarty_tpl->tpl_vars['album']->value;?>
">上传完成,返回照片列表</a><br/>
</body>
</html><?php }} ?>
