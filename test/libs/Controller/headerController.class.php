<?php

class headerController{
	
	public function photoIndex(){


		if($this -> checkPassword()){
			
			$res = $this->checkPassword();

			$albumData['albumData'] = M('front')->findAllAlbumData(); // 相册数据

			$userInfo['username'] = $res['userName'];
			$userInfo['photo']    = $res['photo'];
			
			VIEW::assign($albumData);		 
			VIEW::assign($userInfo);
			VIEW::display('class web/classPhoto/photoIndex.html');

		}else if(isset($_SESSION['auth']['userName'])){

			$albumData['albumData'] = M('front')->findAllAlbumData(); // 相册数据
			$res = M('admin')->findOne_by_username( $_SESSION['auth']['userName'] );
			//echo "<pre>";
		//var_dump($albumData);exit;
			$userInfo['username'] = $res['userName'];
			$userInfo['photo'] = $res['photo'];

			VIEW::assign($albumData);
		 	VIEW::assign($userInfo);
			VIEW::display('class web/classPhoto/photoIndex.html');

		 }else{
		 	
		 	VIEW::display('class web/classPhoto/photoIndex2.html');

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