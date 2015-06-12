<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-12 16:37:13
         compiled from "tpl\backstage\photo\album\albumCreate.html" */ ?>
<?php /*%%SmartyHeaderCode:21118557aee99a01981-67309581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f3486e910fe8fd5518e6b3a328671b0a8fff641' => 
    array (
      0 => 'tpl\\backstage\\photo\\album\\albumCreate.html',
      1 => 1433428288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21118557aee99a01981-67309581',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557aee99a24c16_09781282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557aee99a24c16_09781282')) {function content_557aee99a24c16_09781282($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/style/album-create.css?ver=1" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css" />


</head>
<body>


	<div class="add-common-frame">添加相册</div>

<form method="post" action="admin.php?controller=back&method=albumCreateOp"  enctype="multipart/form-data">
		<div class="album-create-box">
			<table>

				<tr class="album-cover">
					
				</tr>

				<tr class="album-name">
					<td><span>相册名称</span></td>
					<td><input type="text" name="albumName" placeholder="相册名称" id="albumName" value=""/></td>
					<input type="hidden" id="albumNameHidden" value="1cc" />
				</tr>

				<tr class="album-power">
					<td><span>相册权限</span></td>
					<td>
						<select name="albumPower" id="albumPower">
						 		<option value="1">全部人都可观看</option>
								<option value="2">仅登录后的用户可观看</option>
								<option value="3">仅管理员可观看</option>
						</select>
					</td>
				</tr>

				<tr class="album-description">
					<td><span>相册描述(可略)</span></td>
					<td><textarea rows="10" cols="21" name="albumDescription" placeholder="相册描述(可略)" id="albumDescription"></textarea></td>
				</tr>

				<tr class="album-submit">
					<td>
					   <input type="submit" id="submit" name="createSubmit" value="创建" onclick="stopRepeatSubmit()">
						<span id="message"></span>
					</td>	
				</tr>
				<tr class="album-goback">
					<td><input type="button"  onclick="javascript:window.location='admin.php?controller=back&method=albumList';" id="goback" value="返回">
					</td>
				</tr>

			</table>
		</div>

		
</form>

</body>
</html>


<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/common.js?1"><?php echo '</script'; ?>
>
<?php }} ?>
