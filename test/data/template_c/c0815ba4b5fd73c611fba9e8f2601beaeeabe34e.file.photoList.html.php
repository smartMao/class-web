<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-20 12:20:07
         compiled from "tpl\backstage\photo\photo\photoList.html" */ ?>
<?php /*%%SmartyHeaderCode:25966553453c8641f92-27337868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0815ba4b5fd73c611fba9e8f2601beaeeabe34e' => 
    array (
      0 => 'tpl\\backstage\\photo\\photo\\photoList.html',
      1 => 1429525183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25966553453c8641f92-27337868',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553453c866cf13_72298887',
  'variables' => 
  array (
    'id' => 0,
    'allFilesArr' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553453c866cf13_72298887')) {function content_553453c866cf13_72298887($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allFilesArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<li><img src="<?php echo $_smarty_tpl->tpl_vars['allFilesArr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" width="260" ></li>
		<?php } ?>
	</ul>
</body>
</html><?php }} ?>
