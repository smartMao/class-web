


var checkForm = document.getElementById('checkForm');
var checkBox  = document.getElementsByTagName('input');
var submit    = document.getElementById('submit'); // 确认
var photoBatchBtn = document.getElementById('photoBatchBtn'); // 批量删除
var photoBatchDelCancel = document.getElementById('photoBatchDelCancel'); // 取消

photoBatchBtn.onclick = function(){
	
	for(var i=0; i<checkBox.length-1; i++){ // 这个length 减一是因为表单最后还有个submit
		checkBox[i].style.display = 'block';
	}
	photoBatchDelCancel.style.display = 'block';
	submit.style.display = 'block';
}

photoBatchDelCancel.onclick = function(){
	for(var i=0; i<checkBox.length-1; i++){ // 这个length 减一是因为表单最后还有个submit
		checkBox[i].style.display = 'none';
	}
	this.style.display = 'none';
	submit.style.display = 'none';
}





/*
submit.onclick = function(){


	for(var i=0; i<checkBox.length; i++){

		//alert(checkBox[i].checked);
		
		if(checkBox[i].checked == true){
			alert(checkBox[i].value);
		}else{
			alert("没有选中的");
		}

	}*/




