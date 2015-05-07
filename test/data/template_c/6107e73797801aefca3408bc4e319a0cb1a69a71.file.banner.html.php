<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-06 07:10:37
         compiled from "tpl\class web\index\banner.html" */ ?>
<?php /*%%SmartyHeaderCode:92865549a24d454bd0-78948487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6107e73797801aefca3408bc4e319a0cb1a69a71' => 
    array (
      0 => 'tpl\\class web\\index\\banner.html',
      1 => 1429714272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92865549a24d454bd0-78948487',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5549a24d454bd8_20905591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5549a24d454bd8_20905591')) {function content_5549a24d454bd8_20905591($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>焦点轮播图</title>
    
    <!--<?php echo '<script'; ?>
 type="text/javascript" src="js/dome.js"><?php echo '</script'; ?>
>-->

</head>
<body>

<div id="container">
    <div id="list" style="left: -950px;">
    	<img src="tpl/class web/images/banner/03.jpg" alt="1" />
		<img src="tpl/class web/images/banner/01.jpg" alt="1" />
        <img src="tpl/class web/images/banner/02.jpg" alt="2" />
        <img src="tpl/class web/images/banner/03.jpg" alt="3" />
        <img src="tpl/class web/images/banner/01.jpg" alt="3" />
    </div>
    <div id="buttons">
        <span index="1" class="on"></span>
        <span index="2"></span>
        <span index="3"></span>
    </div>
    <a href="javascript:;" id="prev" class="arrow">&lt;</a>
    <a href="javascript:;" id="next" class="arrow">&gt;</a>
</div>

</body>
</html><?php }} ?>
