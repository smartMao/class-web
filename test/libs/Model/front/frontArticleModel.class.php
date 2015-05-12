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



/*
	调用处: frontInfoController 的 readArticle()
	作用: 根据 id 取一条文章的数据,用于点击文章后的进入文章信息页面
*/
	public function getOneArtData(){
		$artID = intval( $_GET['id'] );
		$sql = "SELECT * FROM $this->_tableName1 WHERE id=$artID";
		$res = DB::findOne( $sql );
		return $res;
	}




}












?>