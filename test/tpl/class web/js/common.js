/*
	调用处: 前端用户资料展示页当中的 ‘ 修改个人资料按钮 ’
	作用: 当点击 ‘ 修改个人资料按钮 ’ 这个按钮的时候, 根据当前的Url 来判断该跳转到哪一个页面
*/
	function changeUserInfoBtn(){
		// if判断避免重复点击
		var now_url = window.location.href;  
		var urlArr = now_url.split("/"); 
		var url   = urlArr[urlArr.length-1]; //  获取当前Url 

		var showUserInfoUrl   = 'index.php?controller=admin&method=UserInfoList';
		var changeUserInfoUrl = 'index.php?controller=admin&method=userInfoChange';

		//  如果点击了 ‘修改个人资料按钮’  如果当前的url是在 用户资料展示页面  , 那就跳转到 用户资料修改页面
		if( url == showUserInfoUrl || url == showUserInfoUrl+'#' ){
			window.location = changeUserInfoUrl;
		}

		//  如果点击了 ‘修改个人资料按钮’  如果当前的url是在 用户资料修改页面  , 那就 return false
		if( url == changeUserInfoUrl || url == changeUserInfoUrl+'#' ){
			return false;
		}

	}


//  返回上一层
	function goBack(){
		history.go(-1);

	}



/*
	调用处: class web / userInfoChange.html
	用处:   为生日select创建option
*/
function createOption(){
	var selectYear = document.getElementById('year');
	var selectMonth = document.getElementById('month');
	var selectDay = document.getElementById('day');

	for(var i=1960; i<2010; i++){
				
		var YearOption = document.createElement('option');  // 创建option标签
		YearOption.setAttribute('name',i);  // 附上name属性
		YearOption.innerText = i;  //  附上内容
		selectYear.appendChild(YearOption); // 放在select里
	}

	for(var i=1; i<13; i++){

		if(i<10){
			i = '0'+i;
		}
				
		var MonthOption = document.createElement('option');  // 创建option标签
		MonthOption.setAttribute('name',i);  // 附上name属性
		MonthOption.innerText = i;  //  附上内容
		selectMonth.appendChild(MonthOption); // 放在select里
	}

	for(var i=1; i<32; i++){

		if(i<10){
			i = '0'+i;
		}
				
		var DayOption = document.createElement('option');  // 创建option标签
		DayOption.setAttribute('name',i);  // 附上name属性
		DayOption.innerText = i;  //  附上内容
		selectDay.appendChild(DayOption); // 放在select里
	}

}




/*
	调用处: class web / userInfoChange.html
	用处:   从隐藏域获取数据库传过来的用户生日,与本地option中的值比对,如一致,selected选上
*/
function birthdayValue(){

// 获取隐藏域
	var year  = document.getElementById('yearHidd').value; 
	var month = document.getElementById('monthHidd').value;
	var day   = document.getElementById('dayHidd').value;

// 获取各个<select>
	var selectYear = document.getElementById('year');  
	var selectMonth = document.getElementById('month');
	var selectDay = document.getElementById('day');




	for(var i=0; i<selectYear.length; i++){
		
		var yearValue = selectYear.getElementsByTagName('option')[i].innerText;

		if(yearValue == year){
			selectYear.getElementsByTagName('option')[i].selected = 'selected';
		}
	}

	for(var i=0; i<selectMonth.length; i++){
		var monthValue = selectMonth.getElementsByTagName('option')[i].innerText;
		
		if(monthValue == month){
			selectMonth.getElementsByTagName('option')[i].selected = 'selected';
		}
	}


	for(var i=0; i<selectDay.length; i++){
		var dayValue = selectDay.getElementsByTagName('option')[i].innerText;
		
		if(dayValue == day){
			selectDay.getElementsByTagName('option')[i].selected = 'selected';
		}
	}

}




/*
	调用处: class web / userInfoChange.html
	用处:   判断从数据库出来的代表性别的int 和 本地代表性别的int 相比较,相同的选中单选框
*/
function sexValue(){

//  从数据获取来的int
	var sexValue = document.getElementById('sexHidd').value;

//  获取数值int  3代表男,2代表女,1代表保密,
	var sexMan = document.getElementById('man');
	var sexWoman = document.getElementById('woman');
	var sexSecrecy = document.getElementById('secrecy');

//  判断从数据库出来的代表性别的int 和 本地代表性别的int 相比较
	if(sexValue == sexMan.value){
		sexMan.setAttribute('checked','checked');
	}

	if(sexValue == sexWoman.value){
		sexWoman.setAttribute('checked','checked');
	}

	if(sexValue == sexSecrecy.value){
		sexSecrecy.setAttribute('checked','checked');
	}


}