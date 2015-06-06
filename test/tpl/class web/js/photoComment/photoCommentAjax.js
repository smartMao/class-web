/*  
	此js文件是layer照片展出层 评论块的ajax提交
*/
	
	
$(document).ready(function(){

	$('#photoBox img').click(function(){
		setTimeout( commentAjaxGather , 100);
	}); 

	
}); // ready({



/*  
	所有的按钮Ajax集合
	1. 点赞
	2. 评论条回复
	3. 回复条回复
*/
function commentAjaxGather(){

	var index = $('.photo-comment').length-1; // 第 index 个.photo-comment就是

	var commentSubmit = $('.comment-submit').eq( index );
	var commentText   = $('.comment-input:eq('+ index +') textarea');
	var commentList   = $('.comment-list:eq('+ index +')>li');
	console.log(commentList);

	var photoId       = parseInt( $('.photo-id').eq( index ).val() );
	var userId        = parseInt( $('.user-id').eq( index ).val() );
	//console.log(typeof userId); 




//  如果有人手动地修改了 photoId userId
	if( isNaN( photoId ) || isNaN( userId ) ){
		alert('请勿修改photoID userID ');
		window.location = 'index.php?controller=header&method=albumIndex';
		return false;
	}


	commentSubmit.click(function(){

		var commentData   = commentText[0].value;
		var commentData   = commentText[0].value;
		var textlen = getStrLen( commentData );

		commentText[0].value = ' ';
		alert('发表成功！');

		if(textlen > 400){
			alert('发表内容不得超过200个字符 , 请减少后重试');
			return false;
		}

/*  
	需要的值:
		1. uid  2. pid  3.content
*/

		$.ajax({
			type:'POST',
			url:'index.php?controller=comment&method=photoAddComment',
			data:{ 
				'uid' : userId,
				'pid' : photoId,
				'photoComData' : commentData
			},
			success:function( data ){
				///  昨晚做到这里
				data.prependTo( commentList );
			}

		});


	
			
			

	
	});


	
	

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

	