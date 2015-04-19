<?php
header("Content-type: text/html; charset=utf-8");
session_start();
//  上面两个不是重点,只是设置编码和session开启,下面的才是重点.

/* 	入口文件	
		1.调用配置文件
		2.调用微型框架
		3.启动框架引擎	
*/
	require_once('config.php'); // 这里面包含着 数据库 与 视图 的配置信息.
	require_once('framework/pc.php'); // 引入启动引擎,里面包含着 run($config) 方法
	PC::run($config); // 这个参数 $config 是 config.php 里面的一个数组

?>