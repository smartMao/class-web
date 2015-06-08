<?php

class photoController{

	//  此控制器仅为前端照片控制器


//  进入相册 (根据点击哪个相册,传入ID进行查询)
	public function photoList(){
	
	
		// 返回当前的登录状态,( cookie \ session \ 未登录 ) (如果登录了就返回用户名和头像)
		$userInfo = C('index','checkLoginState');
		if( !empty($userInfo['username']) ){
			$userInfo['photo'] = './'.$userInfo['photo'];
		}
		
		VIEW::assign( $userInfo );
	
		// 相册数据
		$albumData['albumData'] = M('frontAlbum','front')->findAlbumTitle( $_GET['albumID'] );
		VIEW::assign( $albumData );
		

		// 照片数据
		$photoRes = M('frontPhoto','front')->photoList( $_GET['albumID'] );
		if( !$photoRes ){ $this->showmessage( '打开相册失败!请重试' , $_SERVER['HTTP_REFERER'] ); }
		$photoData['photoData'] = $photoRes;
		VIEW::assign($photoData);
		//echo "<pre>";
		//var_dump($photoData);exit;

		// 照片评论数据
		$photoCommentRes = M('frontPhotoComment','front')->getphotoComment();
		$photoCommentData['photoCommentData'] = $photoCommentRes;
	
		VIEW::assign( $photoCommentData );


		VIEW::display('tpl/class web/classPhoto/photoList.html');


		
	}
	




















//  弹框后跳转方法
	private function showmessage($mes, $url){
		echo "<script>alert('$mes');window.location.href='$url'</script>";
		exit;
	}


}





?>