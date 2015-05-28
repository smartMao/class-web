<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-28 15:49:07
         compiled from "tpl\backstage\photo\album\albumCreate.html" */ ?>
<?php /*%%SmartyHeaderCode:124585566d263764086-00093058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f3486e910fe8fd5518e6b3a328671b0a8fff641' => 
    array (
      0 => 'tpl\\backstage\\photo\\album\\albumCreate.html',
      1 => 1432820938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124585566d263764086-00093058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5566d263783490_96076310',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5566d263783490_96076310')) {function content_5566d263783490_96076310($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/style/album-create.css?ver=1" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css" />


<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/photo/webuploader/css/webuploader.css" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/photo/webuploader/examples/cover-upload/style.css" />

</head>
<body>


	<div class="add-common-frame">添加相册</div>
	
	<div class="album-cover-box">
		<span>请上传相册封面</span>
		<img src="" width="295px" height="210" style="display:none;" id="photoCoverImage">
	</div>
	
	<form method="post" action="admin.php?controller=back&method=albumCreateOp"  enctype="multipart/form-data">
		<div class="album-create-box">
			<table>

				<tr class="album-cover">
					<td><span>选择封面图片</span></td>
					<!-- <input type="hidden" name="MAX_FILE_SIZE" value="5000" /> -->
					<input type="file" class="upload" id="photoCoverChange" name="albumCover" accept="image/jpeg,image/jpg,image/gif,image/png,image/bmp" />
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
				<tr class="album-goback">
					<td><input type="button" onclick="javascript:window.location='admin.php?controller=back&method=albumList';" id="goback" value="返回">
					</td>
				</tr>

			</table>
		</div>
	</form>

<!-- webuploader -->
	<div id="wrapper">
	        <div id="container">
	            <!--头部，相册选择和格式选择-->

	            <div id="uploader">
	                <div class="queueList">
	                    <div id="dndArea" class="placeholder">
	                        <div id="filePicker"></div>
	                    </div>

					<input type="hidden" id="albumID" class="albumID" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />

	                </div>
	                <div class="statusBar" style="display:none;">
	                    <div class="progress">
	                        <span class="text">0%</span>
	                        <span class="percentage"></span>
	                    </div><div class="info"></div>
	                    <div class="btns">
	                        <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
<!-- webuploader -->
</body>
</html>


<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/photo/photo/webuploader/examples/cover-upload/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/photo/photo/webuploader/dist/webuploader.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/photo/photo/webuploader/examples/cover-upload/upload.js?ver=1">
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/common.js?1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/photoEdit.js?ver=2"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

//  修改相册封面
	addPhotoCover();

<?php echo '</script'; ?>
><?php }} ?>
