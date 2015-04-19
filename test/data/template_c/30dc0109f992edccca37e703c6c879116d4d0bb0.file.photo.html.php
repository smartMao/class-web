<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-03 07:48:59
         compiled from "tpl\backstage\photo\photo.html" */ ?>
<?php /*%%SmartyHeaderCode:9795551a86ae8d3ac7-77676911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30dc0109f992edccca37e703c6c879116d4d0bb0' => 
    array (
      0 => 'tpl\\backstage\\photo\\photo.html',
      1 => 1428040138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9795551a86ae8d3ac7-77676911',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551a86ae91de59_78890741',
  'variables' => 
  array (
    'albumList' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551a86ae91de59_78890741')) {function content_551a86ae91de59_78890741($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/style/backPhoto.css" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css" />
</head>
<body>
	<a href="admin.php?controller=back&method=showAlbumCreate">相册添加</a>
	
	<ul class="photo-list">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['albumList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<li>
				<ul class="photo-box">
					<li class="cover-box"><img src="<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['path'];?>
" width="295" height="210"></li>
					<table cellspacing="0">
						<tr>
							<th>相册标题:</th>
							<td><?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['title'];?>
</td>
						</tr>

						<tr>
							<th>上传作者:</th>
							<td><?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['username'];?>
</td>
						</tr>

						<tr>
							<th>创建时间:</th>
							<td><?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['time'];?>
</td>
						</tr>

						<tr>
							<th> 浏览次数:</th>
							<td><?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['browseNum'];?>
</td>
						</tr>

						<tr>
							<th>评论次数:</th>
							<td><?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['commentNum'];?>
</td>
						</tr>


						<tr>
							<th>权限:</th>
							<td>		
								<?php if ($_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['power']==1) {?>
									<span>全部人都可以观看</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['power']==2) {?>
									<span>仅登录后的用户可观看</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['power']==3) {?>
									<span>仅管理员可观看</span>
								<?php }?>
							</td>
						</tr>

						<tr>
							<td>
								<a href="admin.php?controller=back&method=photoEditShow&id=<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
">编辑</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="admin.php?controller=back&method=albumDel&id=<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
" 
								onclick="return confirm('是否删除!');">删除</a>
							</td>
							<td><a href="">进入相册</a></td>

						</tr>

					</table>
				</ul>
			</li>
		<?php } ?>


	</ul>

</body>
</html>

<?php }} ?>
