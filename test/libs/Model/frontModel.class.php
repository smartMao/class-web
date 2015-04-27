<?php

class frontModel{

	private $_tableName2 = 'user_info';
	private $_tableName3 = 'album_cover';
	// 此模块 为前端模块 , 用于辅助控制器取数据


/*
	调用处: headerController 的 photoIndex 方法
	作用: 查询出所有的相册数据, 给photoIndex.htmL 使用
*/
	public function findAllAlbumData(){

		// 查询出所有相册的数据
		$sql = "SELECT `uid`,`title`,`time`,`power`,`browseNum`,`commentNum`,`path` FROM $this->_tableName3";
		
		$albumData = DB::findAll($sql);
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
	调用处: headerController 的 photoIndex 方法
	作用: 根据传入进来的 用户id ,把他的头像路径取出
	参数: $userID : 用户ID
*/
	/*public function findUserPhotoPath( $userID , $i ){
		
	
	
			$sql = "SELECT photo FROM $this->_tableName2 WHERE id=$userID";
			echo $sql;
			echo "<br/>";
		
		

	}*/




}




?>