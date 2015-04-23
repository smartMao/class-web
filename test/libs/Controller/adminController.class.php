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
			$this -> showmessage('注册失败！','admin.php?controller=index&method=index');
		}

		if($res == 1){
			$this -> showmessage('注册成功！','admin.php?controller=index&method=index');
		}

		if($res == 2){
			$this -> showmessage('用户名重复！','admin.php?controller=index&method=index');
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

		}else{
			// 显示登录界面

			VIEW::display('class web/index2.html');
		}

	}

//  登录的验证操作(拆分出来的)
	private function checklogin(){
		
		$authobj = M('auth');
		
		if($authobj -> loginsubmit()){
			$this->showmessage('登录成功','admin.php?controller=index&method=index');
		}else{			
			$this->showmessage('登录失败','admin.php?controller=index&method=index');
		}

	

	}

	
//  暂时无用
	public function index(){
		
		$newsobj = M('news');
		$authobj = M('auth');
		$userInfo = $authobj -> getauth();
		$newsnum = $newsobj -> count();

		VIEW::assign(array('username'=>$userInfo['userName']));
		VIEW::assign(array('newsnum'=>$newsnum));
		VIEW::display('class web/index.html');
	
	}


	

	public function logout(){
	//  登录产生的$_SESSION['auth']; 在auth模型的 logout()方法里清除
		$authobj = M('auth');
		$authobj -> logout();
		$this->showmessage('退出成功！','admin.php?controller=admin&method=login');

	}

//  已登录的用户全部数据
	public function UserInfoList(){
		
		
		$userInfo = M('auth') -> userInfoList();
		$userInfo['username'] = $userInfo['userName']; // 由于smarty用户名需要{$username}

		//默认信息
		$defualtArr = array(
			'phoneDef'=>'暂无',
			'sexDef'=>'保密',
			'addressDef'=>'暂无',
			'heightDef'=>'暂无',
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
			$this->showmessage('更新成功！','admin.php?controller=admin&method=UserInfoList');
		}else{
			$this->showmessage('更新失败！','admin.php?controller=admin&method=userInfoChange');
		}

	}




//  弹框后跳转方法
	private function showmessage($mes, $url){
		echo "<script>alert('$mes');window.location.href='$url'</script>";
		exit;
	}

}

?>