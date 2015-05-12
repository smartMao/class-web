
var resourceTitle = document.getElementById('resourceTitle');
var resourceURL   = document.getElementById('resourceURL');
var submit 		  = document.getElementById('submit');

submit.onclick = function(){
	
	if( resourceTitle.value == '' ){ alert('资源名称不能为空');return false; }
	if( resourceURL.value == '' ){ alert('资源地址不能为空');return false; }

}
