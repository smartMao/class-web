/*  
	该js文件用于后台的 backstage/photo/album/album.html
 	作用: 相册 显示的 封面图的 上下居中
*/




 	var frontImgList = $('.photo-list img');

 	frontImgList.each(function(){
		var height = $(this).height();
		var width  = $(this).width();

		//$(this).offset({ top : 0 , left : 0 });
		
		var topValue = (Math.abs(height - 210)) / 2;
		$(this).css({'top':topValue});

		var leftValue = (Math.abs(width - 295)) / 2;
		$(this).css({'left':leftValue});
 	});




window.onload = function(){

	var imgList = $('.album-cover img');

	imgList.each(function(){
		
		var height = $(this).height();
		var width  = $(this).width();
		
		var topValue = (Math.abs(height - 210)) / 2;
		$(this).css({'top':topValue});

		var leftValue = (Math.abs(width - 295)) / 2;
		$(this).css({'left':leftValue});
 	});


 }



