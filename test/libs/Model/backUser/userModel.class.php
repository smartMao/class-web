<?php

class userModel{

	public $_tableName2 = 'user_info';


//  用户列表页的查询操作
	public function userList(){

		$sql = "SELECT * FROM $this->_tableName2";
		$res = DB::findAll($sql);
		return $res;

	}

//  根据id查询出用户详细资料 
	public function userDetails($id){

		$sql = "SELECT * FROM $this->_tableName2 WHERE id=$id";
		$res = DB::findAll($sql);
		return $res;

	}


//  用户信息修改操作
	public function userInfoChangeWork($POST,$GET){

//  将生日拼起来,例如:1997-01-09
		$birthday = $POST['year'].'-'.$POST['month'].'-'.$POST['day']; 
		$POST['birthday'] = $birthday;
//  拼好之后放进新的键值里
//  由于已经拼好就不需要这些散的年月日,删除
		if( isset($POST['year']) && isset($POST['month']) && isset($POST['day'])  ){

			unset($POST['year']);
			unset($POST['month']);
			unset($POST['day']);
			unset($POST['userInfoChange']);

		}
		

	//  取出用户表的表名
		
		$artTableName = $this->_tableName2;

	//  取出用户id

		$userID = 'id='.$GET;

	//update($table,$arr,$where);
		$res = DB::update($artTableName,$POST,$userID);

		if($res){
			return 1;
		}else{
			return 0;
		}

	}


//  用户删除操作
	public function userDel($id){
		
		$sql = "DELETE FROM $this->_tableName2  WHERE id=$id";
		$res = DB::query($sql);
		return $res;

	}




}






?>