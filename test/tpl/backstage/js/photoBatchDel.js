


var checkForm = document.getElementById('checkForm');
var checkBox  = document.getElementsByTagName('input');
var submit    = document.getElementById('submit'); // 确认
var photoBatchBtn = document.getElementById('photoBatchBtn'); // 批量删除
var photoBatchDelCancel = document.getElementById('photoBatchDelCancel'); // 取消
var photoSelectAll = document.getElementById('photoSelectAll');  // 全选
var photoInverseAll = document.getElementById('photoInverseAll');  // 反选

var liList = document.getElementsByTagName('li'); // <li> 标签


if( liList.length == 0 ){
	photoBatchBtn.style.display = 'none';
}



photoBatchBtn.onclick = function(){ // 点击批量删除
	
	for(var i=0; i<checkBox.length-1; i++){ // 这个length 减一是因为表单最后还有个submit
		checkBox[i].style.display = 'block';
	}
	photoBatchDelCancel.style.display = 'block';
	submit.style.display = 'block';
	photoSelectAll.style.display = 'block';
	photoInverseAll.style.display = 'block';

}

photoBatchDelCancel.onclick = function(){  // 点击取消按钮
	for(var i=0; i<checkBox.length-1; i++){ // 这个length 减一是因为表单最后还有个submit
		checkBox[i].style.display = 'none';
	}
	this.style.display = 'none';
	submit.style.display = 'none';
	photoSelectAll.style.display = 'none';
	photoInverseAll.style.display = 'none';
}


photoSelectAll.onclick = function(){  // 点击全选按钮
	for(var i=0; i<checkBox.length-1; i++){ // 这个length 减一是因为表单最后还有个submit
		checkBox[i].checked = true;
	}
}


photoInverseAll.onclick = function(){  // 点击反选按钮
	for(var i=0; i<checkBox.length-1; i++){ // 这个length 减一是因为表单最后还有个submit
		checkBox[i].checked = false;
	}
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




