<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-30 04:30:21
         compiled from "tpl\backstage\article\articleChange.html" */ ?>
<?php /*%%SmartyHeaderCode:1680554193bda4abd3-60073380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0621eca8e076d3a89a81f73de77ced7ba53356e' => 
    array (
      0 => 'tpl\\backstage\\article\\articleChange.html',
      1 => 1429714272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1680554193bda4abd3-60073380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'changeInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554193bdb02589_88225443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554193bdb02589_88225443')) {function content_554193bdb02589_88225443($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link rel="stylesheet" type="text/css" href="ueditor1_4_3-utf8-php/themes/default/dialogbase.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="js/common.js"><?php echo '</script'; ?>
>
</head>
<body>
<form method="post" action="admin.php?controller=back&method=changeArticleOk&id=<?php echo $_smarty_tpl->tpl_vars['changeInfo']->value['id'];?>
">
	<span>文章id:</span>
	<span><?php echo $_smarty_tpl->tpl_vars['changeInfo']->value['id'];?>
</span>
	<br/>

	<span>uid:</span>
	<span><?php echo $_smarty_tpl->tpl_vars['changeInfo']->value['uid'];?>
</span>
	
	<br/>

	<span>作者:</span>
	<span><?php echo $_smarty_tpl->tpl_vars['changeInfo']->value['author'];?>
</span>
	<br/>

	<span>发布时间:</span>
	<span><?php echo $_smarty_tpl->tpl_vars['changeInfo']->value['time'];?>
</span>
	<br/>

	<span>标题:</span>
	<input type="text" name="artTitle" value="<?php echo $_smarty_tpl->tpl_vars['changeInfo']->value['title'];?>
">
	<br/>

	<span>文章内容:</span>



	<?php echo $_smarty_tpl->getSubTemplate ('tpl/backstage/article/ueditor1_4_3-utf8-php/editor.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
	<?php echo '<script'; ?>
 id="container" name="content" type="text/plain" style="width:1024px;height:500px;">
       <?php echo $_smarty_tpl->tpl_vars['changeInfo']->value['content'];?>

    <?php echo '</script'; ?>
>
	<input type="submit" name="artChangeSubmit" value="修改">
	<input type="button" onclick="goBack()" value="返回">


</form>



</body>
</html><?php }} ?>
