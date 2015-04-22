<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 16:38:26
         compiled from "tpl\backstage\photo\photo\photoList.html" */ ?>
<?php /*%%SmartyHeaderCode:145125537a46cbec501-36580977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0815ba4b5fd73c611fba9e8f2601beaeeabe34e' => 
    array (
      0 => 'tpl\\backstage\\photo\\photo\\photoList.html',
      1 => 1429713447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145125537a46cbec501-36580977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5537a46cc1b315_25849687',
  'variables' => 
  array (
    'id' => 0,
    'data' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537a46cc1b315_25849687')) {function content_5537a46cc1b315_25849687($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/style/photo-list.css">
</head>
<body>
	<a href="admin.php?controller=back&method=photoAddShow&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">添加照片</a>
	
	<ul class="photo-list">
	<button class="photoBatchBtn" id="photoBatchBtn">批量删除</button>
	<button class="photoBatchDelCancel" id="photoBatchDelCancel">取消</button>
	<form method="post" id="checkForm" action="admin.php?controller=back&method=photoBatchDel&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['photoPathArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<li>
				<img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['photoPathArr'][$_smarty_tpl->tpl_vars['key']->value];?>
" width="260" height="auto" >
						
				<input type="checkbox" name="photoIdDel[]" class="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['photoIdArr'][$_smarty_tpl->tpl_vars['key']->value]['id'];?>
">
			</li>
		<?php } ?>
		<input type="submit"  id="submit" value="确认" />
	</form>
	</ul>
</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/photoBatchDel.js"><?php echo '</script'; ?>
><?php }} ?>
