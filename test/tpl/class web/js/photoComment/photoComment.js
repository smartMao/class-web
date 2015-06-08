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

		setTimeout( commentFuncGather , 200);	  //  点击评论显示回复框
		setTimeout( newCommentShowReply , 200 );  //  点击新的评论也会显示回复框	
	}); 

	// 当浏览器窗口改变大小时, 也动态的改变评论块的高度
	$(window).resize(function(){   setTimeout( commentBlockHeight , 300 );	});
	
}); // ready({


/*  
	调用处: 
		1. 点击照片出现Layer展示层时.
		2. 点击了layer展示层的翻页Icon时

	作用: 把照片评论块所需要的功能都 集中到一块.
*/
function commentFuncGather(){


	var index = $('.photo-comment').length-1; // 第 index 个.photo-comment就是

	var commentList = $('.comment-list:eq('+index+')>li .comment-content-block-small-box');
	var replyList   = $('.comment-list:eq('+index+')>li .reply-list>li');
	var commentIcon = $('.operation-comment').eq( index );

	// 如果点击了layer评论块中的某一条评论, 显示出回复框, 并添加信息		
	commentList.click(function(){ clickComment( $(this) ) });

	// 如果点击了layer评论块中的某一条回复, 显示出回复框, 并添加信息
	replyList.click(function(){ clickReply( $(this) ) });

	// 点击操作栏的 评论icon
	commentIcon.click(function(){
		clickComIcon();
	});

	//  动态设置评论块的高度
	commentBlockHeight();	
	
}



/* 
	作用：Layer照片翻页层点击翻页的时候, 评论也跟着翻页, 但翻页后的评论块高度会乱,这个函数就把评论块调回来 
 */
function switchCommentHeiAuto(){
	setTimeout( commentFuncGather , 100 );
	setTimeout( newCommentShowReply , 200 );
}


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
	hideAllReplyTextarea();

	//  thisElm 代表当前的被点击的 评论条
setTimeout(function(){

	var commentUser =  thisElm.find(".comment-content-block-username a").text();
	var commentUserLen = commentUser.length;

	 // 由于评论条和回复条同级, 需要跳到父元素后才能获取到回复后面的回复框
	var comParent = thisElm.parent(".comment-content-block");
	var replyBox      = comParent.find(".comment-reply-input-box"); // 获取当前的回复盒子
	var replyMes      = comParent.find(".comment-reply-info"); // 回复框内容提示 ( 例如: 回复 徐志乔： )
	var replyTextarea = comParent.find(".comment-reply-input-box textarea"); // 回复框
	var replyRetract = comParent.find(".comment-reply-input-box .reply-retract"); // 回复框

	//  当前点击评论的id
	var nowCommentID = thisElm.parent

//  2 3 4 5 6
	showReplyTextarea( commentUser, commentUserLen , replyBox , replyMes , replyTextarea , replyRetract );




},50);
	
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

//  1.
	hideAllReplyTextarea();

	var replyUser = thisElm.find('.publish-username').text();
	var replyUserLen  = replyUser.length;
	var replyBox      = thisElm.parent().next('.comment-reply-input-box');
	var replyMes      = thisElm.parent().parent().find('.comment-reply-info');
	var replyTextarea  = thisElm.parent().parent().find('.comment-reply-input-box textarea');
	var replyRetract   = thisElm.parent().parent().find('.comment-reply-input-box .reply-retract');

//  2 3 4 5 6
	showReplyTextarea( replyUser,  replyUserLen , replyBox,  replyMes , replyTextarea , replyRetract  );
}


/* 
	调用处 ： clickComment() 、 clickReply()
	作用: 点击 评论条/回复条 时展示回复框
	参数:
		user: 要回复给谁
		userLen: 用户名长度
		replyBox : 回复盒子
		replyMes : 回复信息 (例如: 回复 徐志乔：)
		replyTextarea : 回复框
		replyRetract : 回复框的收起按钮
*/
function showReplyTextarea( user, userLen , replyBox , replyMes , replyTextarea , replyRetract ){

	replyBox.show({ 'display':'block' });

	replyMes.text( '回复' + user + ':' );

	replyTextarea.focus();

	replyTextarea.css({ 'text-indent' : userLen * 15 + 35 });
 
	replyRetract.click(function(){
		replyBox.hide({ 'display':'none' },'slow');	
	});

}

/*  
	调用处 ： clickComment() 、 clickReply()
	作用: 收起所有的回复框
*/
function hideAllReplyTextarea(){
	var index = $('.photo-comment').length-1; 
	var allReplyTextarea = $('.comment-list:eq('+ index +') .comment-reply-input-box');

		allReplyTextarea.hide({'display':'none'},'slow');
	
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
	var comContentHei = $('.comment-content-box:eq('+ index +')').height( comAutoHei );

}




/*  
	让新发表的评论也可以即时的显示回复框
*/
	function newCommentShowReply(){

		var index       = $('.photo-comment').length-1;
		var commentList = $('.comment-list').eq( index );

		commentList.click( commentFuncGather );
	}




/*  
	点击了操作栏的评论icon
*/
function clickComIcon(){
	var index = $('.photo-comment').length-1; 

	var commentTextarea = $('.comment-input:eq('+ index +') textarea');
	commentTextarea.focus();
	commentTextarea.attr({'placeholder' : '在此输入评论' });
}














