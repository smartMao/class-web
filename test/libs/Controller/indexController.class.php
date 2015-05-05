<?php

class indexController{

/*	
	检查登录状态函数
	用于前端的每一个页面,每进一个新的页面,就执行一次,防止用户乱url
*/
	public function checkLoginState(){


		if( $this->checkPassword() ){
			// COOKIE 登录
			$res = $this->checkPassword();

			$userInfo['username'] = $res['userName'];
			$userInfo['photo']    = $res['photo'];
			return $userInfo;
			

		}else if( isset($_SESSION['auth']) ){
			// SESSION 登录
			$res = $_SESSION['auth'];

			$userInfo['username'] = $res['userName'];
			$userInfo['photo']    = $res['photo'];
			return $userInfo;
			
		}else{

			// 并没有登录
			$userInfo = array('userName'=>'' , 'photo'=>'');
			return $userInfo;
		}


	}




	function checkPassword(){

		$indexobj = M('index');

		//  这两条判断不可放进indexModel里,正常登录时会因没有检查有没有COOKIE而报错
		$username = isset($_COOKIE['username'])? $_COOKIE['username'] : false ;
		$password = isset($_COOKIE['password'])? $_COOKIE['password'] : false ;

		$res = $indexobj -> checkCookiePassword($username,$password);

		return $res;
	}
}


?>