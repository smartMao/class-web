window.onload = function(){
	

	//  焦点图
	
	var container = document.getElementById('container');
	var list = document.getElementById('list');
	var buttons = document.getElementById('buttons').getElementsByTagName('span');  // 三个小圆点
	var prev = document.getElementById('prev');   // 左箭头
	var next = document.getElementById('next');   //  右箭头
	var index = 1;   // 保存 小圆点的位置
	var animated = false;  // 表示 图片转换的运行状态
	var timer;
	
	
	//  亮小圆点的操作
	function showButton(){
		for(var i=0; i<buttons.length; i++){
			if(buttons[i].className == 'on'){  // 如果当前 哪个按钮的class是 on  那就把他修改为空
				buttons[i].className = '';
				break;   //  然后结束 （也就是 把上一个 小圆点的on 去掉就ok了）
			}
		}
		buttons[index -1].className = 'on';  // buttons对应三个小圆点，下标从0开始，但index开始就是1 ，所以buttons[index-1] 
	}
	
	//   焦点图左右箭头函数 
	function animate(offset){
		animated = true;
		//计算left值让图片移动   (传入图片要移动的left大小)
		var newLeft = parseInt(list.style.left) + offset;
		var time = 100;  //  位移 总的时间；
		var interval = 1;   //  每间隔10毫秒
		var speed = offset / (time/interval);  // 每次的位移量
		
		function go(){
			if(( speed < 0 && parseInt(list.style.left) > newLeft)  ||  (speed > 0  && parseInt(list.style.left) < newLeft)){
				list.style.left = parseInt(list.style.left) + speed + 'px';
				setTimeout(go,interval); 
			}else{
				animated = false;
				list.style.left =  newLeft  + 'px';  
				// 无限滚动 的判断
				if(newLeft > -950){   // 当跳到 附属图3 就 执行跳到正图3
					list.style.left  = -2850 + 'px';
				}
				if(newLeft < -2850){  // 当跳到 附属图1 就 执行跳到正图1
					list.style.left = -950 + 'px';
				}
			
			}
		}go();
		/*
		list.style.left =  parseInt(list.style.left) + offset + 'px';  
				// 无限滚动 的判断
				if(newLeft > -950){   // 当跳到 附属图3 就 执行跳到正图3
					list.style.left  = -2850 + 'px';
				}
				if(newLeft < -2850){  // 当跳到 附属图1 就 执行跳到正图1
					list.style.left = -950 + 'px';
				}*/
	}  //function animate(){ 
	
	function play(){
		timer = setInterval(function(){
			next.onclick();
		},5000)
	}
	function stop(){
		clearInterval(timer);
	}
	play();

	
	next.onclick = function(){
		if(index == 3){
			index = 1;
		}else{
			index += 1;
		}
		
		showButton();
		if(animated == false){
		animate(-950);  
			 //  ( -950 )  - 950    =  -1900    ( 让他的left值改变，从而图片的位置发生改变 ) 	
		}
	}
	prev.onclick = function(){
		if(index == 1){
			index = 3;
		}else{
			index -= 1;
		}
		
		showButton();
		if(animated == false){
			animate(950); 
		}
		
	}



	for(var i=0; i<buttons.length; i++){
		buttons[i].onclick = function(){
			if(this.className == 'on'){
				return;
			}
			
			var myIndex = parseInt(this.getAttribute('index')) ;   // 用getAttribute（） 获取到 index 这个自定义的属性
			var offset = -950 * (myIndex - index);
			if(animated == false){
			animate(offset);   // 更改图片的位置
			}
			index = myIndex; 
			showButton();  //  更改按钮的位置
			
		 }
		
	}
	
	container.onmouseover = stop;   //  鼠标移入
	container.onmouseout = play;   // 鼠标移走

/* 焦点图结束 */




} //  window.onload = function()