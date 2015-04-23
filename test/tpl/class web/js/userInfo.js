/*
	调用处:admin.php?controller=admin&method=userInfoChange
	作用: 用户修改其个人资料时的文本框判断(例如:真实姓名不能小于2个字)

*/

function checkUserInfoChange(){


	var trueNameVal     = document.getElementById('trueName').value;
	var phoneVal        = document.getElementById('phone').value;
	var heightVal       = document.getElementById('height').value;
	var addressVal      = document.getElementById('address').value;
	var introductionVal = document.getElementById('introduction').value;


	var trueNameLength     = checkStrLength(trueNameVal);
	//var phoneLength        = checkStrLength(phoneVal);
	//var heightLength       = checkStrLength(heightVal);
	var addressLength      = checkStrLength(addressVal);
	var introductionLength = checkStrLength(introductionVal);
	
	//alert(phoneVal.length);

	//alert(trueNameLength);
	if(trueNameLength > 8){
		alert("真实姓名过长,请修改");
		//return false;
	}

	if(phoneVal.length > 11){
		alert("手机号码长度大于12位,请修改");
	}

	if(heightVal.length > 3){
		alert("身高太高!");
	}

	if(addressLength > 100){
		alert("地址过长,请修改");
	}

	if(introductionLength > 200){
		alert("个人简介过长(限定100字)");
	}

}

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