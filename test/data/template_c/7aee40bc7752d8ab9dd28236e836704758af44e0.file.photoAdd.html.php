<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-12 16:37:19
         compiled from "tpl\backstage\photo\photo\photoAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:13279557aee9fb8d5e7-08945208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aee40bc7752d8ab9dd28236e836704758af44e0' => 
    array (
      0 => 'tpl\\backstage\\photo\\photo\\photoAdd.html',
      1 => 1433123704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13279557aee9fb8d5e7-08945208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557aee9fbb8573_16589396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557aee9fbb8573_16589396')) {function content_557aee9fbb8573_16589396($_smarty_tpl) {?> <!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>WebUploader演示</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/photo/webuploader/css/webuploader.css" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/photo/webuploader/examples/image-upload/style.css?ver=1" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/photo.css" />

</head>
<body>

   
<input type="button" class="gobackAlbumList" value="返回照片列表" 
onclick="javascript:window.location='admin.php?controller=back&method=photoList&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';"/>


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



</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/photo/photo/webuploader/examples/image-upload/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/photo/photo/webuploader/dist/webuploader.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/photo/photo/webuploader/examples/image-upload/upload.js?ver=4">
    
<?php echo '</script'; ?>
>
<?php }} ?>
