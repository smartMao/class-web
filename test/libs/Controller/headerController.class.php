<?php

class headerController{


//  header  首页标签
	public function index(){

		// 是否已经登录的判断
		$userInfo = C('index','checkLoginState');
		if( empty($userInfo) ){   
			
			// 未登录
			$userInfo = array( 'username' => '' , 'photo' => '' );
			VIEW::assign( $userInfo ); // 空的用户信息
		}

		if( is_array($userInfo) ){

			// COOKIE SESSION 登录
			VIEW::assign( $userInfo );
		}	
		VIEW::display('tpl/class web/index.html');
	}



//  header  相册标签
	public function albumIndex(){  

		$userInfo = C('index','checkLoginState');
		// 是否已经登录的判断
		if( empty($userInfo) ){   	  
			$userInfo = array('username'=>'','photo' => '' );

			//   未登录  
			$this->albumData();
			VIEW::assign($userInfo);	
		}

		if( is_array($userInfo) ){

			// COOKIE SESSION 登录
			$this->albumData();        // 相册数据
			VIEW::assign( $userInfo ); // 用户数据
		}
		VIEW::display('tpl/class web/classPhoto/albumIndex.html');
	}


/*  
	调用处: 本类中的 albumIndex()
	作用:显示相册板块数据  

*/ 	
	public function albumData(){

		
		$albumNum = M('front')->albumDataNum(); // 相册数量

		// 相册分页
		include_once 'libs/Model/pager.class.php';  
		$CurrentPage = isset( $_GET['page'] ) ? $_GET['page'] : 1 ;   
		 
 		$myPage = new pager( $albumNum ,intval($CurrentPage) );    
  		$pageStr['pageStr'] = $myPage->GetPagerContent();  //  直接  echo $pageStr['pageStr'] 就是分页

  		// 相册数据
		$albumData['albumData'] = M('front')->findAllAlbumData( $CurrentPage ); // 相册数据 参数1: 页数

		if( !$albumData['albumData']){ $albumData['albumData'] = ''; } // 当无相册数据时 让smarty判断

		VIEW::assign($pageStr);
		VIEW::assign($albumData);
	}




}



?>