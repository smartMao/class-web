<?php

class headerController{


//  此方法展示相册列表	
	public function albumIndex(){  


		if($this -> checkPassword()){
			
		// 	COOKIE 登录
			$res = $this->checkPassword();
			$userInfo['username'] = $res['userName'];
			$userInfo['photo']    = $res['photo'];
	
			VIEW::assign($userInfo);

			$this->albumData(); //  相册数据



		}else if(isset($_SESSION['auth']['userName'])){

		//  SESSION 登录
			$res = M('admin')->findOne_by_username( $_SESSION['auth']['userName'] );
			$userInfo['username'] = $res['userName'];
			$userInfo['photo']    = $res['photo'];

		 	VIEW::assign($userInfo);

		 	$this->albumData(); //  相册数据
		

		}else{

		//  未登录
			$this->albumData( false );

		}	 
	}


/*  
	调用处: 本类中的 albumIndex()
	作用:显示相册板块数据  

*/ 	

	public function albumData( $judge = true ){

		
		$albumNum = M('front')->albumDataNum(); // 相册数量

		// 相册分页
		include 'libs/Model/pager.class.php';  
		$CurrentPage = isset( $_GET['page'] ) ? $_GET['page'] : 1 ;   
		 
 		$myPage = new pager( $albumNum ,intval($CurrentPage) );    
  		$pageStr['pageStr'] = $myPage->GetPagerContent();  //  直接  echo $pageStr['pageStr'] 就是分页

  		// 相册数据
		$albumData['albumData'] = M('front')->findAllAlbumData( $CurrentPage ); // 相册数据 参数1: 页数

		if( !$albumData['albumData']){ $albumData['albumData'] = ''; } // 当无相册数据时 让smarty判断

		VIEW::assign($pageStr);
		VIEW::assign($albumData);

		if( $judge ){
			VIEW::display('class web/classPhoto/albumIndex.html');
		}else{
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