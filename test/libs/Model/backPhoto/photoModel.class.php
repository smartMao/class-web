<?php

class photoModel{

	private $fileInfo;
	private $fileName;
	private $fileType;
	private $fileTmp;
	private $fileErr;
	private $fileSize;

	private $allowType;
	private $photoDir;
	private $albumID;


//  照片批量上传操作
	public function photoBatchUpload(){

		$this->albumID   = $_POST['albumID'];

		$this->photoDir = $this -> queryFolderPath(); // 返回相册的文件夹路径

		echo "<pre>";

		// 如果等于0,代表上传文件错误,上传文件过大 8M
		if( count($_FILES) == 0 ){ exit('上传文件大于2M,请检查'); }
		
		$fileInfo = $_FILES['files'];
		$fileName = $fileInfo['name']; // 在同时传多文件的时候,$fileName 是一个索引数组
		$fileType = $fileInfo['type'];
		$fileTmp  = $fileInfo['tmp_name'];
		$fileErr  = $fileInfo['error'];
		$fileSize = $fileInfo['size'];

		$allowType = array( 'image/jpg' , 'image/jpeg' , 'image/png' , 'image/gif' );

		$photoDir = $this->photoDir; // 存放上传文件的目录

		$this->fileName  = $fileName; // 把文件信息放进类属性里
		$this->fileType  = $fileType;
		$this->fileTmp   = $fileTmp;
		$this->fileErr   = $fileErr;
		$this->fileSize  = $fileSize;
		$this->allowType = $allowType;
	
		if( !file_exists($photoDir) ){ // 如果检测到 $photoDir 目录不存在,那就创建一个
			mkdir( $photoDir , 0777 , true );
			chmod( $photoDir , 0777 );
		}
		
		$count = count($_FILES['files']['name']);

		$i = 0;
		
	 	while( $i < $count ){
			
			if( $fileErr[$i] == 0 ){
				// 四项上传判断,最后移动文件
				$this->imgUploadJudge( $i , $this->albumID );
			}else{
				// 根据文件上传的错误号, switch匹配
				$this->fileErrorSwitch($i);	
			}

			$i++;
		}
	}


/*
	拆分于: 本类中的 photoBatchUpload()
	作用: 四项上传判断 , 最后移动文件
*/
	public function imgUploadJudge( $i , $albumID ){

		// 1
			// 判断上传类型
			if( !in_array( $this->fileType[$i] , $this->allowType ) ){ // 如果上传的文件类型错误
				exit('上传文件的类型错误');
			}

		// 2
			// 判断上传方式是否为 HTTP POST
			if( !is_uploaded_file($this->fileTmp[$i]) ){ // 根据临时路径查到上传的文件不是POST方式上传的
				exit('文件不是通过HTTP POST方式上传的!!!');
			}

		// 3
			// 判断是否为真实的图片类型 (以防用户直接重命名文件成jpg的)
			if( @getimagesize($this->fileTmp[$i]) ){
				echo "1";
			}else{
				exit($this->fileName[$i].'不是真实的图片类型,请换张图片');
			}
			

		// 4
			$photoMd5    = $albumID .'_'. md5(uniqid()); // 这里的'id'替换为数据库对应相册的id
			$photoSuffix = '.'.pathinfo( $this->fileName[$i] , PATHINFO_EXTENSION ); //取出文件后缀,大概输出:.jpg
			
			// 通过了上面的上传方式的检测
			// 执行移动文件 move_uploaded_file() "只能移动通过POST方式上传的文件(其他方式上传的不能移动)"

			if( move_uploaded_file( $this->fileTmp[$i] , $this->photoDir . $photoMd5 . $photoSuffix )){
				echo $this->fileName[$i]."上传成功<br/>";
			}else{
				echo $this->fileName[$i]."上传失败<br/>";
			}
	}



/*	
	拆分于: 本类中 photoBatchUpload()
	作用: 根据文件上传的错误号, switch 匹配
*/
	public function fileErrorSwitch($i){

		switch($this->fileErr[$i]){
			case 1:
				echo "<script>alert('上传文件超过了PHP配置文件中的upload_max_filesize选项的值')</script>";
				return;
				break;
			case 2:
				echo "<script>alert('超过了表单MAX_FILE_SIZE限制的大小')</script>";
				return;
				break;
			case 3:
				echo "<script>alert('部分文件被上传')</script>";
				return;
				break;
			case 4:
				echo "<script>alert('没有选择上传文件')</script>";
				return;
				break;
			case 6:
				echo "<script>alert('没有找到临时目录')</script>";
				return;
				break;
			case 7:
			case 8:
				echo "<script>alert('系统错误')</script>";
				return;
				break;
		}

	}
	

//  SELECT出当前相册存放照片的文件夹
	public function queryFolderPath(){
		$sql = "SELECT folderPath FROM album_cover WHERE id=$this->albumID";
		$res = DB::findOne($sql);
		return $res['folderPath'];

	}




}




?>