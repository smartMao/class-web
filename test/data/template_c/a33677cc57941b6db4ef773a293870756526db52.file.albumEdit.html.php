<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 15:44:23
         compiled from "tpl\backstage\photo\album\albumEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:27702555c8073419574-72218360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a33677cc57941b6db4ef773a293870756526db52' => 
    array (
      0 => 'tpl\\backstage\\photo\\album\\albumEdit.html',
      1 => 1432129461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27702555c8073419574-72218360',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555c8073448377_00567707',
  'variables' => 
  array (
    'albumInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c8073448377_00567707')) {function content_555c8073448377_00567707($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css" />
</head>
<body>
<form method="post" action="admin.php?controller=back&method=albumEditOP&id=<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['id'];?>
" enctype="multipart/form-data">
	<img src="<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['path'];?>
" id="photoCoverImage" width="295" height="210" />

	<ul>
		<li>
			<span>修改封面:</span>
			<input type="file" name="myFile" id="photoCoverChange" accept="image/jpeg" />
		</li>

		<li>
			<span>相册标题:</span>
			<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['title'];?>
" name="albumName" />
		</li>

		<li>
			<span>相册权限:</span>
			<input type="hidden" id="photoPowerHide" value="<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['power'];?>
">
			<select name="albumPower">
				<option value="1">全部人都可以观看</option>
				<option value="2">仅登录后的用户可观看</option>
				<option value="3">仅管理员可观看</option>
			</select>
		</li>

		<li>
			<span>相册描述</span>
			<textarea rows="10" cols="50" name="description"><?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['description'];?>
</textarea>
		</li>

		<li>
			<input type="submit" name="albumEditSubmit" value="更新">
		</li>

	</ul>
</form>
	<button onclick="javascript:window.location='admin.php?controller=back&method=albumList';">返回</button>
</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/photoEdit.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
//  修改相册封面
	showPhotoCover();

//  选择相册权限
	selectPhotoPower();
<?php echo '</script'; ?>
><?php }} ?>
