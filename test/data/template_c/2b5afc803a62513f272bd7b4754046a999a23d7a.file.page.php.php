<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-30 03:14:39
         compiled from "tpl\class web\classPhoto\page\page.php" */ ?>
<?php /*%%SmartyHeaderCode:19802554181ff648e51-57590875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b5afc803a62513f272bd7b4754046a999a23d7a' => 
    array (
      0 => 'tpl\\class web\\classPhoto\\page\\page.php',
      1 => 1430355162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19802554181ff648e51-57590875',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554181ff64ccd2_14839304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554181ff64ccd2_14839304')) {function content_554181ff64ccd2_14839304($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
<link href="pager.css" type="text/css" rel="stylesheet" />    

</head>
<body>
  <body>    
    <?php echo '<?php'; ?>
    
     include "pager.class.php";    
     $CurrentPage=isset($_GET['page'])?$_GET['page']:1;    
     //die($CurrentPage);    
     $myPage=new pager(1300,intval($CurrentPage));    
      $pageStr= $myPage->GetPagerContent();    
     //echo $pageStr;    
     $myPage=new pager(90,intval($CurrentPage));     
     $pageStr= $myPage->GetPagerContent();    
     echo $pageStr;    
    <?php echo '?>'; ?>
    
</body>  
</body>
</html>
<?php }} ?>
