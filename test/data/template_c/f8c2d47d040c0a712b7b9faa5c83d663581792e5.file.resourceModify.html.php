<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-25 03:03:26
         compiled from "tpl\backstage\resource\resourceModify.html" */ ?>
<?php /*%%SmartyHeaderCode:13402556274de4992b2-41074154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8c2d47d040c0a712b7b9faa5c83d663581792e5' => 
    array (
      0 => 'tpl\\backstage\\resource\\resourceModify.html',
      1 => 1431439854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13402556274de4992b2-41074154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resourceData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556274de5162d4_87784717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556274de5162d4_87784717')) {function content_556274de5162d4_87784717($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="admin.php?controller=back&method=resourceModifyOP"><br/>
												   
		<input type="hidden" name="resourceID" id="resourceID" value="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['id'];?>
">
		链接名称:<input type="text" name="resourceTitle" id="resourceTitle" value="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['title'];?>
" /><br/>
		链接URL:<textarea name="resourceURL" id="resourceURL" cols="100" rows="5"><?php echo $_smarty_tpl->tpl_vars['resourceData']->value['link'];?>
</textarea><br/>
			<input type="submit" id="submit" value="修改" />

	</form>
	<button onclick="goBack();">返回</button>
</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/resourceCheck.js?1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/common.js?1"><?php echo '</script'; ?>
><?php }} ?>
