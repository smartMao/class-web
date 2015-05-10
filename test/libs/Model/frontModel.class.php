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
				FROM $this->_tableName3  order by id desc LIMIT $zero,6";

		$albumData = DB::findAll($sql);

		if( $albumData == ''){ return false; } // 如果当前并没有相册

		$albumData = $this->addUserInfo( $albumData ); // 把相册上传者的信息 存进 $albumData数组里,再返回
	
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



/*
	调用处: albumContent 的 search 方法
	作用：用于前端相册页面albumIndex.html的相册搜索
*/
	public function search( $CurrentPage ){

		if( isset($_POST['search']) ){ 
			// 当$_POST['search']搜索框有值的时候,把这个搜索框的值存进session,用来相册的翻页使用
			// 当用户搜索相册的时候,搜索到的相册,如果有2页或更多的话,就会有翻页,$_POST的值,一翻页就清空了,
			// 所以要用SESSION存着,让第二页可以知道用户搜索的值
			$searchText = @mysql_real_escape_string( $_POST['search'] );
			$_SESSION['searchText'] = $searchText;
		}else{
			$searchText = $_SESSION['searchText'];
		}

		$zero = $CurrentPage * 6;
		$zero = $zero - 6;

		$titleSql = "SELECT id,uid,username,title,time,browseNum,commentNum,`path` FROM $this->_tableName3
		 WHERE title LIKE '%$searchText%' LIMIT $zero,6";
		$titleRes = DB::findAll( $titleSql );

	// 搜索的值,在title字段里有
		if( $titleRes ){ 

			$titleRes = $this->addUserInfo( $titleRes );
			return $titleRes; // 搜索到了title
		}

		$usernameSql = "SELECT id,uid,username,title,time,browseNum,commentNum,`path` FROM $this->_tableName3 
		WHERE username LIKE '%$searchText%' LIMIT $zero,6";
		$usernameRes = DB::findAll( $usernameSql );

    // 搜索的值,在username字段里有
		if( $usernameRes ){ 

			$usernameRes = $this->addUserInfo( $usernameRes );
			return $usernameRes; // 搜索到了username
		}
	 
		return '';  // 没有找到搜索的值
	}


/*
	调用处: headerController 的 albumIndex()  /  albumController 的 search()
	作用: 调用分页类 ,  在相应的页面上显示页数
*/
	public function pager( $albumNum = null ){
		
		if(!$albumNum){ $albumNum = $this->albumDataNum(); } // 相册数量
		
		// 相册分页
		
		include_once 'libs/Model/pager.class.php';  
		$CurrentPage = isset( $_GET['page'] ) ? $_GET['page'] : 1 ;   

 		$myPage = new pager( $albumNum ,intval($CurrentPage) );    
  		$pageStr['pageStr'] = $myPage->GetPagerContent();  //  直接  echo $pageStr['pageStr'] 就是分页
  		return $pageStr;
	}


/* 
	调用处：本类中的 findAllAlbumData() /  search()
	作用:  传入数组数据 $albumData 把 上传这个相册的用户信息也加进这个数组里
*/
	public function addUserInfo( $albumData ){

		$albumNum = count($albumData);

		for($i=0; $i<$albumNum; $i++){
			
			$uid = $albumData[$i]['uid'];

			// 取出上传该相册的用户头像和用户名
			$userSQL = "SELECT photo,userName FROM $this->_tableName2 WHERE id=$uid";

			$userData[] = DB::findAll($userSQL);

			$albumData[$i]['username'] = $userData[$i][0]['userName'];  // 把用户数据加入相册数据
			$albumData[$i]['photo']    = $userData[$i][0]['photo']; 
			$albumData[$i]['titleLength'] = strlen($albumData[$i]['title']);
		}

		return $albumData; // 追加好用户信息后的 相册数组
	}

/*
	调用处：albumController 的 search()
	作用: 查询出当前搜索的相册的数量 (只查询搜索的title/username , 不是总数量)(用于给pager做页数, )
*/
	public function selectSearchNum(){
		$searchText = $_SESSION['searchText'];

		$titleSql   = "SELECT count(id) FROM $this->_tableName3 WHERE title LIKE '%$searchText%'";
		$titleRes   = DB::findAll( $titleSql );
		$titleCount = intval( $titleRes[0]['count(id)'] );
		
		$usernameSql   = "SELECT count(id) FROM $this->_tableName3 WHERE username LIKE '%$searchText%'";
		$usernameRes   = DB::findAll( $usernameSql );
		$usernameCount = intval( $usernameRes[0]['count(id)'] );

		if( $titleCount > $usernameCount ){
			return $titleCount;
		}else{
			return $usernameCount;
		}	
	}



/*
	调用处：headerContorller 中的 albumIndex()
	作用: 相册页面的 相册动态
*/
	public function albumDynamic(){

		$sql = "SELECT id FROM $this->_tableName3";
		$res = DB::findAll( $sql ); // 取出所有的相册id

		if( empty($res) ){ return $res; }  // 此时相册数据表里没有数据
		
		$maxArr = max($res);
		$maxId = $maxArr['id']; // 找出最大相册id (也代表最新的记录)

		$sql2 = "SELECT username,title,time FROM $this->_tableName3 WHERE id=$maxId";
		$res2 = DB::findOne($sql2); // 取出最新上传相册的信息用于 相册动态显示
		
		return $res2;	
	} 

}




?>