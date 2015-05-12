<?php

class frontArticleModel{

 	// 前端文章模块


	private $_tableName1 = 'article_info';


/*
	调用处: headerController 的 index()
	作用: 取出文章数据
*/
	public function getArtData(){
		$sql = "SELECT * FROM $this->_tableName1";
		$res = DB::findAll( $sql );
		return $res;
	}




}












?>