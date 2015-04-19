var func = document.getElementById("funcList");
var funcList = func.getElementsByTagName("a");
for(var i=0; i<funcList.length; i++){
	
	funcList[i].onclick = function(){

		for(var j=0; j<funcList.length; j++){

			funcList[j].className = '';
			this.className = 'on';
		}
	}
}