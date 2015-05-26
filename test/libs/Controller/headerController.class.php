<?php

class headerController{


//  header  首页标签
	public function index(){

		// 取出文章 (近期活动日程) 信息
		
		$articleData['articleData'] = M('frontArticle')->getArtData();
		VIEW::assign( $articleData ); // 文章数据

		$resourceData['resourceData'] = M('frontResource','front')->resourceList();
		$count['count'] = count( $resourceData['resourceData'] );
		VIEW::assign( $count );
		VIEW::assign( $resourceData ); // 资源链接数据
		

		// 是否已经登录的判断
		$userInfo = C('index','checkLoginState');

		if( empty( $userInfo['username']) ){   VIEW::assign( $userInfo ); } // 未登录
		if( count( $userInfo ) > 3 ){          VIEW::assign( $userInfo ); }	// COOKIE SESSION 登录


		VIEW::display('tpl/class web/index.html'); 
	}



//  header  相册标签	
	public function albumIndex(){  

		$albumDynamic['albumDynamic'] = M('frontAlbum','front')->albumDynamic();
	
		VIEW::assign( $albumDynamic );



		$userInfo = C('index','checkLoginState');
		$albumState['albumState'] = 'normal'; // 此相册状态用于区分当前是显示相册 还是 搜索相册

		//var_dump($userInfo); 
		// 是否已经登录的判断
		if( empty($userInfo['username']) ){   	  

			//   未登录  

			$this->albumData();
			//var_dump($$userInfo['username']);
			//var_dump()
			//$userInfo['username'] = '';
			VIEW::assign( $userInfo );	
		}

		if( count( $userInfo ) > 3 ){

			// COOKIE SESSION 登录
			$this->albumData();        // 相册数据
			VIEW::assign( $userInfo ); // 用户数据
		}

		VIEW::assign( $albumState );
		VIEW::display('tpl/class web/classPhoto/albumIndex.html');
	}


/*  
	调用处: 本类中的 albumIndex()
	作用:显示相册板块数据 与 页数 

*/ 	
	public function albumData(){

		
		$pageStr = M('frontAlbum','front')->pager();

  		// 相册数据
  		$CurrentPage = isset( $_GET['page'] ) ? $_GET['page'] : 1 ;  
		$albumData['albumData'] = M('frontAlbum','front')->findAllAlbumData( $CurrentPage ); // 相册数据 参数1: 页数

		if( !$albumData['albumData']){ $albumData['albumData'] = ''; } // 当无相册数据时 让smarty判断

		VIEW::assign($pageStr);
		VIEW::assign($albumData);
	}




}



?>