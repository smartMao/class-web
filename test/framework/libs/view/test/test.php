<?php

require('../smarty/Smarty.class.php');
// 因为smarty在上面的引入文件中 已经定义好了类名 他的类名是Smarty

$smarty = new Smarty(); 

// Smarty 的自编口诀 “五配置两方法”
// 五配置的介绍

$smarty->left_delimiter = "{";  // 左定界符
$smarty->right_delimiter = "}"; // 右定界符
$smarty->template_dir = "tpl";  // html模板的地址
$smarty->compile_dir = "template_c"; // 模板编译生成的文件
$smarty->cache_dir = "cache"; // 缓存
/*
	缓存：这个缓存是smarty内置的缓存机制，把PHP运行当中无论是从数据库得出
		  的数据还是运算出来的数据也好统统存放在一个文件里边，那么下一次就无需再从数据库去取数据或者去计算了
*/
$smarty->caching = true;  // 开启缓存
$smarty->cache_lifetime = 120; // 缓存时间

$smarty->assign('articletitle','文章标题');  // 变量赋值 参数1：变量名  参数2：值
$arr = array('title'=>'smarty的学习','author'=>'小明');
$smarty->assign('arr',$arr);
$smarty->assign('mao','ss');
$smarty->assign('time',time());
$smarty->assign('url','http://www.imooc.com/video/1059');
$smarty->assign('name','javascript');
$smarty->assign('score','61');
/*$arr2 = array(
			array(
				'title'=>'第一篇',
				'name'=>'徐志乔',
				'content'=>'内容1'
				),
			array(
				'title'=>'第二篇',
				'name'=>'乔乔',
				'content'=>'内容2'
				)
			);*/
$arr2 = array();
$smarty->assign('info',$arr2);

class myobj{
	function meth1($params){
		return $params[0]."已经".$params[1];
	}
}
$myobj = new myobj();
$smarty->assign('myobj',$myobj);

$smarty->assign('time',time());
$smarty->assign('str','abvd');

function test($params){ 
	$p1 = $params['p1'];
	$p2 = $params['p2'];
	return '传入的参数1值为'.$p1.'，传入的参数2值为'.$p2;
}
$smarty->registerPlugin('function','f_test','test');

/*
$smarty->display('test.tpl'); // 展示方法 ， 参数：模板的地址
echo "<br/>";
$smarty->display('area.tpl');
*/
$smarty->assign('time',time());
$smarty->display('datetime.tpl');

?>