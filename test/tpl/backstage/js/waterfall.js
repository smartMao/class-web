

/* 
	瀑布流布局函数
	参数: parent ： 父元素 main
	      clientWidthNum : 传入int型 1 或 2 ， 1代表js clientWidth 自动获取页面宽
	      					2 代表 手动指定950页面宽
*/ 
	function waterfall( parent , clientWidthNum ){

		// 将parent下的 所有<li> 取出来
		var main = document.getElementById(parent);
		var list = main.getElementsByTagName('li');

		var listHeight = []; //  存放所有 list 的高度

		for(var i=0; i<list.length; i++){
			listHeight.push( list[i].offsetHeight ); // 循环取出所有的高度
		}

		//  计算列数 设置main的宽 
		var listWidth = list[0].offsetWidth;
		var cols      = countCols( listWidth , clientWidthNum ); // 列数
		var mainWidth = cols * listWidth;

		main.style.cssText = 'width:'+ mainWidth +'px;margin:0px auto;';

		//  设置图片位置
		var heightArr = []; // 存放第一行全部图片的高度
		for(var i=0; i<list.length; i++){
			if( i < cols ){
				heightArr.push( list[i].offsetHeight );
			}else{

				var minHeight = Math.min.apply( null, heightArr ); // 找出 heightArr 其中的最小值
				var index = getMinHeightIndex( heightArr , minHeight );

				list[i].style.position = 'absolute';
				list[i].style.top  = minHeight + 'px';			
				list[i].style.left = list[index].offsetLeft + 'px';

				// 更新 heightArr 把最小的高度 加上 新的高度 重新存入数组里
				heightArr[index] = heightArr[index] + list[i].offsetHeight; // 更新
			}
		}

		var maxColsWidth = Math.max.apply( null ,  heightArr); // 选出完成瀑布流后 , 最高的一列,作为父元素main的高
		main.style.height = 50 + maxColsWidth+'px';
		

	}


/*
	计算列数
	//  计算整个页面显示的列数 ( 页面Width / list[0]的宽 )
*/
	function countCols( listWidth ,clientWidthNum ){
		if( clientWidthNum == 1 ){
			var pageWidth = document.documentElement.clientWidth;
		}else if( clientWidthNum == 2 ){
			var pageWidth = 950;
		}

		var cols = Math.floor( pageWidth / listWidth );
		return cols;
	}


/*
	获取高度数组中最小值的索引
*/
	function getMinHeightIndex( heightArr , minHeight ){
		for(var i=0; i<heightArr.length; i++){
			if( heightArr[i] == minHeight){
				return i;
			}
		}
	}