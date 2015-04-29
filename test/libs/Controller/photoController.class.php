<?php

class photoController{

	//  此控制器仅为前端照片控制器


//  进入相册 (根据点击哪个相册,传入ID进行查询)
	public function photoList(){

		$res = M('front')->photoList( $_GET['albumID'] );

		if( !$res ){ $this->showmessage( '打开相册失败!请重试' , 'admin.php?controller=header&method=albumIndex' ); }

		$photoData['photoData'] = $res;
		VIEW::assign($photoData);
		VIEW::display('tpl/class web/classPhoto/photoList.html');


		
	}
	




















//  弹框后跳转方法
	private function showmessage($mes, $url){
		echo "<script>alert('$mes');window.location.href='$url'</script>";
		exit;
	}


}





?>