
/*
	用处:用于鼠标移动到用户头像后显示
*/
function userPhotoHover(){

	var userOptions    = document.getElementById("userOptions");    // 账号设置、退出登录块
	var userPhotoFrame = document.getElementById("userPhotoFrame");  // 用户头像盒子

	userPhotoFrame.onmouseover = function(){
		userOptions.style.display = "block";
	}

	userPhotoFrame.onmouseout = function(){
		userOptions.style.display = "none";
	}

	userOptions.onmouseover = function(){
		userOptions.style.display = "block";
	}

	userOptions.onmouseout = function(){
		userOptions.style.display = "none";
	}
}

userPhotoHover();


/*	
	调用处：userInfoShow.html 
	作用：当用户想要修改头像时,点击了file框, onchange捕获到了就执行当前方法 ( 触发submit按钮让$_FILES提交到PHP )
*/
	function triggerSubmit(){
		
		var submit = document.getElementById('submit');
		submit.click();
	}



