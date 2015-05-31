<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-31 16:12:09
         compiled from "tpl\backstage\resource\resourceAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:100556b16b97492b1-68136636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f335d7338f12dc8282b26476acc3d9f00156a29' => 
    array (
      0 => 'tpl\\backstage\\resource\\resourceAdd.html',
      1 => 1432776231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100556b16b97492b1-68136636',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556b16b97ba759_06736838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556b16b97ba759_06736838')) {function content_556b16b97ba759_06736838($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/resourceAdd.css?ver=1" />

</head>
<body>
	
<div class="add-common-frame">添加资源链接</div>

<div class="resourceBox">
	<form method="post" action="index.php?controller=back&method=addResourceOP">
		<input type="text" name="resourceTitle" class="resourceTitle" id="resourceTitle" placeholder="资源标题" /><br/>
		<textarea name="resourceLink" class="resourceLink"  id="resourceURL" placeholder="链接URL" ></textarea><br/>
		<input type="submit" value="添加" class="artAddsubmit" id="submit"  />
		<input type="button" onclick="javascript:window.location='admin.php?controller=back&method=resourceList';" class="artAddGoBack" value="返回">
	</form>
</div>

	<span id="message"></span>
	<br/>
	
</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/resourceCheck.js?var=1"><?php echo '</script'; ?>
>
<?php }} ?>
