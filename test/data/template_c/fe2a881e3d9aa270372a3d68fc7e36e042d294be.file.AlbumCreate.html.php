<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-03 06:36:54
         compiled from "tpl\backstage\photo\AlbumCreate.html" */ ?>
<?php /*%%SmartyHeaderCode:28065551e18e642b2c2-07804269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe2a881e3d9aa270372a3d68fc7e36e042d294be' => 
    array (
      0 => 'tpl\\backstage\\photo\\AlbumCreate.html',
      1 => 1427677934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28065551e18e642b2c2-07804269',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551e18e644a6d7_38873772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e18e644a6d7_38873772')) {function content_551e18e644a6d7_38873772($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/css/photo.css" />

</head>
<body>
	<h1>我是相册添加页</h1>
	<br/>
	<form method="post" action="admin.php?controller=back&method=photoAlbumCreateOp"  enctype="multipart/form-data">
		<table>

			<tr>
				<td><span>相册名称</span></td>
				<td><input type="text" name="photoName" /></td>
			</tr>
			
			<tr>
				<td><span>封面图片</span></td>
				<!-- <input type="hidden" name="MAX_FILE_SIZE" value="5000" /> -->
				<input type="file" name="photoCover" accept="image/jpeg,image/jpg,image/gif,image/png,image/bmp" />
			</tr>

			<tr>
				<td><span>相册权限</span></td>
				<td>
					<select name="photoPower">
							<option value="1">全部人都可观看</option>
							<option value="2">仅登录后的用户可观看</option>
							<option value="3">仅管理员可观看</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>相册描述(可略)</td>
				<td><textarea rows="10" cols="21" name="photoDescription"></textarea></td>
			</tr>

			<tr>
				<td><input type="submit" name="createSubmit" value="创建"></td>
			</tr>

		</table>
	</form>
</body>
</html><?php }} ?>
