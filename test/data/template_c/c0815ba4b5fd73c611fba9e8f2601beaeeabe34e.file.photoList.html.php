<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-31 16:07:38
         compiled from "tpl\backstage\photo\photo\photoList.html" */ ?>
<?php /*%%SmartyHeaderCode:14470556b15aa7889b2-88448125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0815ba4b5fd73c611fba9e8f2601beaeeabe34e' => 
    array (
      0 => 'tpl\\backstage\\photo\\photo\\photoList.html',
      1 => 1372989508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14470556b15aa7889b2-88448125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'data' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556b15aa7bf4c9_86394547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556b15aa7bf4c9_86394547')) {function content_556b15aa7bf4c9_86394547($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/style/photo-list.css">
</head>
<body onload=" waterfall( 'main' , 1 ) ">
	<button onclick="javascript:window.location='admin.php?controller=back&method=albumList';" class="goBack">返回相册列表</button>
	<a href="admin.php?controller=back&method=photoAddShow&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">添加照片</a>
	
	<ul class="photo-list">
	<button class="photoBatchBtn" id="photoBatchBtn">批量删除</button>
	<button class="photoBatchDelCancel" id="photoBatchDelCancel">取消</button>
	<button class="photoSelectAll" id="photoSelectAll">全选</button>
	<button class="photoInverseAll" id="photoInverseAll">反选</button>

	<form method="post" id="checkForm" action="admin.php?controller=back&method=photoBatchDel&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<?php if ($_smarty_tpl->tpl_vars['data']->value=='') {?> <!-- 如果当前数据库传出来的数据是空的 -->
			<span>当前相册暂无照片</span>
		   
		<?php } else { ?>
			<div class="main" id="main">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>

					<li>
						<div class="pic">
							<img src="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value]['path'];?>
" width="165" height="auto" >
							<input type="checkbox" name="photoIdDel[]" class="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
">
						</div>
					</li>

				<?php } ?>
			</div>
		<?php }?>
		<input type="submit"  id="submit" value="确认" onclick="stopRepeatDelBtn()" />
		<span id="message" class="message"></span>
	   
	</form>
	</ul>
</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/photoBatchDel.js?ver=3"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/common.js?1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/waterfallBackstage.js"><?php echo '</script'; ?>
>
<?php }} ?>
