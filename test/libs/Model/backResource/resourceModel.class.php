<?php

class resourceModel{

	private $_tableName5 = 'resource_info';

	//  后台资源管理模型


//  添加资源链接
	public function addResource(){

		$userInfo = M('auth')->getauth();

		$resourceArr['username']   = $userInfo['userName'];
		$resourceArr['title'] = $_POST['resourceTitle'];
		$resourceArr['link']  = $_POST['resourceLink'];

		$res = DB::insert(  $this->_tableName5 ,$resourceArr);

		return $res;
	}

//  查询出所有的资源链接
	public function resourceData(){
		$sql = "SELECT * FROM $this->_tableName5";
		$res = DB::findAll( $sql );

		return $res;
	}

//  根据id查询出单条数据
	public function getResourceOneData(){
		$resouceID = intval( $_GET['id'] );
		$sql = "SELECT * FROM $this->_tableName5 WHERE id=$resouceID";
		$res = DB::findOne( $sql );
		
		return $res;
	}

//  资源链接的修改操作
	public function resourceModifyOP(){

		$whereID = 'id='.$_POST['resourceID'];

		$modifyArr['title'] = $_POST['resourceTitle'];
		$modifyArr['link']  = $_POST['resourceURL']; 

		$res = DB::update( $this->_tableName5 , $modifyArr ,  $whereID );
		return $res;
	}

//  资源链接的删除操作
	public function resourceDel(){
		
		$resourceID = intval( $_GET['id'] );
		$res = DB::del( $this->_tableName5 , $resourceID );
		return $res;
	}


}




?>