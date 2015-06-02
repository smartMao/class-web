// JavaScript Document



//  登录浮层

//  获取元素对象

  function g(id){ return document.getElementById(id); } // 这是一个API


//  自动居中  -  用于登录浮层
//  el = Element
 	function autoCenter(el){
 		var bodyW = document.documentElement.clientWidth;   // 取得网页可视区域宽
 		var bodyH = document.documentElement.clientHeight;

 		var elW = el.offsetWidth;  //  获得传入来的el参数的宽度  （offsetWidth = width + padding + border）
 		var elH = el.offsetHeight;
  // 设置 left top 居中 （页面总宽度减去元素宽度除于2）
 		el.style.left = (bodyW - elW) / 2 + 'px'; 
 		el.style.top  = (bodyH - elH) / 2 + 'px';
 	}


//  自动全屏  -  用于遮罩

	function fillToBody(el){
		//el.style.width = 1366 + 'px';  
		el.style.width  = document.documentElement.clientWidth + 'px'; // 当前传入进来的el的宽度等于网页可视宽度(网页有多宽他就有多宽)
		el.style.height = document.documentElement.clientHeight + 'px';
	}


	var mouseOffsetX = 0;  //  鼠标相对于标题栏左上角的偏移
	var mouseOffsetY = 0;

	var isDraging = false;  //  是否可以拖动状态

//  鼠标事件1  -  在标题栏按下的时候 （计算出鼠标对拖拽元素的左上角的坐标，并且标记元素为可拖动）
	g('dialogTitle').addEventListener('mousedown',function(e){

		var e = e || window.event;
		mouseOffsetX = e.pageX - g('dialog').offsetLeft;   // 鼠标对于document的X坐标 减去  登录浮层对于document的X坐标  就得到  鼠标对于登录浮层的位置
		mouseOffsetY = e.pageY - g('dialog').offsetTop;
		isDraging = true;

	//  总结:鼠标按下的时候： 获得 鼠标相对于登录浮层左上角的偏移 有X轴 有Y轴， 然后把拖动状态设为true


	})

	g('dialogTitle-register').addEventListener('mousedown',function(e){
		var e = e || window.event;
		mouseOffsetX = e.pageX - g('dialog-register').offsetLeft;   
		mouseOffsetY = e.pageY - g('dialog-register').offsetTop;
		isDraging = true;
	})
//  鼠标事件2  -  鼠标移动时 （要检测，元素是否为可拖动状态，如果是，则更新元素的位置 [ ps: 要减去 鼠标事件1中的偏移 ] ）
	document.onmousemove = function(e){

		var e = e || window.event; 
		var mouseX = e.pageX;  //  获取到鼠标移动事件发生的时候，鼠标相对于document的X坐标
		var mouseY = e.pageY;
 
		var moveX = 0;  //  浮层元素的新位置
		var moveY = 0;

		if(isDraging === true){
			
			moveX = mouseX - mouseOffsetX;   // 计算出浮层元素的新位置
			moveY = mouseY - mouseOffsetY;

			// 限定浮层的拖动范围 （不让他拖出页面之外	）
			/*
				范围限定   moveX > 0 并且 moveX < (页面宽度 - 浮层宽度)
						   moveY > 0 并且 moveY < (页面高度 - 浮层高度)

				g('dialog').style.left = moveX > 0 && moveX < (1350 - 380)
			*/

			var pageWidth  = document.documentElement.clientWidth;  //  页面的可视宽度
			var pageHeight = document.documentElement.clientHeight;

			var dialogWidth  = g('dialog').offsetWidth;   // 获取浮层宽度
			var dialogHeight = g('dialog').offsetHeight;

			var maxX = pageWidth  - dialogWidth;
			var maxY = pageHeight - dialogHeight;				

			var moveX = Math.min( maxX , Math.max(0,moveX) );  
			var moveY = Math.min( maxY , Math.max(0,moveY) );  
			
			var RdialogWidth  = g('dialog-register').offsetWidth;   // 获取浮层宽度
			var RdialogHeight = g('dialog-register').offsetHeight;
			
			var RmaxX = pageWidth  - RdialogWidth;
			var RmaxY = pageHeight - RdialogHeight;				

			var RmoveX = Math.min( RmaxX , Math.max(0,moveX) );  
			var RmoveY = Math.min( RmaxY , Math.max(0,moveY) );  

			//  其实就是限定moveX 这个用来设置left的值 不要负值，不要太大， 大于 0 小于 maxX

			/*
			先解析里面的Math.max()，两个参数，哪个大返回哪个 如果moveX是负值的话 （就是永远都不会让moveX小于0）。
			外面的 Math.min()哪个小返回哪个, 限定在maxX （就是永远都不会让 moveX 大于 maxX ）
			*/
				g('dialog').style.left = moveX + 'px';
				g('dialog').style.top  = moveY + 'px';
				
				g('dialog-register').style.left = RmoveX + 'px';
				g('dialog-register').style.top  = RmoveY + 'px';
			
		}
	}



//  鼠标事件3  -  鼠标松开的时候 （标记元素为不可拖动状态即可）
	document.onmouseup = function(){
		isDraging = false;   
	}

	var body = document.getElementsByTagName('body');

//  展现登录浮层
	function showDialog(){
		
		g('dialog').style.display = 'block';
		g('mask').style.display = 'block';
		body[0].style.overflow = 'hidden';
		body[0].setAttribute('onmousewheel','return false;');  //  禁止滚轮滚动
		fillToBody(g('mask'));
		autoCenter(g('dialog'));
		
		//body[0].style.overflowX = 'hidden';
	}
	function RshowDialog(){
		g('dialog-register').style.display = 'block';
		g('mask').style.display = 'block';
		body[0].style.overflow = 'hidden';
		body[0].setAttribute('onmousewheel','return false;');  //  禁止滚轮滚动
		fillToBody(g('mask'));
		autoCenter(g('dialog-register'));
	}


//  隐藏登录浮层
	function hideDialog(){
		g('dialog').style.display = 'none';
		g('mask').style.display = 'none';
		body[0].setAttribute('onmousewheel','');  //  恢复滚轮滚动
		body[0].style.overflow = 'visible';

	}
	function RhideDialog(){
		g('dialog-register').style.display = 'none';
		g('mask').style.display = 'none';
		body[0].setAttribute('onmousewheel','');  //  恢复滚轮滚动
		body[0].style.overflow = 'visible';
	}
//  当调整页面窗口大小的时候
	window.onresize = function(){
		autoCenter(g('dialog'));
		autoCenter(g('dialog-register'));
		fillToBody(g('mask'));
	}


       
	









