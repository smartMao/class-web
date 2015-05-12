<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 16:47:33
         compiled from "tpl\backstage\article\article.html" */ ?>
<?php /*%%SmartyHeaderCode:1014655521285aa36b7-25856170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '420bf3e1004eda1ffe163a62af8bf83a4c98daf7' => 
    array (
      0 => 'tpl\\backstage\\article\\article.html',
      1 => 1431437839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1014655521285aa36b7-25856170',
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
  'unifunc' => 'content_55521285af5751_94657532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55521285af5751_94657532')) {function content_55521285af5751_94657532($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\XAMPP\\htdocs\\class-web\\test\\framework\\libs\\view\\Smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/css/common.css?ver=1" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css" />


</head>
<body>

	<div class="add-common-frame">
		<span>
		本站一共有
			<?php if ($_smarty_tpl->tpl_vars['artCount']->value==0) {?>
				0
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['artCount']->value;?>

			<?php }?>
		篇文章

		</span>
		<a href="admin.php?controller=back&method=addArticle" class="common-add-btn"></a>
		
	</div>
		
	<table class="common-list">
		<tr>
			<th>id</th>
			<th>uid</th>
			<th>title</th>
			<th>author</th>
			<th>time</th>
			<th>content</th>
			<th>操作</th>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['artInfo']->value=='') {?> 
			<span>暂无文章</span>
		<?php } else { ?>
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
					<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['artInfo']->value[$_smarty_tpl->tpl_vars['key']->value]['title'],18,"...");?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['artInfo']->value[$_smarty_tpl->tpl_vars['key']->value]['author'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['artInfo']->value[$_smarty_tpl->tpl_vars['key']->value]['time'];?>
</td>
					<td>此处不显示</td>
					<td class="common-option">
						<a href="admin.php?controller=back&method=changeArticle&id=<?php echo $_smarty_tpl->tpl_vars['artInfo']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
" class="change" title="修改"></a>
						<i></i>
						<a href="admin.php?controller=back&method=artDel&id=<?php echo $_smarty_tpl->tpl_vars['artInfo']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
" 
						onclick="return confirm('是否删除!');" title="删除" class="del"></a>
					</td>

				</tr>
			<?php } ?>
		<?php }?>

	</table>
</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="js/common.js"><?php echo '</script'; ?>
>
<?php }} ?>
