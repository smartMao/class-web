
	var now_url = window.location.href;  //获取当前URL 
	var url_arr = now_url.split("="); //字符分割，获取到URL以=分割的数组 
	var url_s   = url_arr[url_arr.length-1];


	$('#headerNav li a').each(function(i,n){ 
	
		var hrefText = $(this).attr('href'); //获取a标签中的href链接
		var hrefArr = hrefText.split('=');   //以 “=” 作为分隔 产生数组
		var hrefMethod= hrefArr[hrefArr.length-1];

		if(hrefMethod == url_s){  //如果当前URL,和a标签中的href相等。
			$('#headerNav li a').removeClass('on');
			$(this).addClass('on');  
		}

	 })

	