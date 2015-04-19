<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 02:57:11
         compiled from "tpl\backstage\photo\photo\photoAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:25732552f08e7bc11f5-09664171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c15632a339fdee7a2f67bfa5665a434a2209311' => 
    array (
      0 => 'tpl\\backstage\\photo\\photo\\photoAdd.html',
      1 => 1428935064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25732552f08e7bc11f5-09664171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552f08e7c22c89_13614821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f08e7c22c89_13614821')) {function content_552f08e7c22c89_13614821($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="admin.php?controller=back&method=photoBatchUpload" enctype="multipart/form-data">
		<input type="hidden" name="albumID" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<input type="hidden" name="MAX_FILE_SIZE" value="2097152">
		<input type="file" name="files[]" value="" multiple="multiple" accept="image/*" />
		<input type="submit" name="submit" value="上传" />
	</form>

	<!--  <span>最多一次上传20张图片,必须全部小于2M以内</span>   -->
</body>
</html><?php }} ?>
