<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-23 05:33:50
         compiled from "tpl\backstage\article\article.html" */ ?>
<?php /*%%SmartyHeaderCode:180645538681ee64636-29337780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75831dbf74cadfb041aec6799df7905b54edee31' => 
    array (
      0 => 'tpl\\backstage\\article\\article.html',
      1 => 1429714271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180645538681ee64636-29337780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'artCount' => 0,
    'artInfo' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5538681ef10451_09572591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5538681ef10451_09572591')) {function content_5538681ef10451_09572591($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/css/article1.css" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css" />


</head>
<body>

	<div class="add-art-frame">
		<span>本站一共有<?php echo $_smarty_tpl->tpl_vars['artCount']->value;?>
篇文章</span>
		<a href="admin.php?controller=back&method=addArticle" class="art-add-btn"></a>
		
	</div>
		
	<table class="art-list">
		<tr>
			<th>id</th>
			<th>uid</th>
			<th>title</th>
			<th>author</th>
			<th>time</th>
			<th>content</th>
			<th>操作</th>
		</tr>
	<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['artInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['artInfo']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['artInfo']->value[$_smarty_tpl->tpl_vars['key']->value]['uid'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['artInfo']->value[$_smarty_tpl->tpl_vars['key']->value]['title'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['artInfo']->value[$_smarty_tpl->tpl_vars['key']->value]['author'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['artInfo']->value[$_smarty_tpl->tpl_vars['key']->value]['time'];?>
</td>
			<td>此处不显示</td>
			<td class="art-option">
				<a href="admin.php?controller=back&method=changeArticle&id=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['artInfo']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
" class="change" title="修改"></a>
				<i></i>
				<a href="admin.php?controller=back&method=artDel&id=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['artInfo']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
" 
				onclick="return confirm('是否删除!');" title="删除" class="del"></a>
			</td>

		</tr>
	<?php } ?>

		
	<!--
		<a href="admin.php?controller=back&method=addArticle">文章添加</a>
	
		<span>本站一共有<?php echo $_smarty_tpl->tpl_vars['artCount']->value;?>
篇文章</span>
			
	-->
		

	</table>
</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="js/common.js"><?php echo '</script'; ?>
>
<?php }} ?>
