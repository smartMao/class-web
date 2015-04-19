<?php

	class adminModel{  //  从数据库存取数据

		public $_table = 'user_info';// 定义表名

	// 通过用户名,取出用户信息
		public function findOne_by_username($username){
			$sql = 'SELECT * FROM '.$this->_table.' where username="'.$username.'"';
			return DB::findOne($sql);
		}






	}


?>