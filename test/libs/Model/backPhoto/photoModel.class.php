<?php

class photoModel{

	private $_tableName3 = 'album_cover';
	private $fileInfo;
	private $fileName;
	private $fileType;
	private $fileTmp;
	private $fileErr;
	private $fileSize;

	private $allowType;
	private $photoDir;
	private $albumID;


//  展示相册里面的所有照片
	public function photoList(){

		$this->albumID = $_GET['id'];

		$sql = "SELECT folderPath FROM $this->_tableName3 WHERE id=$this->albumID";
		$res = DB::findOne($sql);
		$folderPath = $res['folderPath'];
		
		$folderArr = scandir($folderPath); //   列出指定路径中的文件和目录 Array

		foreach($folderArr as $k => $v){
			if( $v != '.' && $v != '..' ){ // 剔除 当前目录 . 与 上级目录 ..
				$allFilesArr[] = $folderPath.$folderArr[$k];
			}
		}

		return $allFilesArr;
		
		//$this->imgLessen( $allFilesArr );  // 图片等比例缩小
	}


/*
	拆分于: 本类中 photoList()
	作用:   图片等比例缩小
	参数:   图片路径数组
*/
	public function imgLessen( $allFilesArr ){
		
		foreach( $allFilesArr as $k => $v ){

			$imgInfo = getimagesize($allFilesArr[$k]);
			
			$w=$imgInfo['0'];
		    $h=$imgInfo['1'];

		    $imgTypeNum = $imgInfo[2];
		    $imgType = image_type_to_extension($imgTypeNum , false); // 返回图片后缀(没有 "."
	
		   
		    //指定缩放出来的最大的宽度（也有可能是高度）
		    $max=300;
		    
		    //根据最大值为300，算出另一个边的长度，得到缩放后的图片宽度和高度
		    if($w > $h){
		        $w=$max;
		        $h=$h*($max/$imgInfo['0']);
		    }else{
		        $h=$max;
		        $w=$w*($max/$imgInfo['1']);
		    }
		    
		    $imgCreate = "imagecreatefrom{$imgType}"; 

			$image = $imgCreate($allFilesArr[$k]);
	    
		    //声明一个$w宽，$h高的真彩图片资源
		    $trueimage=imagecreatetruecolor($w, $h);
		   
		    				
		    
		    //关键函数，参数（目标资源，源，目标资源的开始坐标x,y, 源资源的开始坐标x,y,目标资源的宽高w,h,源资源的宽高w,h）
		    imagecopyresampled($trueimage, $image , 0, 0, 0, 0, $w, $h, $imgInfo['0'], $imgInfo['1']);
		    
		    //告诉浏览器以图片形式解析

		    header('content-type:image/'.$imgType);
		    $outputImg = "image{$imgType}";
		   	$outputImg( $trueimage );
		    //var_dump($imgType[$k]);
		   // imagepng($image);	
   
		}
	}


//  照片批量上传操作
	public function photoBatchUpload(){
	
		$this->albumID  = $_POST['albumID'];
		$this -> queryFolderPath(); // 从数据库取出相册文件夹路径 保存在 $this->photoDir

		// 如果等于0,代表上传文件错误,上传文件过大 8M
		if( count($_FILES) == 0 ){ exit('上传文件大于2M,请检查'); }
		
		$fileInfo = $_FILES['files'];
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
			if( @!getimagesize($this->fileTmp[$i]) ){
				exit($this->fileName[$i].'不是真实的图片类型,请换张图片');
			}
			

		// 4
			$photoMd5    = $albumID .'_'. md5(uniqid(mt_rand(1,100))); // 这里的'id'替换为数据库对应相册的id
			$photoSuffix = '.'.pathinfo( $this->fileName[$i] , PATHINFO_EXTENSION ); //取出文件后缀,大概输出:.jpg
	
			// 通过了上面的上传方式的检测
			// 执行移动文件 move_uploaded_file() "只能移动通过POST方式上传的文件(其他方式上传的不能移动)
			
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
	

/*
	拆分于: 本类中 photoBatchUpload()
	作用: SELECT出当前相册存放照片的文件夹
*/
	public function queryFolderPath(){
		$sql = "SELECT folderPath FROM album_cover WHERE id=$this->albumID";
		$res = DB::findOne($sql);
		$this->photoDir = $res['folderPath'];

	}


//  




}




?>