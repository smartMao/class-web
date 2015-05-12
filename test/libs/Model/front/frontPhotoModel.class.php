<?php

class frontPhotoModel{

	private $_tableName4 = 'photo_content';

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


}





?>