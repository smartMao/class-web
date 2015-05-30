


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
