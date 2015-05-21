<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 15:56:03
         compiled from "tpl\backstage\article\articleAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:19758555c92734a82b2-70153357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d5f1d93bcea50cc344485e5cfccfb47f22c114d' => 
    array (
      0 => 'tpl\\backstage\\article\\articleAdd.html',
      1 => 1430750458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19758555c92734a82b2-70153357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555c92734d3240_78198022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c92734d3240_78198022')) {function content_555c92734d3240_78198022($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>添加文章</title>
<?php echo '<script'; ?>
 type="text/javascript" src="js/common.js"><?php echo '</script'; ?>
>
</head>
<body>
	<form method="post" action="admin.php?controller=back&method=artAdd">
		
		 <span>标题</span>
		 <input type="text" id="artTitle" name="artTitle" value="" />

		 <span>发布者:</span>
		 <span><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</span>
		
		<?php echo $_smarty_tpl->getSubTemplate ('tpl/backstage/article/ueditor1_4_3-utf8-php/editor.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php echo '<script'; ?>
 id="container" name="content" type="text/plain" style="width:1024px;height:500px;">
       
   		<?php echo '</script'; ?>
>

		<input type="submit" id="artAddsubmit" name="addSubmit" value="提交">
		<input type="button" onclick="goBack()" value="返回">
	</form>
</body>
</html><?php }} ?>
