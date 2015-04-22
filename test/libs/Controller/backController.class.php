<?php

class backController{


//  后台主页
	public function backIndex(){
	
		if(isset($_COOKIE['username'])){

			//  如果COOKIE有值
			VIEW::display('tpl/backstage/BackHome.html');

		}else if(isset($_SESSION['auth']['userName'])){

			// 如果SESSION有值
			VIEW::display('tpl/backstage/BackHome.html');

		}else{

			// 如果SESSION 与 COOKIE 没值
			VIEW::display('tpl/class web/index2.html');
		}
	}


//  展示文章修改页
	public function changeArticle(){
		$backobj = M('article','backArticle');
		$res = $backobj -> changeArticle($_GET['id']);
		$res2['changeInfo'] = $res[0];

		VIEW::assign($res2);
		VIEW::display('tpl/backstage/article/articleChange.html');
	}

//  文章修改操作 (点击提交按钮更新修改数据)
	public function changeArticleOk(){
		$backobj = M('article','backArticle');
		$id = $_GET['id'];
		$res = $backobj -> changeArticleOk($id);

		if($res){
			$this -> showmessage('更新成功','admin.php?controller=back&method=artList');
		}else{
			$this -> showmessage('更新失败,标题或内容为空的！',
				"admin.php?controller=back&method=changeArticle&id=$id");
		}
	
		
	}


//  展示文章添加页
	public function addArticle(){


		$authobj = M('auth');
		$userInfo = $authobj -> getauth();	
		VIEW::assign($userInfo);
		VIEW::display('tpl/backstage/article/articleAdd.html');
	}

//  展示后台主页header的信息
	public function backHeader(){
		$userInfo = $authobj -> getauth();
		VIEW::assign($userInfo);
		VIEW::display('tpl/backstage/header.html');
	}

//  文章添加操作
	public function artAdd(){
		$backobj = M('article','backArticle');
		$addRes  = $backobj -> artAdd($_POST); 

		switch($addRes){
			case is_int($addRes):
				$this -> showmessage('文章添加成功！','admin.php?controller=back&method=artList');
				break;
			case 'titleFalse':
				$this -> showmessage('文章标题不能为空！','admin.php?controller=back&method=addArticle');
				break;
			case 'contentFalse':
				$this -> showmessage('文章内容不能为空！','admin.php?controller=back&method=addArticle');
				break;
		}

	}

//  展示文章列表页
	public function artList(){
		$backobj = M('article','backArticle');
		$res = $backobj -> artList();
		
		$count = count($res);  // 统计有多少篇文章
		$artCount['artCount'] = $count;

		$res2['artInfo'] = $res; // 将所有文章信息保存在$res2['artInfo']里方便smarty调用
		
		//  smarty 操作二维数组
		VIEW::assign($res2);
		VIEW::assign($artCount);
		VIEW::display('tpl/backstage/article/article.html');
	}

//  文章删除操作
	public function artDel(){

		if(empty($_GET)){  

			// 如果GET是空的,就证明没有点确认按钮,不用删除

		}else{
			
			// GET不是空的,点了确认按钮,执行删除操作
			
			$backobj = M('article','backArticle');
			$res = $backobj -> artDel($_GET['id']);

			if($res) $this -> showmessage('删除成功！','admin.php?controller=back&method=artList');
			
		}
		
	}


//  展示用户列表页
	public function userList(){
		
		$backobj = M('user','backUser');
		$res = $backobj -> userList();
		$count = count($res);
		$count2['count'] = $count;
		$res2['userList'] = $res;

		VIEW::assign($count2);
		VIEW::assign($res2);
		VIEW::display('tpl/backstage/user/user.html');


	}

//  展示用户详细资料
	public function userDetails(){

		$backobj = M('user','backUser');
		$res = $backobj -> userDetails($_GET['id']);
		$res2['userInfo'] = $res[0];

		VIEW::assign($res2);
		VIEW::display('tpl/backstage/user/userInfoChange.html');

	}

//  用户详细资料操作更新完成
	public function userDetailsOk(){
		/*echo "<pre>";
		var_dump($_GET);
		var_dump($_POST);*/

		$backobj = M('user','backUser');
		$res = $backobj -> userInfoChangeWork($_POST,$_GET['id']);
		if(!$res){
			$this -> showmessage('更新成功！','admin.php?controller=back&method=userList');
		}

	}



//  用户删除操作
	public function userDel(){

		if(empty($_GET)){  

			// 如果GET是空的,就证明没有点确认按钮,不用删除

		}else{
			
			// GET不是空的,点了确认按钮,执行删除操作
			
			$backobj = M('user','backUser');
			$res = $backobj -> userDel($_GET['id']);

			if($res) $this -> showmessage('删除成功！','admin.php?controller=back&method=userList');
			
		}
		
	}


//  展示相册列表
	public function albumList(){
		$res = M('album','backPhoto') -> albumList();
		$albumList['albumList'] = $res; // 由于奇怪的smarty,调试出来这样写
		//var_dump($photoList['photoList']);
		//var_dump(empty($photoList['photoList']));
		if(empty($albumList['albumList'])){
			VIEW::display('tpl/backstage/photo/album/album2.html');
		}else{
			VIEW::assign($albumList);
			VIEW::display('tpl/backstage/photo/album/album.html');
		}
		
		
	}



//  创建相册页展示
	public function showAlbumCreate(){
		VIEW::display('tpl/backstage/photo/album/albumCreate.html');
	}

// 	创建相册操作
	public function albumCreateOp(){	
				

		$res = M('album','backPhoto')->albumCreateOp($_POST,$_FILES);

		$jumpUrl = 'admin.php?controller=back&method=showAlbumCreate';

		switch ($res) {
			case 1:
				$this -> showmessage('上传文件超过了PHP配置文件中的upload_max_filesize选项的值',
					$jumpUrl);
				break;
			case 2:
				$this -> showmessage('超过了表单max_file_size限制的大小',$jumpUrl);
				break;
			case 3:
				$this -> showmessage('文件部分被上传',$jumpUrl);
				break;
			case 4:
				$this -> showmessage('没有选择上传文件',$jumpUrl);
				break;
			case 6:
				$this -> showmessage('没有找到临时目录',$jumpUrl);
				break;
			case 7:
				$this -> showmessage('系统错误',$jumpUrl);
				break;
			case 8:
				$this -> showmessage('相册名不能为空',$jumpUrl);
				break;
			case 9:
				$this -> showmessage('您上传的相册封面图,宽度少于295px或者高度少于210px！',$jumpUrl);
				break;
			case 10:
				$this -> showmessage('相册创建成功！','admin.php?controller=back&method=albumList');
				break;
			case 11:
				$this -> showmessage('相册名相同,请修改',$jumpUrl);
				break;
			case 12:
				$this -> showmessage('相册文件夹创建失败,请联系管理员',$jumpUrl);
				break;


		}

	}


//  相册编辑页展示
	public function albumEditShow(){
		$albumInfo = M('album','backPhoto')->albumEditShow();
		$albuminfo['albumInfo'] = $albumInfo;
		VIEW::assign($albuminfo);
		VIEW::display('tpl/backstage/photo/album/albumEdit.html');
	}

//  相册编辑页操作
	public function albumEditOP(){
		$res = M('album','backPhoto') -> albumEditOP();
		$jumpUrl = "admin.php?controller=back&method=albumList";
		switch($res){
			case 1:
				$this->showmessage('更新成功','admin.php?controller=back&method=albumList');
				break;

			case 2:
				$this->showmessage('相册标题不能为空',$jumpUrl);
				break;

			case 3:
				$this->showmessage('上传的相册封面 width height 小于 295px 210px 无法修改',$jumpUrl);
				break;

			case 4:
				$this->showmessage('现有的相册封面图片删除失败,请检查后重试',$jumpUrl);
				break;

			case 5:
				$this->showmessage('更新失败',$jumpUrl);
				break;

		}
	}


//  相册删除操作 (不仅删除数据库数据,还删除项目文件夹内的对应文件夹 )
	public function albumDel(){
		$delRes = M('album','backPhoto') -> albumDel();

		switch( $delRes ){
			case '1':
				$this->showmessage('删除成功','admin.php?controller=back&method=albumList');
				break;
			case '2':
				$this->showmessage('相册封面图片删除失败','admin.php?controller=back&method=albumList');
				break;
			case '3':
				$this->showmessage('相册文件夹删除失败','admin.php?controller=back&method=albumList');
				break;
		}
	}


//  照片列表显示
	public function photoList(){

		$res = M( 'photo' , 'backPhoto' )->photoList();

		$id['id'] = $_GET['id'];
		$data['data'] =  $res;

		VIEW::assign($id);
		VIEW::assign($data);
		VIEW::display('tpl/backstage/photo/photo/photoList.html');
	}


//  展示照片添加页面
	public function photoAddShow(){
		$id['id'] = $_GET['id'];
		VIEW::assign($id);
		VIEW::display('tpl/backstage/photo/photo/photoAdd.html');
	} 


//  照片添加操作
	public function photoBatchUpload(){
		$album['album'] = $_POST['albumID'];
		VIEW::assign($album);
		VIEW::display('tpl/backstage/photo/photo/photoUploadRes.html');
		
		$res = M('photo','backPhoto') -> photoBatchUpload();
	
	}

//  照片批量删除
	public function photoBatchDel(){
		//echo "<pre>";
		$albumID = $_GET['id'];
		$res = M('photo' , 'backPhoto')->photoBatchDel( $_POST['photoIdDel'] );
		if( $res ){
			$this->showmessage('照片删除成功',"admin.php?controller=back&method=photoList&id=$albumID");
		}
		//var_dump($res);
	}



//  弹框后跳转方法
	private function showmessage($mes, $url){
		echo "<script>alert('$mes');window.location.href='$url'</script>";
		exit;
	}


	

	

}




?>