<?php

class indexModel{

	function checkCookiePassword($username,$password){

	
		if(!$username){
			return false;
		}

		$adminobj = M('admin');
		$userInfo = $adminobj -> findOne_by_username($username);
		
		if($userInfo['password'] == $password){
			//  验证成功, COOKIE密码  与 数据库密码对应
			return $userInfo;
		}else{
			return false;
		}

	}


}


?>