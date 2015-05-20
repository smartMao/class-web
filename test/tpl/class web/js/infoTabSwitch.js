
/*  info块  */

	function $(id){
		return document.getElementById(id);
	}

	var dynamicContentSchedule = $('dynamicContentSchedule');
	var dynamicContentTieba = $('dynamicContentTieba');
	var dynamicContentScheduleUl = $('dynamicContentScheduleUl');
	var dynamicContentTiebaUl = $('dynamicContentTiebaUl');


	dynamicContentSchedule.onclick = function(){
		/*
			1. 显示自己
			2. 隐藏tieba
			3. tieba的class 为 原始刷新的class
			4. 先删除现在的class
			5. 添加点击后的class
		*/
		dynamicContentScheduleUl.style.overflow = "visible";
		dynamicContentScheduleUl.style.display = 'block';
		dynamicContentTiebaUl.style.display = "none";
		dynamicContentTieba.className = "dynamic-content-tieba";
		this.className = "";
		this.className += " dynamic-content-schedule-select";

	}
	dynamicContentTieba.onclick = function(){

		dynamicContentScheduleUl.style.display = "none";
		dynamicContentTiebaUl.style.display = "block";
		dynamicContentSchedule.className = "dynamic-content-schedule";
		this.className = "";
		this.className += " dynamic-content-tieba-select";
	}
	
	if(dynamicContentSchedule.className = "dynamic-content-schedule"){  
		// 如果页面刷新一开始，没有选中，但内容又是在schedule。（不懂可注释if试试看）
				dynamicContentSchedule.className = "";
				dynamicContentSchedule.className += " dynamic-content-schedule-select";
	}


/*  info块结束  */

