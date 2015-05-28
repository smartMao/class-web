<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-28 13:24:26
         compiled from "tpl\backstage\article\articleChange.html" */ ?>
<?php /*%%SmartyHeaderCode:248945566faea604799-39747540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '502be67e25677e0c18dd9af484bf821b39aaa319' => 
    array (
      0 => 'tpl\\backstage\\article\\articleChange.html',
      1 => 1432514192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248945566faea604799-39747540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'changeInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5566faea695039_37951940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5566faea695039_37951940')) {function content_5566faea695039_37951940($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>


<link rel="stylesheet" type="text/css" href="tpl/backstage/article/style/article.css" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css" />
<link rel="stylesheet" type="text/css" href="ueditor1_4_3-utf8-php/themes/default/dialogbase.css" />

</head>
<body>

<form method="post" action="admin.php?controller=back&method=changeArticleOk&id=<?php echo $_smarty_tpl->tpl_vars['changeInfo']->value['id'];?>
">
	<!--<span>文章id:</span>
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
	
	<br/>

	<span>文章内容:</span>-->
 	<input type="text" name="artTitle" class="artTitle" value="<?php echo $_smarty_tpl->tpl_vars['changeInfo']->value['title'];?>
">

	<?php echo $_smarty_tpl->getSubTemplate ('tpl/backstage/article/ueditor1_4_3-utf8-php/editor.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
	<?php echo '<script'; ?>
 id="container" name="content" type="text/plain"  style="width:95%;height: 500px;margin:0 auto;">
    	 <?php echo $_smarty_tpl->tpl_vars['changeInfo']->value['content'];?>

    <?php echo '</script'; ?>
>
	<input type="submit" class="artAddsubmit" name="artChangeSubmit" value="修改">
	<input type="button" class="artAddGoBack"  onclick="javascript:window.location='admin.php?controller=back&method=artList';" value="返回" />
	


</form>



</body>
</html><?php }} ?>
