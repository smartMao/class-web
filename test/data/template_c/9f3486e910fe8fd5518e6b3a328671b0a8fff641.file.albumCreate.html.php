<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-23 10:33:58
         compiled from "tpl\backstage\photo\album\albumCreate.html" */ ?>
<?php /*%%SmartyHeaderCode:1458855603b7620fe26-14348439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f3486e910fe8fd5518e6b3a328671b0a8fff641' => 
    array (
      0 => 'tpl\\backstage\\photo\\album\\albumCreate.html',
      1 => 1432130131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1458855603b7620fe26-14348439',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55603b7622f222_13591072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55603b7622f222_13591072')) {function content_55603b7622f222_13591072($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/css/photo.css" />

</head>
<body>
	<h1>我是相册添加页</h1>
	<br/>
	<form method="post" action="admin.php?controller=back&method=albumCreateOp"  enctype="multipart/form-data">
		<table>

			<tr>
				<td><span>相册名称</span></td>
				<td><input type="text" name="albumName" /></td>
			</tr>
			
			<tr>
				<td><span>封面图片</span></td>
				<!-- <input type="hidden" name="MAX_FILE_SIZE" value="5000" /> -->
				<input type="file" name="albumCover" accept="image/jpeg,image/jpg,image/gif,image/png,image/bmp" />
			</tr>

			<tr>
				<td><span>相册权限</span></td>
				<td>
					<select name="albumPower">
							<option value="1">全部人都可观看</option>
							<option value="2">仅登录后的用户可观看</option>
							<option value="3">仅管理员可观看</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>相册描述(可略)</td>
				<td><textarea rows="10" cols="21" name="albumDescription"></textarea></td>
			</tr>

			<tr>
				<td>
					<input type="submit" id="submit" name="createSubmit" value="创建" onclick="stopRepeatSubmit()">
					<span id="message"></span>
				</td>
				
			</tr>

		</table>
	</form>
	<button onclick="javascript:window.location='admin.php?controller=back&method=albumList';" >返回</button>
</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/common.js?1"><?php echo '</script'; ?>
>
<?php }} ?>
