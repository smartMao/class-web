
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



