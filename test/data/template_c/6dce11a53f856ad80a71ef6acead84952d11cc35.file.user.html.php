<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-01 15:24:33
         compiled from "tpl\backstage\user\user.html" */ ?>
<?php /*%%SmartyHeaderCode:14796551bf191435495-04324174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dce11a53f856ad80a71ef6acead84952d11cc35' => 
    array (
      0 => 'tpl\\backstage\\user\\user.html',
      1 => 1425385460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14796551bf191435495-04324174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'userList' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551bf1914e12c1_50812687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551bf1914e12c1_50812687')) {function content_551bf1914e12c1_50812687($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link rel="stylesheet" type="text/css" href="tpl\backstage\user\style/user.css">
</head>
<body>
<span>本站一共有<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
个用户</span>
<table class="user-list">
	<tr>
		<th>id</th>
		<th>userName</th>
		<th>trueName</th>
		<th>power</th>
		<th>registerTime</th>
		<th>操作</th>
	</tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['key']->value]['userName'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['key']->value]['trueName'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['key']->value]['power'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['key']->value]['registerTime'];?>
</td>
		<td>
			<a href="admin.php?controller=back&method=userDetails&id=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
">详细资料</a><br/>	
			<a href="admin.php?controller=back&method=userDel&id=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
" 
				onclick="return confirm('是否删除!');">删除</a>
		</td>
	</tr>
<?php } ?>



</table>
	
</body>
</html><?php }} ?>
