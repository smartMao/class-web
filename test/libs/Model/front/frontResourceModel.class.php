<?php

class frontResourceModel{

	//  此模块为前端资源链接模块

	private $_tableName5 = 'resource_info';

	public function resourceList(){
		$sql = "SELECT title,link FROM $this->_tableName5";
		$res = DB::findAll( $sql );
		
		if( $res ){
			return $res;
		}else{
			return '';
		}

	}

/*  
	调用处: frontInfoController 中的 articleList()
	作用: 给前端文章列表页面右侧的资源下载提供数据
*/
	public function getResourceData(){
		$sql = "SELECT `title`,`link` FROM $this->_tableName5 ORDER BY id DESC LIMIT 0,10";
		$res = DB::findAll( $sql );
		return $res;	
	}




} 




?>