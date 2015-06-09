<?php

class userModel{

	private $_tableName1 = 'article_info';
	private $_tableName2 = 'user_info';
	private $_tableName3 = 'album_cover';
	private $_tableName4 = 'photo_content';
	private $_tableName5 = 'resource_info';


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
	public function userInfoChangeWork( $POST , $GET ){

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
		//$this->userDelFolder( $id ); exit; 
		     

		 // 其实这里不应该是把数据都删除的, 应该是 在 user_info 表中弄个状态 叫做登录状态
		//  应该是封号 而不是 删除用户

		$this->userDelArticle( $id );  // 用户删除连带 删除该用户发表的文章
		$this->userDelAlbum( $id );    // 用户删除连带 删除该用户发表的相册
		$this->userDelResource( $id ); // 用户删除连带 删除该用户发表的资源
									// 用户删除连带 删除该用户的发表的评论
									// 用户删除连带 删除该用户的发表的回复



	 	if( $this->userDelFolder( $id ) ){

			$sql = "DELETE FROM $this->_tableName2  WHERE id=$id";
			$DbDelRes = DB::query($sql);

			if( $DbDelRes ){
				return true; // 删除成功
			}else{
				return false;
			}

		}else{
			return false;
		}

	}




/*  
	调用处: userDel()
	作用: 用户删除连带 删除该用户发表的文章
*/
	public function userDelArticle( $uid ){

		$sql = "DELETE FROM $this->_tableName1 WHERE uid=$uid";
		$res = DB::query($sql);
		return $res; //  返回 t / f
		
	}

/*  
	调用处：userDel()
	作用: 用户删除连带 删除该用户发表的相册
*/
	public function userDelAlbum( $uid ){

		$sql = "SELECT id FROM $this->_tableName3 WHERE uid=$uid";

		$res   = DB::findAll( $sql );
		$count = count( $res );

		if( empty($res) ){ return false; }  // 如果删除用户时, 该用户并没有发布过相册的话, 就不用执行下面

		for( $i=0; $i<$count; $i++ ){

			$albumID = $res[$i]['id'];
			//  从其他模型里,调用删除相册的功能模块
			M('album','backPhoto')->albumDel( $albumID );  // 传入当前要删除的相册ID 
		}
	}

/*  
	调用处: userDel();
	作用: 用户删除连带 删除该用户发表的资源
*/
	public function userDelResource( $uid ){
		$sql = "DELETE FROM $this->_tableName5 WHERE uid=$uid";
		$res = DB::query( $sql );
	}




/* 
	调用处: 本类中: userDel();
	作用：根据 id 删除该用户保存在 ‘头像文件夹’  中的头像文件
*/
	public function userDelFolder( $id ){
		$sql = "SELECT photo FROM $this->_tableName2 WHERE id=$id";
		$res = DB::findOne( $sql );

		if( $res['photo'] == 'pictureGroup/userPhotoFolder/defaultPhoto.jpg' ){
			// 如果当前要删除的用户 的头像时默认头像的话, 那就不用删除这个默认的头像文件
			return true;
		}
		
		if( unlink( $res['photo'] ) ){ // 删除该用户的 头像文件
			return true;
		}else{
			return false;
		}

	}

}






?>