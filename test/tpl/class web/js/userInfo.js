/*
	调用处:admin.php?controller=admin&method=userInfoChange
	作用: 用户修改其个人资料时的文本框判断(例如:真实姓名不能小于2个字)

*/

function checkUserInfoChange(){


	var trueNameVal     = document.getElementById('trueName').value;
	var phoneVal        = document.getElementById('phone').value;
	var heightVal       = document.getElementById('height').value;
	var addressVal      = document.getElementById('address').value;
	var schoolVal       = document.getElementById('school').value;
	var introductionVal = document.getElementById('introduction').value;


	var trueNameLength     = checkStrLength(trueNameVal);
	//var phoneLength        = checkStrLength(phoneVal);
	//var heightLength       = checkStrLength(heightVal);
	var addressLength      = checkStrLength(addressVal);
	var schoolLength       = checkStrLength(schoolVal);
	var introductionLength = checkStrLength(introductionVal);
	
	//alert(phoneVal.length);

	//alert(trueNameLength);
	if(trueNameLength > 8){
		alert("真实姓名过长,请修改");
	}

	if(phoneVal.length > 11){
		alert("手机号码长度大于12位,请修改");
	}

	if(heightVal.length > 3){
		alert("身高太高!");
	}

	if(schoolLength > 30){
		alert("学校名过长！");
	}

	if(addressLength > 100){
		alert("地址过长,请修改");
	}

	if(introductionLength > 200){
		alert("个人简介过长(限定100字)");
	}

}

// 返回字符长度	
function checkStrLength(data){
	var str = escape(data);
    for(var i = 0, length = 0;i < str.length; i++, length++) {
    	if(str.charAt(i) == "%") {
   		 	if(str.charAt(++i) == "u") {
   				 i += 3;
    			length++;
    		}
   			i++;
    	}
    }
    
    return length;
}


/*	
	调用处：userInfoShow.html 
	作用：当用户想要修改头像时,点击了file框, onchange捕获到了就执行当前方法 ( 触发submit按钮让$_FILES提交到PHP )
*/
	function triggerSubmit(){
		
		var submit = document.getElementById('submit');
		submit.click();
	}