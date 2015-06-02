<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-02 12:41:51
         compiled from "tpl\backstage\resource\resourceList.html" */ ?>
<?php /*%%SmartyHeaderCode:2080556d886faa7a11-37691133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '671574c25b24d893de24de57c30aa7aba861a1c4' => 
    array (
      0 => 'tpl\\backstage\\resource\\resourceList.html',
      1 => 1431604506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2080556d886faa7a11-37691133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'resourceData' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556d886faea0a4_09482822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556d886faea0a4_09482822')) {function content_556d886faea0a4_09482822($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\XAMPP\\htdocs\\class-web\\test\\framework\\libs\\view\\Smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/common.css?ver=2" />
</head>
<body>


	<div class="add-common-frame">
		<span>
		本站一共有
			<?php echo $_smarty_tpl->tpl_vars['count']->value;?>

		个外链

		</span>
		<a href="admin.php?controller=back&method=addResource" class="resource-add-btn">添加资源链接</a>
		
	</div>

	<table class="common-list">
		
		<?php if ($_smarty_tpl->tpl_vars['resourceData']->value=='') {?>
			<span>暂无外链</span>
		<?php } else { ?>

			<tr>
				<th>资源名称</th>
				<th>上传用户</th>
				<th>资源链接</th>
				<th>操作</th>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['resourceData']->value[$_smarty_tpl->tpl_vars['key']->value]['title'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['resourceData']->value[$_smarty_tpl->tpl_vars['key']->value]['username'];?>
</td>
					<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['resourceData']->value[$_smarty_tpl->tpl_vars['key']->value]['link'],55,"...");?>
</td>	
					<td class="common-option">
						<a href="admin.php?controller=back&method=resourceModifyshow&id=<?php echo $_smarty_tpl->tpl_vars['resourceData']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
" class="change" title="修改"></a>
						<i></i>
						<a href="admin.php?controller=back&method=resourceDel&id=<?php echo $_smarty_tpl->tpl_vars['resourceData']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
" 
						onclick="return confirm('是否删除!');" title="删除" class="del"></a>
					</td>		
				</tr>
		
			<?php } ?>
		<?php }?>

	</table>
</body>
</html><?php }} ?>
