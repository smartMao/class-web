//  验证用户账号格式:2-8位的中文字符	
	function userRegex(str){
		var regx=/^[\u4e00-\u9fa5]{2,8}$/;
		var res=regx.exec(str);
		return res;
	}

//  验证密码格式:字母开头 6-16位的密码
	function passRegex(str){
	 	var regx=/^[a-zA-Z]\w{5,15}$/;
	    var res=regx.exec(str);
	    return res;
	}

//  验证真实姓名格式:2-4位中文字符
	function trueNameRegex(str){
		var regx=/^[\u4e00-\u9fa5]{2,4}$/;
		var res=regx.exec(str);
		return res;
	}


	var regFrom = document.getElementById('registerForm');

//  
	var r_username    = regForm.elements[0];
	var r_password    = regForm.elements[1];
	var r_passwordTwo = regForm.elements[2];
	var r_truename    = regForm.elements[3];
	var r_checkBox    = regForm.elements[4];
	var r_submit      = regForm.elements[5];

//  
	var userErrorPrompt      = regFrom.getElementsByTagName('i')[0];
	var passFormatError      = regFrom.getElementsByTagName('i')[2];
	var passErrorPrompt      = regFrom.getElementsByTagName('i')[4];
	var inconsistentPassword = regFrom.getElementsByTagName('i')[5];
	var trueNameErrorPrompt  = regFrom.getElementsByTagName('i')[7];
	var trueNameFormatError  = regFrom.getElementsByTagName('i')[8];

//
	var userOk   = regFrom.getElementsByTagName('i')[1]; 
	var pasOk    = regFrom.getElementsByTagName('i')[3]; 
	var twoPasOk = regFrom.getElementsByTagName('i')[6]; 
	var trueNameOk  = regFrom.getElementsByTagName('i')[9]; 

//  当账号框获得焦点时
	r_username.onfocus = function(){

		var userNumberValue = r_username.value;
		var userCheckRes    = userRegex(userNumberValue);

		if(userCheckRes){
			userErrorPrompt.style.display = 'none';
			userOk.style.display          = 'block';
		}else{
			userErrorPrompt.style.display = 'block';
			userOk.style.display          = 'none';
		}	
	}

//  当账号框失去焦点时
	r_username.onblur = function(){
		var userNumberValue = r_username.value;
		var userCheckRes    = userRegex(userNumberValue);

		if(userCheckRes){
			
			userErrorPrompt.style.display = 'none';
			userOk.style.display          = 'block';

		}else{

			userOk.style.display          = 'none';
			userErrorPrompt.style.display = 'block';
		}

		if(userNumberValue == ''){
			userErrorPrompt.style.display = 'none';
		}	
	}

//  当密码框1失去焦点时
	r_password.onblur = function(){
		
		var passwordValue = r_password.value;
		var passCheckRes  = passRegex(passwordValue); // 返回null 或 正确的密码字符串

		var passwordTwoValue    = r_passwordTwo.value;
		
		twoPasOk.style.display = 'none';

		if(passCheckRes){
			passErrorPrompt.style.display = 'block';
			pasOk.style.display = 'block';
		}


		if(passCheckRes == null){
			pasOk.style.display = 'none';
			passFormatError.style.display = 'block';
		}

		if(passCheckRes){
			passFormatError.style.display = 'none';
		}

		if(passwordValue == ''){
			passFormatError.style.display = 'none';
		}

		if(passCheckRes && (passwordValue == passwordTwoValue)){

		//  验证正确,且密码1等于密码2

			passErrorPrompt.style.display = 'none';
			pasOk.style.display = 'block';
			twoPasOk.style.display = 'block';
			inconsistentPassword.style.display = 'none';

		}

		if(passCheckRes && (passwordValue != passwordTwoValue)){

		//  验证正确,但密码1不等于密码2
			passErrorPrompt.style.display = 'none';
			inconsistentPassword.style.display = 'block';
			pasOk.style.display = 'block';

		}
	}

//  当密码框2失去焦点时
	r_passwordTwo.onblur = function(){

		var passwordValue    = r_password.value;
		var passwordTwoValue = r_passwordTwo.value;

		var passwordValue = r_password.value;
		var passCheckRes  = passRegex(passwordValue); 

		if(passwordTwoValue == passwordValue){

			passErrorPrompt.style.display      = 'none';
			inconsistentPassword.style.display = 'none';
			twoPasOk.style.display             = 'block';

			if(passwordTwoValue == ''){
				twoPasOk.style.display = 'none';
			}

		}else{

			passErrorPrompt.style.display      = 'none';
			inconsistentPassword.style.display = 'block';
			twoPasOk.style.display             = 'none';

		}

		if(passCheckRes == null){
		//  如果密码框1的密码验证等于null,那么密码框2的绿勾不能显示
			twoPasOk.style.display = 'none';
		}
	}

//  当真实姓名框获得焦点时
	r_truename.onfocus = function(){
		
		var trueNameValue     = r_truename.value;
		var trueNameCheckRes  = trueNameRegex(trueNameValue);

		if(trueNameCheckRes){
			return;
		}else{
			trueNameErrorPrompt.style.display = 'block';
		}	
	}

//  当真实姓名框失去焦点时
	r_truename.onblur = function(){
		
		var trueNameValue     = r_truename.value;
		var trueNameCheckRes  = trueNameRegex(trueNameValue);

		trueNameErrorPrompt.style.display = 'none';

		if(trueNameCheckRes){

			trueNameErrorPrompt.style.display = 'none';
			trueNameOk.style.display          = 'block';

		}else{

			trueNameOk.style.display          = 'none';
			trueNameErrorPrompt.style.display = 'block';

		}

		if(trueNameValue == ''){
			trueNameErrorPrompt.style.display = 'none';
		}
	}


//  点击注册按钮时的验证程序
	function checkInput(){
	
		var userNumberValue  = r_username.value;
		var userCheckRes     = userRegex(userNumberValue);

		var passwordValue    = r_password.value;
		var passCheckRes     = passRegex(passwordValue);
		var passwordTwoValue = r_passwordTwo.value;

		var trueNameValue    = r_truename.value;
		var trueNameCheckRes = trueNameRegex(trueNameValue);


		
		if(userCheckRes == null){
			alert('用户名格式不正确');
			return false;
		}

		if(passCheckRes == null){
			alert('密码格式不正确');
			return false;
		}

		if(passwordValue != passwordTwoValue){
			alert('两次密码填写不一致');
			return false;
		}

		if(trueNameCheckRes == null){
			alert('真实姓名格式不正确');
			return false;
		}

		if(r_checkBox.checked == false){
			alert('请同意《用户协议》条款');
			return false;
		}

		if(userCheckRes && passCheckRes && trueNameCheckRes && r_checkBox.checked){
			return;
		}	
	}


		
	
