<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 09:18:53
         compiled from "tpl\backstage\photo\photo\photoAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:1488555c355d4bafb0-28291302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aee40bc7752d8ab9dd28236e836704758af44e0' => 
    array (
      0 => 'tpl\\backstage\\photo\\photo\\photoAdd.html',
      1 => 1431155052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1488555c355d4bafb0-28291302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555c355d534154_67092723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c355d534154_67092723')) {function content_555c355d534154_67092723($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="admin.php?controller=back&method=photoBatchUpload" enctype="multipart/form-data">
		<input type="hidden" name="albumID" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<input type="hidden" name="MAX_FILE_SIZE" value="10485760">
		<input type="file" name="files[]" value="" multiple="multiple" accept="image/*" />
		<input type="submit" name="submit" id="submit" value="上传" onclick="stopRepeatSubmit()" />
		<span id="message"></span> <!-- js存放提示信息 -->
	</form>
	<br/>
	<sapn>小提示:同时最多上传20张图片 , 每次只上传10张图片,分多次上传,速度更快!</sapn>

	
</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript" src="./tpl/backstage/js/common.js?1"><?php echo '</script'; ?>
><?php }} ?>