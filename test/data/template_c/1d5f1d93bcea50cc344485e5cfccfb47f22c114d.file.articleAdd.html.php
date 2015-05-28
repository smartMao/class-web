<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-28 10:45:31
         compiled from "tpl\backstage\article\articleAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:179435566d5ab3689f5-38090625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d5f1d93bcea50cc344485e5cfccfb47f22c114d' => 
    array (
      0 => 'tpl\\backstage\\article\\articleAdd.html',
      1 => 1432632744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179435566d5ab3689f5-38090625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5566d5ab393974_96945062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5566d5ab393974_96945062')) {function content_5566d5ab393974_96945062($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>添加文章</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/article/style/article.css" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css" />

</head>
<body>
	<form method="post" action="admin.php?controller=back&method=artAdd">
		
		 
		 <input type="text" id="artTitle"  class="artTitle" name="artTitle" value="" />

		 <!--<span>发布人:</span>
		 <span><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</span>-->
		
		<?php echo $_smarty_tpl->getSubTemplate ('tpl/backstage/article/ueditor1_4_3-utf8-php/editor.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php echo '<script'; ?>
 id="container" name="content" type="text/plain" style="width:95%;height: 500px;margin:0 auto;">
       
   		<?php echo '</script'; ?>
>

		<br/>
	
		<input type="submit" id="artAddsubmit" class="artAddsubmit" name="addSubmit" value="提交">
		<input type="button" class="artAddGoBack" onclick="javascript:window.location='admin.php?controller=back&method=artList';" value="返回">


	</form>
</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="js/common.js"><?php echo '</script'; ?>
><?php }} ?>
