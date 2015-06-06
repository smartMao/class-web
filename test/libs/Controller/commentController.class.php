<?php

class commentController{

 /*  
	此模块为 文章、相册评论模块
	
 */


//  前端照片layer展示层评论块ajax提交过来的 评论数据
	public function photoAddComment(){
		M('frontPhotoComment','front')->photoAddComment();
	}




}


?>