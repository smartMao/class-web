<?php

class indexController{


	function index(){

		// 是否已经登录的判断
		
		if($this->checkPassword()){
			
			$res = $this->checkPassword();
			$userInfo['username'] = $res['userName'];
			echo "<pre>";
			var_dump($res);
			/*$userInfo['photoPath'] = $res['photo'];
			VIEW::assign($userInfo);
			VIEW::display('tpl/class web/index.html');*/

		}else if(isset($_SESSION['auth']['userName'])){
			// 如果SESSION有值

			$res = M('admin')->findOne_by_username( $_SESSION['auth']['userName'] );

			$userInfo['username'] = $res['userName'];
			$userInfo['photoPath'] = $res['photo'];
			
			VIEW::assign($userInfo);
			VIEW::display('tpl/class web/index.html');
		
		}else{
			// 如果SESSION没值
			VIEW::display('tpl/class web/index2.html');
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