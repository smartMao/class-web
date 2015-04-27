<?php

class commonModel{
	
	// 此 Model 为公共模块 , 放置可复用的方法




/*
	名称: 图像处理方法
	作用: 操作上传图片的 宽度 与 高度
	参数: $imgFileInfo : 传入 $_FILES
		  $imgWidth    : 希望得到的宽度
		  $imgHeight   : 希望得到的高度
		  $minWidth    : 规定上传图片的最小宽度
		  $minHeight   : 规定上传图片的最小高度
		  $photoUserPath:文件夹路径 (要把操作后的图片保存在哪)
*/
	public function imgHandle( $imgFileInfo , $imgWidth , $imgHeight , $minWidth , $minHeight , $photoUserPath){
		
		if( empty( $imgFileInfo )){ return false; } // 如果并没有$_FILES传入 , 不做任何操作

//  1.文件上传判断
		$filesErr = $this->checkFilesErrorNum( $imgFileInfo['error'] );

		if( $filesErr != 8 ){ return $filesErr; } // 如果上传文件错误了,就把错误号返回出去

//  2.GD库处理图片大小,并保存在 userPhotoFolder 文件里 , 返回该操作图片的路径
		$userPhotoPath = $this->GdHandelIamge( $imgFileInfo['tmp_name'] , $imgWidth , $imgHeight , 
														$minWidth , $minHeight ,$photoUserPath );
		if( $userPhotoPath ){ // 如果返回路径存在
			return $userPhotoPath;
		} else{
			return false;
		}

	}


/*
	拆分于: 本类中 imgHandle()
	作用:接收文件上传的错误号return相应的值
	参数: $file_error : 文件上传的错误号
*/
	public function checkFilesErrorNum( $file_error ){

		if( $file_error == UPLOAD_ERR_OK ){
			// 图片文件上传无误
			return 8; // 暂定

		}else{

			// 图片文件上传有误,进行判断
			switch( $file_error ){
				case UPLOAD_ERR_INI_SIZE:
					return 1;
					break;
				case UPLOAD_ERR_FORM_SIZE:
					return 2;
					break;
				case UPLOAD_ERR_PARTIAL:
					return 3;
					break;
				case UPLOAD_ERR_NO_FILE:
					return 4;
					break;
				case UPLOAD_ERR_NO_TMP_DIR:
					return 6;
					break;
				case UPLOAD_ERR_CANT_WRITE:
					return 7;
					break;
			}
		}

	}


/*
	拆分于: 本类中 imgHandle()
	作用: 操作图片的大小
	参数: $file_tmp : 上传图片的临时路径;
		  $width    : 希望得到的图片宽度;
		  $height   : 希望得到的图片高度;
		  $minWidth : 规定上传图片的最小宽度
		  $minHeight: 规定上传图片的最小高度
*/
	public function GdHandelIamge( $file_tmp , $width , $height , $minWidth , $minHeight ,$photoUserPath){

		$imgInfo = getimagesize($file_tmp);

		$imgWidth   = $imgInfo[0]; // 上传图片的width height
		$imgHeight  = $imgInfo[1];
		$imgTypeNum = $imgInfo[2];
		$imgMime    = $imgInfo['mime'];

		if( ($imgWidth < $minWidth) || ($imgHeight < $minHeight) ){
			echo "<script>alert('您上传的图片,宽度少于'+$minWidth+'或高度少于'+$minHeight);
			window.location.href = 'admin.php?controller=admin&method=UserInfoList';
			</script>";
			return false;
		}

		$imgType =  image_type_to_extension( $imgTypeNum , false ); // 返回 jpeg / png / ......
		$imgCreate  =  "imagecreatefrom{$imgType}";
		$image = $imgCreate($file_tmp); // 把图片文件, 装进了图像里 ,可以返回资源类型

		//$imgBox = imagecreatetruecolor( $width , $height );   // 创建一个图像容器
		$imgBox = imagecreatetruecolor( $imgWidth , $imgHeight );
		// 把上传图片放进 设置好大小的 $imgBox 里 
		//imagecopyresampled( $imgBox , $image , 0 , 0 , 0 , 0 , $width , $height , $imgWidth , $imgHeight ); 
		imagecopyresampled( $imgBox , $image , 0 , 0 , 0 , 0 , $imgWidth , $imgHeight , $imgWidth , $imgHeight ); 

		imagedestroy($image); // 上传图片已经放入$imgBox了,所以现在它没用了销毁

		//header("Content-type: ".$imgMime);

		$randomPhotoName = uniqid(mt_rand(1,1000));
		$photoName = $photoUserPath.$randomPhotoName . "." . $imgType;

		$imgOutput = "image{$imgType}";
		$imgOutput($imgBox , $photoName); // 保存到userPhotoFolder文件夹当中

		imagedestroy($imgBox);

		return $photoName; // 将保存后的图片路径返回出去
	}	  



}



?>