
//  用于 article / articleList.html  作用于文章列表页面的 资源下载部分 的 tab 切换

$('.resource-tab-list ul li').click(function(){

	$('.resource-tab-list ul li').attr('id',''); // 删除所有元素的ID
	$(this).attr('id','onResource'); // 设置一进入页面tab的状态


	var newIcon = $('.resource-tab-new i');
	
	var seeIconNormal = $('.tab-see-normal-icon'); 
	var seeIconOn     = $('.tab-see-on-icon');

	var dowloadNormal = $('.tab-dowload-normal-icon'); 
	var dowloadOn     = $('.tab-dowload-on-icon');

 	var currentClass = $(this).attr('class');  // 保存当前的class

 	if( currentClass == 'resource-tab-new'){

 		newIcon.attr('class','on-new-icon');

 		seeIconOn.css({'display':'none'}); // 去标记
 		dowloadOn.css({'display':'none'});

 		seeIconNormal.css({'display':'block'}); // 回正常
 		dowloadNormal.css({'display':'block'});


 		$('.resource-new-list').css('display','block');
		$('.resource-see-list').css('display','none');
		$('.resource-dowload-list').css('display','none');
 	}


 	if( currentClass == 'resource-tab-see'){

 		newIcon.attr('class','');

 		seeIconOn.css({'display':'block'});
 		dowloadOn.css({'display':'none'});

 		seeIconNormal.css({'display':'none'}); // 回正常
 		dowloadNormal.css({'display':'block'});



 		$('.resource-new-list').css('display','none');
		$('.resource-see-list').css('display','block');
		$('.resource-dowload-list').css('display','none');
 	}


 	if( currentClass == 'resource-tab-dowload'){

 		newIcon.attr('class','');

 		seeIconOn.css({'display':'none'});
 		dowloadOn.css({'display':'block'});

 		seeIconNormal.css({'display':'block'}); // 回正常
 		dowloadNormal.css({'display':'none'});

 		$('.resource-new-list').css('display','none');
		$('.resource-see-list').css('display','none');
		$('.resource-dowload-list').css('display','block');
 	}




	//$('resource-new-list');
	//$('resource-see-list');
	//$('resource-dowload-list');

});