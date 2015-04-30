<?php

class frontModel{

	private $_tableName2 = 'user_info';
	private $_tableName3 = 'album_cover';
	private $_tableName4 = 'photo_content';
	// 此模块 为前端模块 , 用于辅助控制器取数据


/*
	调用处: headerController 的 photoIndex 方法
	作用: 查询出所有的相册数据, 给photoIndex.htmL 使用
*/
	public function findAllAlbumData( $CurrentPage ){

		$zero = $CurrentPage * 6; // limit 起点
		$zero = $zero - 6;

		// 查询出所有相册的数据
		$sql = "SELECT `id`,`uid`,`title`,`time`,`power`,`browseNum`,`commentNum`,`path` 
				FROM $this->_tableName3 
				LIMIT $zero,6";
			//echo $sql;exit;
		
		$albumData = DB::findAll($sql);

		if($albumData == ''){ return false; } // 如果当前并没有相册
		
		$albumNum = count($albumData);

		for($i=0; $i<$albumNum; $i++){
			
			$uid = $albumData[$i]['uid'];

			// 取出上传该相册的用户头像和用户名
			$userSQL = "SELECT photo,userName FROM $this->_tableName2 WHERE id=$uid";
			//echo $userSQL;
			//echo "<br/>";
			$userData[] = DB::findAll($userSQL);


			$albumData[$i]['username'] = $userData[$i][0]['userName'];  // 把用户数据加入相册数据
			$albumData[$i]['photo']    = $userData[$i][0]['photo']; 
			$albumData[$i]['titleLength'] = strlen($albumData[$i]['title']);
		}
		//echo "<pre>";
		//var_dump($albumData);
		return $albumData; 
		
	}

/*
	调用处: photoController 的 photoList 方法
	作用: 根据传入进来的相册ID , 往数据表查询此ID下所有的照片
	参数: $albumID : 相册ID
*/
	public function photoList( $albumID ){
		$sql = "SELECT `id`,`path` FROM $this->_tableName4 WHERE cid=$albumID";
		$res = DB::findAll( $sql );
		if($res){
			return $res;
		}else{
			return false;
		}
	
		

	}


/*
	调用处: headerController 的 photoIndex 方法
	作用: 查询出相册数据库的所有数据条数, 用于分页的页数显示
*/
	public function albumDataNum(){
		$sql = "SELECT count(id) FROM $this->_tableName3";
		$res = DB::findOne( $sql );
		return $res['count(id)'];
	}



}




?>