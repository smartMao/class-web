<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-25 02:42:04
         compiled from "tpl\backstage\photo\album\albumCreate.html" */ ?>
<?php /*%%SmartyHeaderCode:299455561b259c4c799-63298027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f3486e910fe8fd5518e6b3a328671b0a8fff641' => 
    array (
      0 => 'tpl\\backstage\\photo\\album\\albumCreate.html',
      1 => 1432514201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299455561b259c4c799-63298027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5561b259ca6523_19618714',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5561b259ca6523_19618714')) {function content_5561b259ca6523_19618714($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/style/album-create.css" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css" />

</head>
<body>


	<div class="add-common-frame">添加相册</div>

	
	<form method="post" action="admin.php?controller=back&method=albumCreateOp"  enctype="multipart/form-data">
		<div class="album-create-box">
			<table>

				<tr class="album-cover">
					<td><span>封面图片</span></td>
					<!-- <input type="hidden" name="MAX_FILE_SIZE" value="5000" /> -->
					<input type="file" class="upload" name="albumCover" accept="image/jpeg,image/jpg,image/gif,image/png,image/bmp" />
				</tr>

				<tr class="album-name">
					<td><span>相册名称</span></td>
					<td><input type="text" name="albumName" /></td>
				</tr>

				<tr class="album-power">
					<td><span>相册权限</span></td>
					<td>
						<select name="albumPower">
								<option value="1">全部人都可观看</option>
								<option value="2">仅登录后的用户可观看</option>
								<option value="3">仅管理员可观看</option>
						</select>
					</td>
				</tr>

				<tr class="album-description">
					<td><span>相册描述(可略)</span></td>
					<td><textarea rows="10" cols="21" name="albumDescription"></textarea></td>
				</tr>

				<tr class="album-submit">
					<td>
					 	<input type="submit" id="submit" name="createSubmit" value="创建" onclick="stopRepeatSubmit()">
						<span id="message"></span>
					</td>
					
				</tr>

			</table>
		</div>
	</form>
	<button onclick="javascript:window.location='admin.php?controller=back&method=albumList';" class="album-goback" >返回</button>
</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/common.js?1"><?php echo '</script'; ?>
>
<?php }} ?>
