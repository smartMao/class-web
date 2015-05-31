<?php
/*
	配置文件
		1.数据库配置信息
		2.视图引擎配置信息

*/
	$config = array(
		
		//2.视图引擎配置信息
		'viewconfig' => array(
			'left_delimiter'  => '{',
			'right_delimiter' => '}',
			'template_dir'    => 'tpl',
			'compile_dir'     => 'data/template_c',
			'compile_locking' => 'false',// 该选项用于禁止同一时间内对同一模版进行多次编译，默认为true，如果要禁用次功能，设置值为false。
			'force_compile'  => 'true' // 每次请求都会强制重新生成编译文件, 开发过程中打开
		),

		// 本地数据库配置
		'dbconfig' => array(
			'dbhost' => 'localhost',
			'dbuser' => 'root',
			'dbpsw'  => '',
			'dbname' => 'webclass',
			'dbcharset' => 'utf8'
		)

		//1.数据库配置信息
		/*'dbconfig' => array(
			'dbhost' => 'qdm163237324.my3w.com',
			'dbuser' => 'qdm163237324',
			'dbpsw'  => 'dsiellbimysql',
			'dbname' => 'qdm163237324_db',
			'dbcharset' => 'utf8'
		)*/



	);



?>