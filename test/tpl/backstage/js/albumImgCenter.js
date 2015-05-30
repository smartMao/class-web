/*  
	该js文件用于后台的 backstage/photo/album/album.html
 	作用: 相册 显示的 封面图的 上下居中
*/

	var imgList = $('.album-cover img');
	//console.log(albumCoverImg.height());
	imgList.each(function(i){
		var height = $(this).height();
		//console.log(height);

		var marginTop = Math.abs(height - 210) / 2;
		//console.log(marginTop);
		$(this).css({'margin-top':marginTop});

 	});


