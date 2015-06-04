<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-04 16:46:41
         compiled from "tpl\backstage\photo\album\albumEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:16377557064d12732f3-58034553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a33677cc57941b6db4ef773a293870756526db52' => 
    array (
      0 => 'tpl\\backstage\\photo\\album\\albumEdit.html',
      1 => 1433074688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16377557064d12732f3-58034553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'albumInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557064d12a2101_15152648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557064d12a2101_15152648')) {function content_557064d12a2101_15152648($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/style/album-create.css" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css" />


<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/photo/webuploader/css/webuploader.css" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/photo/webuploader/examples/cover-upload/style.css?ver=2" />

</head>
<body>

<div class="add-common-frame">修改相册信息</div>


<form method="post" action="admin.php?controller=back&method=albumEditOP&id=<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['id'];?>
" enctype="multipart/form-data">
	<div class="album-create-box">
		<table>
			<tr class="album-name">
				<td><span>相册标题:</span></td>
				<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['title'];?>
" name="albumName" /></td>
			</tr>
			<tr class="album-power">
				<td><span>相册权限:</span></td>
				<input type="hidden" id="photoPowerHide" value="<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['power'];?>
">
				<td>
					<select name="albumPower">
						<option value="1">全部人都可以观看</option>
						<option value="2">仅登录后的用户可观看</option>
						<option value="3">仅管理员可观看</option>
					</select>
				</td>
			</tr>
			<tr class="album-description">
				<td><span>相册描述</span></td>
				<td><textarea rows="10" cols="50" name="description"><?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['description'];?>
</textarea></td>
			</tr>
			<tr class="album-submit">
				<td><input type="submit" name="albumEditSubmit" id="submit" value="更新"></td>
			</tr>
			<tr class="album-goback">
				<td><input type="button" onclick="javascript:window.location='admin.php?controller=back&method=albumList';" id="goback" value="返回">
				</td>
			</tr>

		</table>
	</div>
</form>


<div id="wrapper">
        <div id="container">
            <!--头部，相册选择和格式选择-->

            <div id="uploader">
                <div class="queueList"><img src="<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['path'];?>
" id="photoCoverImage" class="album-cover-img" width="295" height="210" />
                    <div id="dndArea" class="placeholder">
                        <div id="filePicker">
                        	
                        </div>
                    </div>

				<input type="hidden" id="albumID" class="albumID" value="<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['id'];?>
" />

                </div>

                <div class="statusBar" style="display:none;">
					<a href="admin.php?controller=back&method=albumEditShow&id=30" class="resChangeAlbumCover">修改相册封面</a>
				</div>
                <!--

                    <div class="progress">
                        <span class="text">0%</span>
                        <span class="percentage"></span>
                    </div><div class="info"></div>
                    <div class="btns">
                        <div id="filePicker2"></div><div class="uploadBtn"><</div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
	
</body>
</html>


<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/photo/photo/webuploader/examples/cover-upload/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/photo/photo/webuploader/dist/webuploader.js?ver=1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/photo/photo/webuploader/examples/cover-upload/upload.js?ver=2">
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/photoEdit.js?ver=2"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

//  选择相册权限
	selectPhotoPower();
<?php echo '</script'; ?>
><?php }} ?>
