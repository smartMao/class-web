<?php

class mysql{
/*
	报错函数 
	@参数：输入字符串 $error
*/
	function err($error){
		die("错误原因为：".$error);
		//die有两种作用 输出和终止，相当于echo和exit的组合
	}


/*
	连接数据库
	@参数：数组 $config,配置数组array($dbhost,$dbuser,$dbpaw,$dbname,$dbcharset)
	@返回: bool 连接成功或不成功
*/
	function connect($config){
		extract($config); // 把传进来的$config数组,按照key=变量名,value=变量值,的方式转换为一个个变量.
		if(!($con = mysql_connect($dbhost,$dbuser,$dbpsw))){ // 如果连接数据库不成功
			$this -> err(mysql_error());
		}
		if(!mysql_select_db($dbname,$con)){ 
			$this -> err(mysql_error());
		}
		mysql_query("set names ".$dbcharset);
	}

/*
	执行sql语句
	@参数：$sql
	@返回：bool 返回执行成功、资源或执行失败
*/
	function query($sql){
		if(!($query = mysql_query($sql))){ // 使用mysql_query()执行sql语句时，如果出错
			//$this -> err($sql."<br/>".mysql_error());
			return false;
		}else{
			return $query;
		}
	}

/*
	取全部数据
	@参数：$query  sql语句通过mysql_query执行出来的资源标示符
	@返回：array 返回数据列表
*/
	function findAll($query){
		while($res = mysql_fetch_array($query,MYSQL_ASSOC)){
		//mysql_fetch_array函数把资源转换为数组,一次转换出一行出来.
			$list[] = $res;
		}
		return isset($list)?$list:"";
	}

/*
	去单条数据
	@参数：$query  sql语句通过mysql_query执行出来的资源标示符
	@返回：array 返回单条数据信息
*/	
	function findOne($query){
		$res = mysql_fetch_array($query,MYSQL_ASSOC);
		return $res;
	}

/*
	指定行的指定字段值
	@参数：$query sql语句通过mysql_query执行出来的资源
	@返回：array 指定行的指定值
*/
	function findResult($query,$row=0,$field=0){
		$res = mysql_result($query, $row,$field);
		return $res;
	}

/*
	添加函数
	@参数1：string $table 表名
	@参数2：array $arr 添加数组(包含字段和值的一维数组)
	@返回 插入语句在数据库的id
*/
	function insert($table,$arr){
		foreach($arr as $key => $value){
			$value = mysql_real_escape_string($value);
			$keyArr[] = "`".$key."`";  //   " ` "之所以加上这个符号,是防止字段里有关键字,防止出错.
			$valueArr[] = "'".$value."'";
		}
		$keys = implode(',',$keyArr); // implode函数把数组组合成用逗号分隔的字符串
		$values = implode(',',$valueArr);
		$sql = "INSERT INTO ".$table."(".$keys.") VALUES(".$values.")";
		$res = $this->query($sql);
		if(!$res){
			return $res;
		}
		
		return mysql_insert_id(); // 返回这条插入语句插入在数据库的id
	}

/*
	修改函数
	@参数1：string $table 表名
	@参数2：array  $arr   修改数组 (包含字段和值的一维数组)
	@参数3：string $where 条件
*/
	function update($table,$arr,$where){
		foreach($arr as $key => $value){
			$value = mysql_real_escape_string($value);
			$keyAndvalueArr[] = "`".$key."`='".$value."'";
		}
		$keyAndvalues = implode(',',$keyAndvalueArr);
		$sql = "UPDATE ".$table." SET ".$keyAndvalues." WHERE ".$where;
		$res = $this -> query($sql);

		return $res;
	}



	function del($table,$where){

		$sql = 'DELETE FROM '.$table.' WHERE id='.$where;
		return $this -> query($sql);

	}


}

?>