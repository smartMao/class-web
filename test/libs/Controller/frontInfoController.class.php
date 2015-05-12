<?php

class frontInfoController{

//	此控制器为 前端 index.html 页面 info 板块的控制器

//  显示文章列表
	public function articleList(){

		$articleData['articleData'] = M('frontArticle','front')->getArtData();
		VIEW::assign( $articleData );
		VIEW::display('tpl/class web/article/articleList.html');

	}



//  点击其中的一篇文章
	public function readArticle(){
		$articleData['articleData'] = M('frontArticle','front')->getOneArtData();
		VIEW::assign( $articleData );
		VIEW::display('tpl/class web/article/articleInfo.html');

	}




}






?>