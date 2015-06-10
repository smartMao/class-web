/*  
	此js文件是layer照片展出层 评论块的ajax提交
*/
	
	
$(document).ready(function(){

	$('#photoBox img').click(function(){
		setTimeout( commentAjaxGather , 500);
	}); 

	
}); // ready({

/*  
	用于给照片切换时调用;
	
*/
function DelayCommentAjaxGather(){

	setTimeout( commentAjaxGather , 0 );

}




	
/*  所有的按钮Ajax集合
	1. 点赞
	2. 评论条回复
	3. 回复条回复
*/
function commentAjaxGather(){

	var index = $('.photo-comment').length-1; // 第 index 个.photo-comment就是

	var commentSubmit = $('.comment-submit').eq( index );

	var commentList   = $('.comment-list:eq('+ index +')'); // 评论列表
	
	var commentBox    = $('.comment-content-box').eq( index );
	//console.log(commentList);

	var photoId       = $('.photo-id').eq( index ).val();
	var userId        = $('.user-id').eq( index ).val();
	//console.log(typeof userId); 

	if( userId == 0 ){
		// 此时为没有登录状态
		// 所以并不需要下面的AJAX提交
		return false;
	}


//  如果有人手动地修改了 photoId userId
	if( isNaN( photoId ) || isNaN( userId ) ){
		alert('请勿修改photoID userID ');
		window.location = 'index.php?controller=header&method=albumIndex';
		return false;
	}


	commentSubmit.click(function(){ 
		
		commentSubmitFunc(  userId , photoId  , index , commentList , commentBox );

	}); // click

} // commentAjaxGather(){


/*	
	点击评论按钮执行的函数
*/
	function commentSubmitFunc(  userId , photoId  , index , commentList , commentBox  ){

		var index = $('.photo-comment').length-1;
		var commentText   = $('.comment-input:eq('+ index +') textarea');

		var inputRes = commentSubmitJudge( commentText ); // 点击了评论提交按钮后,返回判断结果

		if(inputRes){ 
			commentSubmitAjaxFunc( userId , photoId , commentText , index , commentList , commentBox);
		}
	}



/*  
	点击评论按钮后执行的判断
*/

	function commentSubmitJudge( commentText ){
		
		var commentData   = commentText[0].value;
		var textlen = getStrLen( commentData );

		if( commentData == '' ){
			alert('发表内容不能为空！');
			return false;
		}

		if(textlen > 400){
			alert('发表内容不得超过200个字符 , 请减少后重试');
			return false;
		}

		alert('发表成功！');
		return true;
	}	




/*  
	照片评论块ajax提交 
*/

	function commentSubmitAjaxFunc( userId, photoId, commentText, index, commentList, commentBox ){
		
		$.ajax({

			type:'POST',
			url:'index.php?controller=comment&method=photoAddComment',
			data:{ 
				'uid' : userId,
				'pid' : photoId,
				'photoComData' : commentText[0].value
			},
			success:function( data ){
				
				
				// 评论提交成功后,返回的 <li> , 插入到评论<ul>
				commentList.append( data );
				commentLastLi = $('.comment-list:eq('+ index +')>li:last').css({'display':'none'});
				
				//  让新评论平滑的出现
				commentLastLi.slideDown('slow');

				// 评论提交成功后, 如果评论列表有滚动条, 将滚动条拉到最底部
				// 然后每10毫秒校对位置,  这样做是为了上面 slideDown(), 让他平滑的出现
				var scrollTimer = setInterval(function(){
										commentBox.scrollTop( commentBox[0].scrollHeight);
								   },10);

				//  滚动条校对位置 1000 毫秒后, 停止校对
				setTimeout(function(){
					clearInterval( scrollTimer );
				},1000);


				// 发表评论成功后,  把评论块中的内容清空
				commentText[0].value = '';

				// 发表评论成功后,  把发表按钮变灰 2秒钟, 同时把按钮上click事件暂时去掉
				var commentSubmit = $('.comment-submit').eq( index );
				commentSubmit.off('click');
				commentSubmit.css({'background':'#ccc'});
				
				// 两秒钟后, 把发表按钮还原, 同时把按钮也还原click
				setTimeout(function(){
					commentSubmit.css({'background':'#2caafe'});
					commentSubmit.click(function(){
						
						commentAjaxGather();
						commentSubmitFunc(  userId , photoId  , index , commentList , commentBox );
					});
				},2000);

					

			}

		});
	}



/*  
	原因: 当在第一张照片发表了评论, 然后切换到下一张照片后，又切换回来第一张照片, 会发现并没有看到新发表的评论
	解决：这是因为点击<a>标签的切换按钮的时候, 并没有重新的去数据库加载新的评论,所以切换照片后的评论还是原来的。
	作用：每次切换图片时调用, 实时去数据库去新评论数据

	函数: prevFunc() nextFunc()
*/
	var index = $('.photo-comment').length-1;

	function prevFunc(){

		
		var photoID = parseInt($('.photo-id').eq( index ).attr('value') );
		var prev = $('.xubox_prev');
		console.log(photoID-1);
	}

	function nextFunc(){


		/*
			切换函数的运行流程:
				1. 获取当前照片的id,
				2. 通过ajax将照片id, 传给PHP
				3. PHP根据照片id, 向数据库发起 SELECT
				4. ajax的success函数, 接收PHP返回的 当前照片的评论
		*/

		var index = $('.photo-comment').length-1;
		var photoID = parseInt($('.photo-id').eq( index ).attr('value') ) + 1; // 当前照片的id
		console.log(photoID);
		

	}

/*
	此函数,在照片切换后调用,
	作用 ：在照片后, 根据参数 photoID , 向PHP发送请求, success：接收返回的新评论
*/
	function loadingNewComment(){

	}





/*  
	获取字符串长度
	获得字符串实际长度，中文2，英文1 
*/
function getStrLen(str) { 
	
	var realLength = 0, len = str.length, charCode = -1; 
	for (var i = 0; i < len; i++) { 
		charCode = str.charCodeAt(i); 
		if (charCode >= 0 && charCode <= 128){
			realLength += 1; 
		}else{
			realLength += 2; 
		}
	} 

	return realLength; 
}

	