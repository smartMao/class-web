<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-24 11:41:49
         compiled from "tpl\class web\article\articleInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:3141055619cddebd579-56236577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f98650cb75267a094f6032dbf0cc94e2238538c' => 
    array (
      0 => 'tpl\\class web\\article\\articleInfo.html',
      1 => 1431315550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3141055619cddebd579-56236577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articleData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55619cddee8505_81486376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55619cddee8505_81486376')) {function content_55619cddee8505_81486376($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
标题:<?php echo $_smarty_tpl->tpl_vars['articleData']->value['title'];?>
<br/>
作者:<?php echo $_smarty_tpl->tpl_vars['articleData']->value['author'];?>
<br/>
发布时间:<?php echo $_smarty_tpl->tpl_vars['articleData']->value['time'];?>
<br/>
内容:<?php echo $_smarty_tpl->tpl_vars['articleData']->value['content'];?>
<br/>

</body>
</html><?php }} ?>
