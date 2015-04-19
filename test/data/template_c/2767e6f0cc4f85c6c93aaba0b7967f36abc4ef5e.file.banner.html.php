<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-02 02:35:00
         compiled from "tpl\class web\index\banner.html" */ ?>
<?php /*%%SmartyHeaderCode:31264551c8eb4842e51-75516308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2767e6f0cc4f85c6c93aaba0b7967f36abc4ef5e' => 
    array (
      0 => 'tpl\\class web\\index\\banner.html',
      1 => 1424252204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31264551c8eb4842e51-75516308',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551c8eb4842e56_70606574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c8eb4842e56_70606574')) {function content_551c8eb4842e56_70606574($_smarty_tpl) {?><!DOCTYPE html>
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
