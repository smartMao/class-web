<?php

class albumController{

	private $_tableName3 = 'album_cover';

	//  此控制器仅为前端相册控制器

	public function search(){

		// 验证登录
		$userInfo = C('index','checkLoginState'); // 用户验证部分
		if( empty( $userInfo['username']) ){   VIEW::assign( $userInfo ); } // 未登录
		if( count( $userInfo ) > 3 ){          VIEW::assign( $userInfo ); }	// COOKIE SESSION 登录

		$frontAlbumObj = M('frontAlbum','front'); // 实例化
  		// 相册数据
  		$CurrentPage = isset( $_GET['page'] ) ? $_GET['page'] : 1 ;
		$searchRes['albumData'] = $frontAlbumObj -> search( $CurrentPage );
		$albumState['albumState'] = 'search'; // 当前的状态
		$searchAlbumCount = $frontAlbumObj->selectSearchNum(); // 被搜索到的相册总数

		// 相册分页
		$pageStr = $frontAlbumObj ->pager( $searchAlbumCount ); // 传入 搜索出来的数组数量
		$albumCount['albumCount'] = $searchAlbumCount; // 用于搜索相册后显示,被搜索到的相册总数
		
		if( $searchRes['albumData'] ){
			// 搜索到有结果
			VIEW::assign( $searchRes );	
		}else{
			// 搜索无结果
			VIEW::assign( $searchRes );
		}
		
		VIEW::assign( $albumCount );
		VIEW::assign( $pageStr );
		VIEW::assign( $albumState );
		VIEW::display('tpl/class web/classPhoto/albumIndex.html');
	}
	


}





?>