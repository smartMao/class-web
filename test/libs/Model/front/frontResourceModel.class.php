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




} 




?>