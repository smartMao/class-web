<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-30 06:09:11
         compiled from "tpl\class web\classPhoto\photoList.html" */ ?>
<?php /*%%SmartyHeaderCode:258945541aae7ba3134-99440986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d3816611bacfe76f76eac3c8da9aa24068939d3' => 
    array (
      0 => 'tpl\\class web\\classPhoto\\photoList.html',
      1 => 1430294162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258945541aae7ba3134-99440986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'photoData' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5541aae7bf9053_51343815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5541aae7bf9053_51343815')) {function content_5541aae7bf9053_51343815($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link rel="stylesheet" type="text/css" href="tpl/class web/css/gather.css">
<link rel="stylesheet" type="text/css" href="tpl/class web/css/photo/photoList.css">
</head>
<body>
	<ul class="photo-list">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['photoData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<li><img src="<?php echo $_smarty_tpl->tpl_vars['photoData']->value[$_smarty_tpl->tpl_vars['key']->value]['path'];?>
"></li>
		<?php } ?>

	</ul>
</body>
</html><?php }} ?>
