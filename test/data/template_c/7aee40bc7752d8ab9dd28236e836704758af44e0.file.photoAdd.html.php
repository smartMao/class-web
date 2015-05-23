<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-23 10:22:41
         compiled from "tpl\backstage\photo\photo\photoAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:1481556035111e65a2-09171911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aee40bc7752d8ab9dd28236e836704758af44e0' => 
    array (
      0 => 'tpl\\backstage\\photo\\photo\\photoAdd.html',
      1 => 1432369321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1481556035111e65a2-09171911',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556035112059b2_06441084',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556035112059b2_06441084')) {function content_556035112059b2_06441084($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>WebUploader演示</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/photo/webuploader/css/webuploader.css" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/photo/webuploader/examples/image-upload/style.css" />

</head>
<body>
    <div id="wrapper">
        <div id="container">
            <!--头部，相册选择和格式选择-->

            <div id="uploader">
                <div class="queueList">
                    <div id="dndArea" class="placeholder">
                        <div id="filePicker"></div>
                        <p>或将照片拖到这里，单次最多可选300张</p>
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

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/photo/photo/webuploader/examples/image-upload/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/photo/photo/webuploader/dist/webuploader.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/photo/photo/webuploader/examples/image-upload/upload.js?ver=1">
	
<?php echo '</script'; ?>
>

</body>
</html>
<?php }} ?>
