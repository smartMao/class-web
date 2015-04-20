<?php



class albumModel{

	public $_tableName3 = 'album_cover';
	public $albumPath = 'albumCover/';
	public $albumName = ''; // 保存相册封面的path
	private $albumFolderName = 'albumFolderTest';
	private $albumFolderPath = '';
	private $albumID = '';


//  展示相册列表页
	public function albumList(){
		$sql = "SELECT id,username,title,time,power,browseNum,commentNum,`path` FROM $this->_tableName3";
		$res = DB::findAll($sql);
		
		return $res;
	}







// 	创建相册操作
	public function albumCreateOp($POST,$FILES){

		// 检查相册名是否为空
		if(!$this -> checkPostEmpty($POST)){
			return 8;
		}

		$fileInfo = $FILES['albumCover'];

		$fileName  = $fileInfo['name'];
		$fileType  = $fileInfo['type'];
		$fileTemp  = $fileInfo['tmp_name'];
		$fileError = $fileInfo['error'];
		$fileSize  = $fileInfo['size'];

		//$movePath = 'E:/XAMPP/htdocs/test/testImg/'.$fileName;
		//  检查文件上传的错误号
		$checkrRes = $this -> checkFilesUploadError($FILES); 
		
		// 如果检测到 $checkrRes 有错误号返回,证明文件上传错误
		if(is_numeric($checkrRes)){

			return $checkrRes; // 把错误号返回出去
		}

		$composeInsertArr = $this -> composeInsertArr($POST,$FILES);
		
		$insertRes = DB::insert($this->_tableName3,$composeInsertArr);
		// 返回新创建的ID号

		if(is_numeric($insertRes)){

			// 根据新相册创建返回的Id , found新的文件夹 格式为: id_2015-04-16
			if( $this->foundAlbumFolder($insertRes) ){
				return 10;  // 文件夹创建成功
			}else{
				return 12;  // 失败
			}
			
		}else{
			return 11; // 添加相册不成功,可能是相册名相同
		}
	}


/*	
	调用处：拆分于本类中的 albumCreateOp
	作用:检查上传的POST数据是否为空
*/
	public function checkPostEmpty($POST){

		if(!empty($POST['albumName'])){
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

		$fileInfo = $FILES['albumCover'];

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
	public function composeInsertArr($POST,$FILES){

		$userInfo = M('auth')->getauth();

		date_default_timezone_set('PRC');
		$time = date('Y-m-d');

		$fileInfo = $FILES['albumCover'];

		$fileName  = $fileInfo['name'];
		$fileTemp  = $fileInfo['tmp_name'];
		$fileError = $fileInfo['error'];
		$path      = $this->albumPath.$this->albumName;

		$albumArr['id']          = '';
		$albumArr['uid']         = $userInfo['id'];
		$albumArr['username']    = $userInfo['userName'];
		$albumArr['title']       = $POST['albumName'];
		$albumArr['time']        = $time;
		$albumArr['power']		 = $POST['albumPower'];
		$albumArr['description'] = $POST['albumDescription'];
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

			$image = $imgCreate($imgSrc); // 把图片保存在内容当中

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

		$newFolder = mkdir( $folderName , 0777 , true );
		chmod( $folderName , 0777 );

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
		if(empty($_POST['albumName'])){ return 2; }
	
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
		
			$sql = "SELECT `path` FROM $this->_tableName3 WHERE $this->albumID";
			$res = DB::findOne($sql);

			$OPImgRes = $this->OPImgSize( $_FILES['myFile']['tmp_name']); // 返回 t / f

			if($OPImgRes){

				if(unlink($res['path'])){

					$updateArr['path'] = $this->albumPath.$this->albumName;
					// 更新数据库的相册封面path
					$res = DB::update($this->_tableName3 , $updateArr , $this->albumID);
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

			$res = DB::update($this->_tableName3 , $updateArr , $this->albumID);  // t / f
			
			if($res){
				return 1;
			}else{
				return 5;
			}

	}


//  相册删除操作 
	public function albumDel(){

		$this->albumID = $_GET['id'];
		
		if( $this->albumFolderDel() ){ // 删除相册文件夹
			
			if( $this->albumCoverDel()){   // 删除相册封面图片
				DB::del( $this->_tableName3 , $this->albumID ); // 向数据库删除该条数据
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
			if( unlink( './' . $path )){
				return true;
			}else{
				return false;
			}
			

		}


}


?>