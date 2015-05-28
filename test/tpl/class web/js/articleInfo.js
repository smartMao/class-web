// 该用于文件 用于 articleInfo.html 

var contentHeight = parseInt($('.right-content').css('height'));
var rightcontentHeight = $('.right-content').height();

if( rightcontentHeight < 400 ){ 
	// 如果点进去文章页面 内容太少, 高度不过的话, 那就给多点高度
	$('.right-content').height(401);
	contentHeight = 401; 
}
$('.left-photo').css({'height':contentHeight});
