 <?php

class adminController{

	public $auth = '';

	public function __construct(){
		
		// 判断当前是否已经登录 -> auth模型里去处理
		
		// 只要实例化adminController这个类,此构造函数方法就会自动执行
		// 如果不是登录页,而且没有登录,就要跳转到登录页. 
		// (例如:用户通过手动的去修改method=index,但是他又没有登录,那就会自动跳转到登录页)
		
		$authobj = M('auth');
		$this->auth = $authobj->getauth(); // 用admin控制器的$auth 保存 auth模型的$auth
		
		if(empty($this->auth) && (PC::$method!='login')){
			
			// 没有登录,并且不在登录页
		//	$this->showmessage('请在登录后操作！','admin.php?controller=admin&method=login');

		}
	}

//  注册验证操作
	public function register(){

		$authobj = M('auth');
		$res = $authobj -> register();
		
		if($res == 0){
			$this -> showmessage('注册失败！', $_SERVER['HTTP_REFERER'] );
		}

		if($res == 1){
			$this -> showmessage('注册成功！', $_SERVER['HTTP_REFERER'] );
		}

		if($res == 2){
			$this -> showmessage('用户名重复！', $_SERVER['HTTP_REFERER'] );
		}
		
	}



//  登录验证操作
	public function login(){

		if($_POST){
			
			//进行登录处理
			//登录处理的业务逻辑放在 admin auth 模型里
			//admin模型: 从数据库里取用户信息
			//auth 模型: 进行用户信息的核对
			//把一系列的登录处理操作拆分到新的方法里去

			$this -> checklogin();
		}
	}

//  登录的验证操作(拆分出来的)
	private function checklogin(){
		
		$authobj = M('auth');

		if($authobj -> loginsubmit()){
			//$this->showmessage('登录成功', $_SERVER['HTTP_REFERER'] ); // 登录后还是在当前的页面(不会再跳转到index)
			$url = $_SERVER['HTTP_REFERER'];
			echo "<script>window.location='$url'</script>";
		}else{			
			$this->showmessage('登录失败', $_SERVER['HTTP_REFERER'] );
		}
	}


	public function logout(){
	//  登录产生的$_SESSION['auth']; 在auth模型的 logout()方法里清除
		
		$authobj = M('auth');

		$authobj -> logout();      // 退出登录 之 SESSION COOKIE 操作
		$authobj -> logoutAfter(); // 退出登录 之 跳转页面操作

	}

//  已登录的用户全部数据
	public function UserInfoList(){
		
		
		$userInfo = M('auth') -> userInfoList();
		$userInfo['username'] = $userInfo['userName']; // 由于smarty用户名需要{$username}
		
		//默认信息
		$defualtArr = array(
			'phoneDef'    =>'暂无',
			'sexDef'      =>'保密',
			'addressDef'  =>'暂无',
			'heightDef'   =>'暂无',
			'introductionDef'=>'暂无',
			'registerTimeDef'=>'暂无');
		
		VIEW::assign($defualtArr);
		VIEW::assign($userInfo);
		VIEW::display('class web/userInfo/userInfoShow.html');

	}


//  用户信息修改展示
	public function userInfoChange(){

		$userInfo = M('auth') -> UserInfolist();
		$userInfo['username'] = $userInfo['userName'];// 由于smarty用户名需要{$username}
		$defualtArr = array(
			'trueNameDef'=>'暂无',
			'phoneDef'   =>'暂无',
			'sexDef'     =>'保密',
			'addressDef' =>'暂无',
			'heightDef'  =>'暂无',
			'introductionDef'=>'暂无',
			'registerTimeDef'=>'暂无');

		VIEW::assign($defualtArr);
		VIEW::assign($userInfo);
		VIEW::display('class web/userInfo/userInfoChange.html');

	}



//  用户信息修改操作
	public function userInfoChangeWork(){

		$authobj = M('auth');
		$res = $authobj -> userInfoChangeWork($_POST);

		if($res){
			$this->showmessage('更新成功！','index.php?controller=admin&method=UserInfoList');
		}else{
			$this->showmessage('更新失败！','index.php?controller=admin&method=userInfoChange');
		}

	}


//  接收用户修改头像的请求
	public function changeUserPhoto(){
		//var_dump($_FILES['userPhotoFiles']);
		$userPhotoFolder = 'pictureGroup/userPhotoFolder/'; // 存放用户头像图片的文件夹

		$userPhotoPath=M('common')->imgHandle($_FILES['userPhotoFiles'],120 ,120 ,120 ,120,$userPhotoFolder);

		$jumpUrl = 'index.php?controller=admin&method=UserInfoList';

		switch( $userPhotoPath ){
			case false:
				$this->showmessage('头像上传失败', $jumpUrl);
				break;

			case "1":
				$this->showmessage('上传的头像超过了 php.ini 中 upload_max_filesize 选项限制的值。', $jumpUrl);
				break;
				
			case "2":
				$this->showmessage('上传文件大于2M , 请重试',$jumpUrl);
				break;
				
			case "3":
				$this->showmessage('文件只有部分被上传', $jumpUrl);
				break;

			case "4":
				$this->showmessage('没有文件被上传。', $jumpUrl);
				break;
		
			case "6":
				$this->showmessage('找不到临时文件夹', $jumpUrl);
				break;
		
			case "7":
				$this->showmessage('文件写入失败', $jumpUrl);
				break;		
		}

		$res = M('auth')->changeUserPhoto( $userPhotoPath );

		if( $res ){
			$this->showmessage('头像修改成功！','index.php?controller=admin&method=UserInfoList');
		}else{
			$this->showmessage('头像修改失败！','index.php?controller=admin&method=UserInfoList');
		}

	}




//  弹框后跳转方法
	private function showmessage($mes, $url){
		echo "<script>alert('$mes');window.location.href='$url'</script>";
		exit;
	}

}

?>