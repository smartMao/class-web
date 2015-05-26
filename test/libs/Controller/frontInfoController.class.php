<?php

class frontInfoController{

//	此控制器为 前端 index.html 页面 info 板块的控制器

//  显示文章列表
	public function articleList(){
		
		// 登录判断
		$userInfo = C('index','checkLoginState');
		if( empty( $userInfo['username']) ){   VIEW::assign( $userInfo ); } // 未登录
		if( count( $userInfo ) > 3 ){          VIEW::assign( $userInfo ); }	// COOKIE SESSION 登录



		$articleData['articleData'] = M('frontArticle','front')->getArtData();
		VIEW::assign( $articleData );
		VIEW::display('tpl/class web/article/articleList.html');

	}



//  点击其中的一篇文章
	public function readArticle(){

		// 登录判断
		$userInfo = C('index','checkLoginState');
		if( empty( $userInfo['username']) ){   VIEW::assign( $userInfo ); } // 未登录
		if( count( $userInfo ) > 3 ){          VIEW::assign( $userInfo ); }	// COOKIE SESSION 登录

		// 文章数据
		$articleData['articleData'] = M('frontArticle','front')->getOneArtData();
		VIEW::assign( $articleData );

		// 作者数据(头像)
		$uid = $articleData['articleData']['uid'];
		$userPhoto['userPhoto'] = M('common')->findUserPhoto( $uid );
		VIEW::assign( $userPhoto );


		VIEW::display('tpl/class web/article/articleInfo.html');
	}




}






?>