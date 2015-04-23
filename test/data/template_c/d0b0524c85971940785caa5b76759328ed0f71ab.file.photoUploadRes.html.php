<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-23 15:42:33
         compiled from "tpl\backstage\photo\photo\photoUploadRes.html" */ ?>
<?php /*%%SmartyHeaderCode:174015538f6c95b4615-10099030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0b0524c85971940785caa5b76759328ed0f71ab' => 
    array (
      0 => 'tpl\\backstage\\photo\\photo\\photoUploadRes.html',
      1 => 1429714272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174015538f6c95b4615-10099030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'album' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5538f6c95d3a21_15097683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5538f6c95d3a21_15097683')) {function content_5538f6c95d3a21_15097683($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
