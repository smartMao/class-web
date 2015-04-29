<?php

class headerController{


//  此方法展示相册列表	
	public function albumIndex(){  


		if($this -> checkPassword()){
			
			$res = $this->checkPassword();

			$albumData['albumData'] = M('front')->findAllAlbumData(); // 相册数据

	   	    if( !$albumData['albumData']){ $albumData['albumData'] = ''; } // 当无相册数据时 让smarty判断

			$userInfo['username'] = $res['userName'];
			$userInfo['photo']    = $res['photo'];
			
			VIEW::assign($albumData);		 
			VIEW::assign($userInfo);
			VIEW::display('class web/classPhoto/albumIndex.html'); 

		}else if(isset($_SESSION['auth']['userName'])){

			$albumData['albumData'] = M('front')->findAllAlbumData(); // 相册数据

			if( !$albumData['albumData']){ $albumData['albumData'] = ''; } // 当无相册数据时 让smarty判断

			$res = M('admin')->findOne_by_username( $_SESSION['auth']['userName'] );

			$userInfo['username'] = $res['userName'];
			$userInfo['photo'] = $res['photo'];

			VIEW::assign($albumData);
		 	VIEW::assign($userInfo);
			VIEW::display('class web/classPhoto/albumIndex.html');

		 }else{

		 	$albumData['albumData'] = M('front')->findAllAlbumData(); // 相册数据
		 	if( !$albumData['albumData']){ $albumData['albumData'] = ''; } // 当无相册数据时 让smarty判断

			VIEW::assign($albumData);
		 	VIEW::display('class web/classPhoto/albumIndex2.html');

		 }	 
		
		


	}

	public function checkPassword(){

		$indexobj = M('index');

		//  这两条判断不可放进indexModel里,正常登录时会因没有检查有没有COOKIE而报错
		$username = isset($_COOKIE['username'])? $_COOKIE['username'] : false ;
		$password = isset($_COOKIE['password'])? $_COOKIE['password'] : false ;

		$res = $indexobj -> checkCookiePassword($username,$password);
		return $res;


	}


}



?>