<?php



class albumModel{

	private $_tableName3 = 'album_cover';
	private $_tableName4 = 'photo_content';
	private $albumPath   = 'pictureGroup/albumCover/'; // 保存相册封面图的文件夹路径
	private $albumName   = ''; // 保存相册封面的path
	private $albumFolderName = 'pictureGroup/albumFolder'; // 相册文件夹路径
	private $albumFolderPath = '';
	private $albumID     = '';
	private $albumDefaultCover = 'pictureGroup/albumCover/albumDefault.png'; // 默认相册封面图片


//  展示相册列表页
	public function albumList(){
		$sql = "SELECT id,username,title,time,power,browseNum,commentNum,`path` 
		FROM $this->_tableName3 order by id desc";
		$res = DB::findAll($sql);
		
		return $res;
	}



// 	创建相册操作
	public function albumCreateOp(){
		//var_dump($POST);exit;

		// 检查相册名是否为空
		if( !$this -> checkPostEmpty() ){ return 2; }

		 // 检查上传相册的相册名长度是否大于25个中文字符
		if( !$this->checkPostAlbumName() ){ return 3; }

		$composeInsertArr = $this -> composeInsertArr();
		
		$insertRes = DB::insert( $this->_tableName3 , $composeInsertArr );
		// 返回新创建的ID号

		if( is_numeric( $insertRes ) ){ 

			// 根据新相册创建返回的Id , found新的文件夹 格式为: id_2015-04-16
			if( $this->foundAlbumFolder( $insertRes ) ){
				return 1;  // 文件夹创建成功
			}else{
				return 4;  // 失败
			}
			
		}else{
			return 5; // 添加相册不成功,可能是相册名相同
		}
	}

/*  
	调用处：backController 中的 albumCoverChange()
	作用: 
*/
	public function albumCoverChange(){

		// 相册封面图片处理
		// 接收到图片后
		/*  
			1. 把图片重新命名, 并移动到 albumCover/ 文件夹下
			2. 取出当前的相册封面路径
			2. 删除当前的相册封面图片
			3. 更新相册数据库的封面图片记录
		*/

		//$this->moveAlbumCover();exit;
		//getOldCoverPath();
		//delOldAlbumCover();
		//updateAlbumCoverPath();
		$this->albumID = $_POST['albumID'];
		$newPath = $this->moveAlbumCover();

		if( $newPath ){

			$nowPath = $this->getOldCoverPath();

			if( $nowPath == $this->albumDefaultCover ){
				// 当前相册封面图是默认的相册封面图, 则不删除, 只更新数据库数据
				$this->updateAlbumCoverPath( $newPath );
				
			}else{
				// 当前的相册封面不是默认的, 要删除, 也要更新数据库

				$this->delOldAlbumCover( $nowPath );
				$this->updateAlbumCoverPath( $newPath );
			}
		}
		
	}


/*  
	调用处: 本类中 albumCoverChange()
	作用: 更新相册数据库的 path 封面路径字段
*/	
	public function updateAlbumCoverPath( $newPath ){

		$dataArr['path'] = $newPath;  //  需要更新的数据
		$where = "id=$this->albumID";

		$res = DB::update( $this->_tableName3 , $dataArr , $where );
		if( $res ){
			return true;
		}else{
			return false;
		}
	}







/*  
	调用处: 本类中 albumCoverChange()
	作用: 删除当前的相册封面图文件.
*/	
	public function delOldAlbumCover( $nowPath ){

		if( unlink( $nowPath ) ){
			return true; 
		}else{
			return false;
		}
	}






/*  
	调用处: 本类中 albumCoverChange()
	作用 :  把上传来的临时图片移动到 albumCover/ 文件夹下, 并重新命名
*/
	public function moveAlbumCover(){

		$randNumFileName = uniqid(true); // 用于命名相册封面图的随机数

		$arr    = explode('.', $_FILES['file']['name']  );
		$suffix = strtolower( $arr[ count( $arr ) -1] ); // 取到图片文件后缀

		// 目标目录
		$fileName =  $this->albumPath . $randNumFileName . '.' . $suffix;
		var_dump($fileName);
		// 临时目录
		$tmp_name = $_FILES['file']['tmp_name'];

		if( rename( $tmp_name , $fileName ) ){
			return $fileName;
		}else{
			return false;
		}
	}


/*  
	调用处: 本类中 albumCoverChange()
	作用: 取出当前的相册封面图的路径
*/
	public function getOldCoverPath(){

		$sql  = "SELECT `path` FROM $this->_tableName3 WHERE id=$this->albumID ";
		$res  = DB::findOne( $sql );

		return $res['path'];
	}



/*	
	调用处：拆分于本类中的 albumCreateOp
	作用:检查上传的POST数据是否为空
*/
	public function checkPostEmpty(){
		
		if( !empty( $_POST['albumName'] ) ){
			return true;
		}else{
			return false;
		}

	}

		
/*	
	调用处：拆分于本类中的 albumCreateOp
	作用:检测文件上传时的错误号(这里是检测上传的封面图片)
*/
	public function checkFilesUploadError($FILES){

		$fileInfo = $FILES['file'];

		// 注意:这里的文件名编码格式要从utf-8转换为gb2312,不然文件名会乱码
		$fileName  = iconv('utf-8','gb2312',$fileInfo['name']);
		$fileType  = $fileInfo['type'];
		$fileTemp  = $fileInfo['tmp_name'];
		$fileError = $fileInfo['error'];
		$fileSize  = $fileInfo['size'];

		if($fileError == UPLOAD_ERR_OK){
			
			// 文件上传无错误后,还需把上传的图片缩小到符合相册封面的尺寸
			
			if($this -> OPImgSize($fileTemp)){

				// 相册封面 W H 修改成功
				return true;

			}else{

				// 相册封面 W H 小于 W:295  H:210
				return 9;
			}

		}else{

			// 如果不为 0 ,再让switch匹配错误号
			switch($fileError){
				case 1:
					return 1;
					break;

				case 2:
					return 2;
					break;

				case 3:
					return 3;
					break;

				case 4:
					return 4;
					break;

				case 6:
					return 6;
					break;

				case 7:
				case 8:
					return 7;
					break;
			}
		}
	}


/*
	调用处:拆分于本类中的 albumCreateOp
	作用:合成创建相册所需的数据,产生新的数组,供插入数据库使用
*/
	public function composeInsertArr(){

		date_default_timezone_set('PRC');


		$userInfo = M('auth')->getauth();
		$time     = date('Y-m-d');
		$path     = 'pictureGroup/albumCover/albumDefault.png'; // 默认相册封面图

		$albumArr['id']          = '';
		$albumArr['uid']         = $userInfo['id'];
		$albumArr['username']    = $userInfo['userName'];
		$albumArr['title']       = $_POST['albumName'];
		$albumArr['time']        = $time;
		$albumArr['power']		 = $_POST['albumPower'];
		$albumArr['description'] = $_POST['albumDescription'];
		$albumArr['browseNum']   = '';
		$albumArr['commentNum']  = '';
		$albumArr['path']        = $path;
	
		return $albumArr;
	}


/*
	调用处: 本类中的 checkFilesUploadError ()  and   本类中的 albumEditOP ()
	作用:检测和修改图片的大小 （相册封面图片）
*/
	public function OPImgSize($tmp_name){

		$imgSrc  = $tmp_name;

		$imgInfo = getimagesize($imgSrc);

		$imgWidth   = $imgInfo[0];
		$imgHeight  = $imgInfo[1];
		$imgTypeNum = $imgInfo[2];
		$imgMime    = $imgInfo['mime'];
		
		if( $imgWidth >= 295 && $imgHeight >= 210 ){

			// 把图片修改为 W:295 H：210
			
			$imgType = image_type_to_extension($imgTypeNum , false); // 返回图片后缀(没有 "." )

			$imgCreate = "imagecreatefrom{$imgType}"; // 根据不同的图片类型,创建不同的图像

			$image = $imgCreate($imgSrc);// 把图片保存在内容当中

			//  操作图片

			$imgBox = imagecreatetruecolor( 295 , 210 ); // 创建一个真色彩图像容器 W:295 H:210

			imagecopyresampled($imgBox , $image , 0 , 0 , 0 , 0 , 295 , 210 , $imgWidth , $imgHeight );

			//imagecopyresampled说明: 把上传的图片,放进 W:295 H:210 的图像盒子里, 无论上传的图片有多大都不能超出 图像盒子的 W 和 H

			imagedestroy($image); // 上传来的图片已经放入图像盒子里,所以没用了,销毁

			//  输出图片

			//header("Content-type:".$imgMime);

			$imgOutput = "image{$imgType}"; // 根据不同的图片类型,使用不同的输出函数

			//$imgOutput($imgBox); // (假如图片类型是png) 这里等同于: imagepng($imgBox);

	
			$randNumFileName = uniqid(true);  //生成一个唯一ID (可理解为随机数)

			$imgOutput($imgBox , $this->albumPath.$randNumFileName.".". $imgType ); 
			// 上传的相册封面图片被处理好 W:295 H:210 保存在testImg文件夹下
		
			$albumName = $randNumFileName.".".$imgType;
			$this->albumName = $albumName; // 将保存好的图片文件名保存在$photoName上(给insert数组调用)
			
			//  销毁图片
			imagedestroy($imgBox);

			return true;

		}else{
			// 待修改
			return false;
		}

	}

/*
	调用处: 本类中的 albumCreateOp()
	作用: 利用 新建相册后插入数据库后返回的id, 来创建这个相册的专属文件夹, 格式: id_2015-00-00 
	参数：新建相册的id
*/
	public function foundAlbumFolder($id){

		date_default_timezone_set('PRC');

		$date = date('Y-m-d');
		$folderName = './'. $this->albumFolderName. '/' .$id . '_' . $date . '/';
	
		$updateArr['folderPath'] = $folderName;
		$updateWhere = 'id='.$id;
		DB::update( $this->_tableName3 , $updateArr , $updateWhere ); // 更新相册数据库中的 folderPath 字段

		$newFolder = mkdir( $folderName , 0755 , true );
		//chmod( $folderName , 0755 );

		return $newFolder;  // 把文件夹创建的结果返回出去, t / f
	}




//  展示相册编辑页
	public function albumEditShow(){
		$this->albumID = $_GET['id'];
		$sql = "SELECT id,title,power,description,`path` FROM $this->_tableName3 WHERE id=$this->albumID";
		$res = DB::findOne($sql);
		return $res;
	}

//  相册编辑页操作 
	public function albumEditOP(){

		$this->albumID = $_GET['id'];

		//  如果相册名为空
		if( empty($_POST['albumName']) ){ return 2; }

		//  如果相册名称长度超过 25 个中文字符
		if( strlen($_POST['albumName']) > 76){ return 6; }
	
		$albumID = 'id='.$this->albumID;

		$fileUploadError = $_FILES['myFile']['error'];

		// 根据文件上传的错误号 判断更新操作

		if( $fileUploadError == 4 ){
			return $this -> updateAlbumData(); // 返回 / 1 / 5
		}

		if( $fileUploadError == 0 ){
			return $this -> updateAlbumDataAndPhoto(); // 返回 / 1 / 3 / 4 / 5
		}

	}


/*
	调用处: 拆分于本类中 albumEditOP
	作用: 既更新相册封面 , 又更新相册数据
*/
	public function updateAlbumDataAndPhoto(){
		
		$sql = "SELECT `path` FROM $this->_tableName3 WHERE id=$this->albumID";
		$res = DB::findOne($sql);
		
		$OPImgRes = $this->OPImgSize( $_FILES['myFile']['tmp_name']); // 返回 t / f

		if( $OPImgRes ){
			
			if( $res['path'] ==  $this->albumDefaultCover ){
				//  如果当前编辑的相册封面 是默认的相册封面, 那就不用删除
				$updateArr['path'] = $this->albumPath.$this->albumName;
				// 更新数据库的相册封面path
				$res = DB::update($this->_tableName3 , $updateArr , 'id='.$this->albumID);

				if($res){
					return 1; // 相册封面 更新成功
				}else{
					return 5; //          更新失败
				}

			}else if( unlink( $res['path'] ) ){

				$updateArr['path'] = $this->albumPath.$this->albumName;
				// 更新数据库的相册封面path
				$res = DB::update($this->_tableName3 , $updateArr , 'id='.$this->albumID);
				//var_dump($res);

				if($res){
					return 1; // 相册封面 更新成功
				}else{
					return 5; //          更新失败
				}

			}else{
				return 4; // 现有的相册封面图片删除失败
			}

		}else{
			return 3; // 上传来的图片 W H 大小 小于 295 210 无法修改
		}

		
	}


/*
	调用处:拆分于本类中 albumEditOP 
	作用: 不更新相册封面 , 只更新相册数据
*/
	public function updateAlbumData(){

			$updateArr['title']       = $_POST['albumName'];
			$updateArr['power']       = $_POST['albumPower'];
			$updateArr['description'] = $_POST['description'];

			$res = DB::update($this->_tableName3 , $updateArr , 'id='.$this->albumID);  // t / f
			
			if($res){
				return 1;
			}else{
				return 5;
			}
	}


//  相册删除操作 
	public function albumDel( $id ){

		$this->albumID = intval($id);
		
		if( $this->albumFolderDel() ){ // 删除相册文件夹
			
			if( $this->albumCoverDel()){   // 删除相册封面图片
				
				DB::del( $this->_tableName3 , $this->albumID ); // 向相册数据库删除该条数据 WHERE id = 
				DB::del2($this->_tableName4 , $this->albumID ); // 向照片数据库删除多条数据 WHERE cid = 

				return 1;
			}else{
				return 2; // 相册封面图片删除失败
			}
			
		}else{
			return 3; // 相册文件夹删除失败
		}

		
	
	}


/*
	调用于: 本类中 albumDel()
	作用: 根据相册id查出相册文件夹,删除
*/

