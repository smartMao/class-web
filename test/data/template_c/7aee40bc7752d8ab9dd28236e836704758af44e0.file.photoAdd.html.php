<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 16:21:04
         compiled from "tpl\backstage\photo\photo\photoAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:318235537ae504050f1-97548984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aee40bc7752d8ab9dd28236e836704758af44e0' => 
    array (
      0 => 'tpl\\backstage\\photo\\photo\\photoAdd.html',
      1 => 1428935064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318235537ae504050f1-97548984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5537ae50457188_30175443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537ae50457188_30175443')) {function content_5537ae50457188_30175443($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
