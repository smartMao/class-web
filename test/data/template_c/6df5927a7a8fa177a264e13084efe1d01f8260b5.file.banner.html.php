<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-31 13:36:28
         compiled from "tpl\class web\index\banner.html" */ ?>
<?php /*%%SmartyHeaderCode:3308551a86bce801a0-59865132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6df5927a7a8fa177a264e13084efe1d01f8260b5' => 
    array (
      0 => 'tpl\\class web\\index\\banner.html',
      1 => 1424252204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3308551a86bce801a0-59865132',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551a86bce801a0_07057350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551a86bce801a0_07057350')) {function content_551a86bce801a0_07057350($_smarty_tpl) {?><!DOCTYPE html>
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
