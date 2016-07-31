<?php
	//  启动引擎


	$currentdir = dirname(__FILE__);
	echo $currentdir;  // 获取当前目录的地址 例如：C:\xampp\htdocs\www\framework
	//include_once($currentdir."/include.list.php"); // 清单文件
/*	foreach ($paths as $path) {
		//include_once($currentdir."\\".$path); 	// 每次循环抛出$paths的数组存的地址
		echo $currentdir;
		echo "<br/>";
ASDASDAS
		echo $path;啊 acc
		1
		p2222
		333
		444
		asd
		asdasd
		asdas
		dasd
	}*/

	//  以上的代码就引入了require清单里的所有文件

class PC{
	public static $controller;
	public static $method;
	public static $config;

	public static function init_db(){
		DB::init('mysql',self::$config['dbconfig']);
	}

	public static function init_view(){
		VIEW::init('Smarty',self::$config['viewconfigs']);
	}

	private static function init_controller(){
		self::$controller = isset($_GET['controller'])?daddslashes($_GET['controller']):"index";
		
		// 如果有url设置了controller,那么就使用url上面的,如果没有,那就使用默认的.
	}

	private static function init_method(){
		self::$method = isset($_GET['method'])?daddslashes($_GET['method']):"index";
	}

	public static function run($config){
		self::$config = $config;
		self::init_db();
		self::init_view();
		self::init_controller();
		self::init_method();
		C(self::$controller,self::$method);
		/* 这就是启动引擎.
				他的作用是
					1.init(); 完成数据库的配置
					2.init_view(); 视图引擎的初始化.例如设置“ { ” 什么的、
					3.init_controller(); 获取当前url上有没有控制器,如果有,那就使用他当前的,如果没有,			   										那就使用我们给的'index'控制器(即首页)
					4.init_method(); 同上
					
					5.C($controller,$method); 	(1). 将控制器引入进来.
												(2). 对控制器进行实例化.
												(3). 执行控制器里边的方法
		*/
	}


}



?>