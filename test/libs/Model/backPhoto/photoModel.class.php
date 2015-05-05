<?php

class photoModel{

	private $_tableName3 = 'album_cover';
	private $_tableName4 = 'photo_content';
	private $fileInfo;
	private $fileName;
	private $fileType;
	private $fileTmp;
	private $fileErr;
	private $fileSize;

	private $fixWidth = 1200; // 根据百分比缩小后的图片宽高
	private $fixHeight = 630;

	private $allowType;
	private $photoDir;
	private $albumID;


//  展示相册里面的所有照片
	public function photoList(){
		
		$this->albumID = $_GET['id'];

		$sql = "SELECT id,`path` FROM $this->_tableName4 WHERE cid=$this->albumID"; // 找出该相册下所有的id和Path
		$idAndPath = DB::findAll($sql);
		
		return $idAndPath;
	}




//  照片批量上传操作
	public function photoBatchUpload(){
	
		$this->albumID  = $_POST['albumID'];
		$this -> queryFolderPath(); // 从数据库取出相册文件夹路径 保存在 $this->photoDir

		// 如果等于0,代表上传文件错误,上传文件过大 8M
		if( count($_FILES) == 0 ){ exit('上传文件大于2M,请检查'); }
		
		$fileInfo = $_FILES['files'];
		//echo "<pre>";
		//var_dump($fileInfo);exit;
		$fileName = $fileInfo['name']; // 在同时传多文件的时候,$fileName 是一个索引数组
		$fileType = $fileInfo['type'];
		$fileTmp  = $fileInfo['tmp_name'];
		$fileErr  = $fileInfo['error'];
		$fileSize = $fileInfo['size'];

		$allowType = array( 'image/jpg' , 'image/jpeg' , 'image/png' , 'image/gif' );

		$this->fileName  = $fileName; // 把文件信息放进类属性里
		$this->fileType  = $fileType;
		$this->fileTmp   = $fileTmp;
		$this->fileErr   = $fileErr;
		$this->fileSize  = $fileSize;
		$this->allowType = $allowType;
	
		$count = count($_FILES['files']['name']);

		$i = 0;
		
	 	while( $i < $count ){
			
			if( $fileErr[$i] == 0 ){
				
				// 四项上传判断,最后移动文件 和 插入数据库
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
	参数: $i: 当前的循环次数 ,
		  $albumID: 当前相册的ID
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
			if( @!getimagesize($this->fileTmp[$i]) ){
				exit('<span style="color:red;">'.$this->fileName[$i].'</span> 不是真实的图片类型,请换张图片');
			}
			
		//  4
			// 判断上传的图片是否超过10M
			if( $this->fileSize[$i] > 10485760 ){ 
				exit('<span style="color:red;">'.$this->fileName[$i].'</span> 大于10M,无法上传,请处理后重试');
			}
			

		// 4
			$photoMd5    = $albumID .'_'. md5(uniqid(mt_rand(1,1000))); // 这里的'id'替换为数据库对应相册的id
			$photoSuffix = '.'.pathinfo( $this->fileName[$i] , PATHINFO_EXTENSION ); //取出文件后缀,大概输出:.jpg
			
			$path = $this->photoDir . $photoMd5 . $photoSuffix;

			$res = $this->photoHandle( $this->fileTmp[$i] , $i , $path); // 对上传的照片进行缩放处理
			
			if( $res == 1 ){
				echo "<script>alert('图片宽度或高度大于8000px,请选择其他图片上传');</script>";return;
			}else if( $res == 2 ){
				echo "<script>alert('未知错误,请联系管理员');</script>";return;
			}

			echo $this->fileName[$i]."上传成功<br/>";
			
			$res2 = $this->photoInsertDB( $i , $this->fileSize , $path);			
	}


/*
	调用于:本类 imgUploadJudge()
	作用：根据上传图片的宽高自动计算等比例缩小的百分比，并进行保存处理后的图片
	参数: $file_tmp : 上传图片的临时路径
*/
	public function photoHandle( $file_tmp , $i , $path){

		$imgInfo = getimagesize( $file_tmp );

		$imgWidth   = $imgInfo[0];
		$imgHeight  = $imgInfo[1];

		$commonobj = M('common');

		if( ($imgHeight <= $this->fixHeight) && ($imgWidth <= $this->fixWidth) ){ // 如果小于或等于我们要缩小的宽高

			$commonobj -> photoHandle( $file_tmp , 1 , $path); // 表示不用缩放, 按原比例1

		}else if( $imgHeight >= 8000 || $imgWidth >= 8000 ){
			return 1;
		}else if( $imgHeight > 630 ){

			$scale = $this->fixHeight / $imgHeight; 
			$commonobj -> photoHandle( $file_tmp , $scale , $path);

		}else if( $imgWidth > 1200 ){

			$scale = $this->fixWidth / $imgWidth; 
			$commonobj -> photoHandle( $file_tmp , $scale , $path);

		}else{
			return 2;
		}
	}





/*	
	拆分于: 本类中 photoBatchUpload()
	作用: 根据文件上传的错误号, switch 匹配
*/
	public function fileErrorSwitch($i){
		$fileName = $this->fileName[$i];
		switch($this->fileErr[$i]){
			case 1:
				echo "<script>alert('文件 {$fileName}  超过了PHP配置文件中的upload_max_filesize选项的值')</script>";
				return;
				break;
			case 2:
				echo "<script>alert('文件 {$fileName} 超过了表单MAX_FILE_SIZE限制的大小')</script>";
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
	

/*
	拆分于: 本类中 photoBatchUpload()
	作用: 将每张照片的数据库插入数据库
*/
	public function photoInsertDB($i , $fileSize , $path){

		date_default_timezone_set('PRC');
		$date = date('Y-m-d');

		$photoArr['cid']  = $this->albumID;
		$photoArr['size'] = $this->transformBytes( $fileSize[$i] ); // 字节数转换
		$photoArr['path'] = $path;
		$photoArr['date'] = $date;

		//DB::insert( $this->_tableName4 , $photoArr );
		/* 
			这里不能用自定义的SQL函数,自定义的SQL函数会有返回(return),
			在运行第一次结束后就会return,所以要是用 DB::insert(); 
			那在这里只能插入一次就return了,就做不到批量添加
		*/

		$sql = "INSERT INTO $this->_tableName4 (`cid`,`size`,`path`,`date`) VALUES 
		( {$photoArr['cid']},'{$photoArr['size']}','{$photoArr['path']}','{$photoArr['date']}' )";
		mysql_query($sql); // return t / f
		
	}


/*
	本类中 photoInsertDB()
	作用: 字节单位转换 例如: fileSize: int(2048) 转换为 2KB
	参数: $size: int类型的字节;
		  $digits: 默认不填,指返回的数只包含2位小数;
*/
	public function transformBytes($size,$digits=2){ 
 
		$unit = array('','K','M','G','T','P');
		$base = 1024;
		$i    = floor(log($size,$base));
		$n    = count($unit);
		
		if($i >= $n){
			$i=$n-1;
		}
	    
	    return round( $size/pow($base,$i) , $digits).' '.$unit[$i] . 'B';
	}
		


/*
	拆分于: 本类中 photoBatchUpload()
	作用: SELECT出当前相册存放照片的文件夹
*/
	public function queryFolderPath(){
		$sql = "SELECT folderPath FROM album_cover WHERE id=$this->albumID";
		$res = DB::findOne($sql);
		$this->photoDir = $res['folderPath'];

	}


//  照片批量删除操作  参数: id 传进要删除照片的id
	public function photoBatchDel( $photoID ){


		$count = count( $photoID );
		for($i=0; $i<$count; $i++){
			
			$sql = "SELECT `path` FROM $this->_tableName4 WHERE id=$photoID[$i]";
			
			$res = DB::findOne($sql);
		//$res2 = unlink( $res['path'] );
		//var_dump($res2);exit;
			if( unlink( $res['path'] ) ){
				DB::del( $this->_tableName4 , $photoID[$i] );
			}
		}
		return true;

	}




}




?>