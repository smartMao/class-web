/*
	调用处:backstage/photo/photoEdit.html
	用处:点击修改(打开)图片后,图片立即显示到相应的框里 (并没有点击按钮,并没有上传服务器)
*/

function showPhotoCover(){
	var myFile = document.getElementById('photoCoverChange');
	var myPhoto = document.getElementById('photoCoverImage');
	myFile.onchange = function(){
		
		function preView(file,img) {
			img.src = window.URL.createObjectURL(file.files[0]); 
		}

		preView(myFile,myPhoto);
	}
}

/*
	调用处:backstage/photo/photoEdit.html
	用处:根据服务器传出来的相册权限 ( 1 / 2 / 3 ) 选择相应的下拉框 
*/
function selectPhotoPower(){
	var powerHideVal = document.getElementById('photoPowerHide').value;
	var powerSelect = document.getElementsByTagName('option');
	switch(powerHideVal){
		case '1':
			powerSelect[0].selected = 'selected';
			break;
		case '2':
			powerSelect[1].selected = 'selected';
			break;
		case '3':
			powerSelect[2].selected = 'selected';
			break;		
	}
}