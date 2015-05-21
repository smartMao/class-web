	
	function getNum(text){
		var value = text.replace(/[^0-9]/ig,""); 
		return value;
	}

	var now_url = window.location.href;  //获取当前URL 

	var url_arr = now_url.split("="); //字符分割，获取到URL以=分割的数组 
	var url_s   = url_arr[url_arr.length-1];

	var urlArr  = now_url.split("/"); 
	var url     = urlArr[urlArr.length-1];  

/*  
	思路: js 获取当前的 url 和 定好的 url 进行比对 , 如果吻合当前的 标记好 	
*/
	var albumID    = getNum(url);
	var albumPager = getNum(url);

	var albumPagerUrl  = 'index.php?controller=header&method=albumIndex&page='+albumPager;
	var albumUrl       = 'index.php?controller=photo&method=photoList&albumID='+albumID;
	var searchAlbumUrl = 'index.php?controller=album&method=search';


//  当进入相册,在照片列表页面时,标记在 ‘班级相册’
	if( url == albumUrl || url == albumUrl+'#' ){
		$('#headerNav li a').removeClass('on');
		$('#headerNav li a:eq(2)').addClass('on');  
	}


//  当搜索相册时, 标记在 ‘班级相册’
	if( url == searchAlbumUrl || url == searchAlbumUrl+'#' ){
		$('#headerNav li a').removeClass('on');
		$('#headerNav li a:eq(2)').addClass('on');  
	}


//  当相册翻页时, 标记在 ‘班级相册’
	if( url == albumPagerUrl || url == albumPagerUrl+'#' ){
		$('#headerNav li a').removeClass('on');
		$('#headerNav li a:eq(2)').addClass('on');  
	}

//  这个只能单纯的在 首页 和 班级相册 中标记
	$('#headerNav li a').each(function(i,n){ 
	
		var hrefText = $(this).attr('href'); //获取a标签中的href链接
		var hrefArr = hrefText.split('=');   //以 “=” 作为分隔 产生数组
		var hrefMethod= hrefArr[hrefArr.length-1];

		if(hrefMethod == url_s){  //如果当前URL,和a标签中的href相等。
			$('#headerNav li a').removeClass('on');
			$(this).addClass('on');  
		}

	 });

	

	