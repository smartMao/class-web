<?php
	
	function smarty_function_test($params){  //  smarty_function_插件名
		// array('参数1'=>'参数值','参数2'=>'参数值')
		//$参数1 = $params['参数1'];
		//$参数2 = $params['参数2'];

		$width = $params['width'];
		$height = $params['height'];
		$area = $width * $height;
		return $area;

	}

?>