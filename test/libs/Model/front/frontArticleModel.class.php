<?php

class frontArticleModel{

 	// 前端文章模块

	private $_tableName1 = 'article_info';


/*
	调用处: headerController 的 index()
	作用: 取出文章数据
	参数: page 页数
*/
	public function getArtData( $page ){	

		$action = $page * 15 - 15; // 根据当前的 $page 计算出从哪里开始取数据

		$sql = "SELECT `id`,`uid`,`title`,`author`,`time`,`content` FROM $this->_tableName1 
		 ORDER BY id DESC limit $action,15";
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


/*
	调用处 ：本类的 pager()
	作用: 取文章的总条数
*/
	public function articleDataNum(){
		$sql = "SELECT count(id) FROM $this->_tableName1";
		$res = DB::findOne($sql);							
		$count = intval($res['count(id)']);
		return $count;
	}


}












?>