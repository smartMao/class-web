/*  
	这个Js文件主要用于前端照片列表的 layer 展出层的评论块 的交互
	这个照片的评论时这样的:
		1. 每一张照片都有独立的评论, (即使当前评论为空,也会创建该照片的评论的HTML)
		2. 如果现在有 10 张照片, 那么就有 10 个HTML的评论块
			<div class="photo-comment">   ........     </div>
			<div class="photo-comment">   ........     </div>
			<div class="photo-comment">   ........     </div>
			...
			类似于这样
		3. 如果点击出Layer的照片展示层, 会自动的创建出一个 
			<div class="photo-comment">   ........     </div>
		   这个HTML评论块里的内容呢就是, 当前Layer展示照片的评论
		   同时, 页面的评论块HTML 就有 11 个, 当关闭掉 layer展示层, 评论块HTML又回到了 10 个

		4. 总结：因为layer展出层的评论块 , 是最后一个评论块, 
		  		 所以, 如果我们要操作layer展出层当前的评论块, 
		  		 获取最后一个评论块块就是Layer展出层的评论块了

*/




$(document).ready(function(){

	$('#photoBox img').click(function(){
		$(this).delay(500).queue(function(){
			
			var index = $('.photo-comment').length-1; // 第 index 个.photo-comment就是

			var commentList = $('.comment-list:eq('+index+')>li .comment-content-block-small-box');
			var replyList   = $('.comment-list:eq('+index+')>li .reply-list>li');

			
			commentList.click(function(){
				// 如果点击了layer评论块中的某一条评论, 显示出回复框, 并添加信息				
				clickComment( $(this) );
			});


			replyList.click(function(){
				// 如果点击了layer评论块中的某一条回复, 显示出回复框, 并添加信息
				clickReply( $(this) );
			});

			
			//  动态设置评论块的高度
			commentBlockHeight();

			

		});




	}); 

		$(window).resize(function(){
			var index = $('.photo-comment').length-1;
				//alert(11);
				console.log( $('.photo-comment-box:eq('+ index +')').height() );
			$(this).delay(1000).queue(function(){
				var index = $('.photo-comment').length-1;
				console.log( $('.photo-comment-box:eq('+ index +')').height() );
				commentBlockHeight();
			});
			
		});

/*  
	作用: 
	1. 先隐藏所有的回复盒子 (原因是:做出只能出现一个回复框的效果 )
	2. 显示回复框
	3. 获取到回复用户名, 并添加到回复框内 (例如: 回复 徐志乔: )
	4. 回复框给上焦点
	5. 根据回复用户名的长度来判定 textarea 的 text-indent 应该缩进多少
	6. 回复框的收起按钮

	参数:
		thisElm :  当前点击的评论条
*/
function clickComment( thisElm ){

//  1.
	var index = $('.photo-comment').length-1; 
	var allReplyTextarea = $('.comment-list:eq('+ index +') .comment-reply-input-box');
	allReplyTextarea.each(function(){
		$(this).css({'display':'none'});
	});

	//  thisElm 代表当前的被点击的 评论条

	var commentUser =  thisElm.find(".comment-content-block-username a").text();
	var commentUserLen = commentUser.length;

	 // 由于评论条和回复条同级, 需要跳到父元素后才能获取到回复后面的回复框
	var comParent = thisElm.parent(".comment-content-block");
	var replyBox      = comParent.find(".comment-reply-input-box"); // 获取当前的回复盒子
	var replyMes      = comParent.find(".comment-reply-info"); // 回复框内容提示 ( 例如: 回复 徐志乔： )
	var replyTextarea = comParent.find(".comment-reply-input-box textarea"); // 回复框
	var replyRetract = comParent.find(".comment-reply-input-box .reply-retract"); // 回复框

//  2. 
	replyBox.css({ 'display' : 'block' });

//  3. 
	replyMes.text( '回复 ' + commentUser + ':' );

//  4.
	replyTextarea.focus();

//  5. 
	replyTextarea.css({ 'text-indent' : commentUserLen * 15 + 35 });

//  6.
	replyRetract.click(function(){
		replyBox.css({ 'display':'none' });	
	});

}




/*  
	点击了评论中的某条回复后
	作用:
	1. 先隐藏所有的回复盒子 (原因是:做出只能出现一个回复框的效果 )
	2. 显示回复框
	3. 获取到回复用户名, 并添加到回复框内 (例如: 回复 徐志乔: )
	4. 回复框给上焦点
	5. 根据回复用户名的长度来判定 textarea 的 text-indent 应该缩进多少
	6. 回复框的收起按钮

	参数:
		thisElm :  当前点击的回复条
*/	
function clickReply( thisElm ){
	//console.log( thisElm.find('.publish-username').text() );

//  1.
	var index = $('.photo-comment').length-1; 
	var allReplyTextarea = $('.comment-list:eq('+ index +') .comment-reply-input-box');
	allReplyTextarea.each(function(){
		$(this).css({'display':'none'});
	});


	var replyUser = thisElm.find('.publish-username').text();
	var replyUserLen  = replyUser.length;
	var replyBox  = thisElm.parent().next('.comment-reply-input-box');
	var replyMes  = thisElm.parent().parent().find('.comment-reply-info');
	var replyTextarea  = thisElm.parent().parent().find('.comment-reply-input-box textarea');
	var replyRetract  = thisElm.parent().parent().find('.comment-reply-input-box .reply-retract');

//  2.
	replyBox.css({ 'display':'block' });

//  3.
	replyMes.text( '回复' + replyUser + ':' );

//  4.
	replyTextarea.focus();

//  5.
	replyTextarea.css({ 'text-indent' : replyUserLen * 15 + 35 });

//  6. 
	replyRetract.click(function(){
		replyBox.css({ 'display':'none' });	
	});

}


/*  
	动态设置评论块的高度,与里面的4个小分块的高度,
	.author-info-box     height : 70
	.operation-bar-box   height : 35
	.comment-content-box height : 自动分配
	.comment-input-box   height : 90
*/
function commentBlockHeight(){

	var index = $('.photo-comment').length-1; 

	// 整个评论块的高度
	 var overallHeight = $('.photo-comment-box:eq('+ index +')').height();

	$('.author-info-box:eq('+ index +')').height( 70 );
	$('.operation-bar-box:eq('+ index +')').height( 35 );
	$('.comment-input-box:eq('+ index +')').height( 90 );



	 var authorInfoHei = $('.author-info-box:eq('+ index +')').height();
	 var OpBarHei      = $('.operation-bar-box:eq('+ index +')').height();	 
	 var comInputHei   = $('.comment-input-box:eq('+ index +')').height();

	 var comAutoHei    =  overallHeight - authorInfoHei - OpBarHei - comInputHei; // 剩下来的高度全给评论块的高度
	 console.log(overallHeight +' - '+ authorInfoHei +' - '+ OpBarHei +' - '+ comInputHei +' = ' + comAutoHei);
	 var comContentHei = $('.comment-content-box:eq('+ index +')').height( comAutoHei );

}




}); // ready({