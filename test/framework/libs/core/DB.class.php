<?php

class DB{ // 类名在PHP里面是一个全局变量 (全局变量在任何地方都可以使用,包括函数体内)
		// 静态关键字的好处是 在全局 可以直接 DB::$db;这样去调用属性或方法

	public static $db; // 此静态属性用来保存数据库操作类产生的对象 

/*
	参数1：$dbtype 我要实例化的数据库的操作的类型. 例如是:mySQL、SQL Server 等
	参数2：$config 对数据库配置的信息
*/
	public static function init($dbtype,$config){
		self::$db = new $dbtype; // 实例化出数据库操作类,并保存在$db这个属性里
		self::$db -> connect($config);  // 使用数据库操作类中的连接方法并传入参数
	}

	public static function query($sql){
		return self::$db -> query($sql);
	}

	public static function findAll($sql){
		$query = self::$db -> query($sql);
		return self::$db -> findAll($query);
	}

	public static function findOne($sql){
		$query = self::$db -> query($sql);
		return self::$db -> findOne($query);
	}

	public static function findResult($sql,$row=0,$filed=0){
		$query = self::$db -> query($sql);
		return self::$db -> findResult($query,$row,$filed);
	}

	public static function insert($table,$arr){
		return self::$db -> insert($table,$arr);
	}

	public static function update($table,$arr,$where){
		return self::$db -> update($table,$arr,$where);
	}

	public static function del($table,$where){
		return self::$db -> del($table,$where);
	}
}


?>