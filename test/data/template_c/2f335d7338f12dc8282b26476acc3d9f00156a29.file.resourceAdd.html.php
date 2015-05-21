<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 15:46:00
         compiled from "tpl\backstage\resource\resourceAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:17634555c8fd5831373-02672833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f335d7338f12dc8282b26476acc3d9f00156a29' => 
    array (
      0 => 'tpl\\backstage\\resource\\resourceAdd.html',
      1 => 1432129557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17634555c8fd5831373-02672833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555c8fd588b102_07271916',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c8fd588b102_07271916')) {function content_555c8fd588b102_07271916($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="index.php?controller=back&method=addResourceOP">
		链接资源标题:<input type="text" name="resourceTitle" id="resourceTitle" /><br/>
		链接URL:<textarea name="resourceLink" cols="100" rows="5" id="resourceURL"></textarea><br/>
		<input type="submit" value="添加" id="submit"  />

	</form>
	<span id="message"></span>
	<br/>
	<button onclick="javascript:window.location='admin.php?controller=back&method=resourceList';" id="photoBatchDelCancel">返回</button>
</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/resourceCheck.js?var=1"><?php echo '</script'; ?>
>
<?php }} ?>
