<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-12 12:53:58
         compiled from "tpl\datetime.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208654b3b5d67e0ea3-17057234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f5fcb82a175d0b9e192374e23a0dd46ae13a28e' => 
    array (
      0 => 'tpl\\datetime.tpl',
      1 => 1421063632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208654b3b5d67e0ea3-17057234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b3b5d6807fb6_91896758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b3b5d6807fb6_91896758')) {function content_54b3b5d6807fb6_91896758($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_test')) include 'C:\\xampp\\htdocs\\www\\smarty\\smarty\\plugins\\modifier.test.php';
?><?php echo smarty_modifier_test($_smarty_tpl->tpl_vars['time']->value,'Y-m-d');?>
<?php }} ?>