	public function albumFolderDel(){

		$sql = "SELECT folderPath FROM $this->_tableName3 WHERE id=$this->albumID";
		$dir = DB::findOne($sql); // 取出当前要删除的相册文件夹路径
		$dir = $dir['folderPath'];

		$openDir = opendir($dir);

		while($file = readdir($openDir)){ // 循环删除里面的文件. (不能删除文件夹)
			if($file != '.' && $file != '..'){
				if( !is_dir( $dir.$file ) ){ // 检查路径是不是目录, 如果是 t 否则 f
					unlink($dir.$file);
				}
			}
		}

		closedir($openDir); // 关闭文件夹

		if( rmdir($dir) ){ // 删除文件夹
			return true;
		}else{
			return false; // 可能是这个相册文件夹里面 有文件夹
		}
	}



/*
	调用于: 本类中 albumDel()
	作用: 根据相册id查出相册封面图片,删除
*/
		public function albumCoverDel(){
			$sql = "SELECT `path` FROM $this->_tableName3 WHERE id=$this->albumID";
			$res = DB::findOne( $sql );
			$path = $res['path'];

			if( $path == $this->albumDefaultCover ){
				//  如果当前删除的相册的封面图是默认图, 那就不删除, 
				return true;
			}

			if( unlink( './' . $path )){
				return true;
			}else{
				return false;
			}
		}

/*  
	调用处:  本类中的  albumCreateOp()
	作用: 检查当前上传的相册的相册名 长度是否大于25个中文字符 
*/
	public function checkPostAlbumName(){
		$albumLen = strlen( $_POST['albumName'] );
		if($albumLen < 76){ 
			// 符合
			return true;
		}else{
			// 不符合
			return false;
		}
	}


}


?>