<?php

	function C($name,$method){
		/*
			这个函数完成以下三个功能:
				1. 将控制器引入进来.
				2. 对控制器进行实例化.
				3. 执行控制器里边的方法
		*/
		require_once('/libs/Controller/'.$name.'Controller.class.php');
		// eval()   把字符串 code 作为PHP代码执行.
		eval('$obj = new '.$name.'Controller(); $obj -> '.$method.'();');
	}


/*	function M($name){
		require_once('/libs/Model/'.$name.'Model.class.php');
		eval('$obj = new '.$name.'Model(); ');  // 因为模型函数并不需要执行具体的方法，所以我们并不用写出方法
		return $obj;  //  将实例化产生的对象返回回来
	}

*/
	function M($name,$folderName=null){

		//  默认$folderName=null,表示不存在. 如果外面调用M()时,传上了这个文件夹名,那就会重新赋值
		
		if(isset($folderName)){

			require_once('/libs/Model/'.$folderName.'/'.$name.'Model.class.php');
			eval('$obj = new '.$name.'Model(); '); 
			return $obj;  

		}else{

			require_once('/libs/Model/'.$name.'Model.class.php');
			eval('$obj = new '.$name.'Model(); ');  
			return $obj;  
		}
	}


	function V($name){
		require_once('/libs/View/'.$name.'View.class.php');
		eval('$obj = new '.$name.'View(); ');  
		return $obj;
	}

	function daddslashes($str){   // 这个函数的作用是对一些非法的字符进行转义  
		// addslashes()  对字符串当中的双引号之类的特殊符号进行转义
		return (!get_magic_quotes_gpc())?addslashes($str):$str;
		// 当 !get_magic_quotes_gpc()魔法符号转义 没有打开的时候 执行addslashes($str) 函数，对字符串进行转义
	}

	function ORG($path,$name,$params=array()){ 
		// $path是路径 $name是第三方类名 
		// $params是该类初始化的时候需要指定、赋值的属性，array('属性名'=>'属性值' , '属性名2'=>'属性值2', ....)
	
		require_once('libs/ORG/'.$path.$name.'.class.php');
		$obj = new $name();
		if(!empty($params)){ 
			foreach($params as $key => $value){ 
				$obj -> $key = $value;
			}
		}
		return $obj;

	}

?>