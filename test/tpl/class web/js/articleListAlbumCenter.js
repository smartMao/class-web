//  此Js 文件是用于 前端文章列表页面 右侧的 两个最新相册 的相册封面图上下左右居中
function albumCoverCenter(){
 	var frontImgList = $('.album-new img');

 	frontImgList.each(function(){
		
		var height = $(this).height();
		var width  = $(this).width();

		//$(this).offset({ top : 0 , left : 0 });
		
		var topValue = (Math.abs(height - 210)) / 2;
		$(this).css({'top':topValue});

		var leftValue = (Math.abs(width - 335)) / 2;
		$(this).css({'left':leftValue});
 	});
 }
