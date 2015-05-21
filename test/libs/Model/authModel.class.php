<?php

class authModel{
	
	private $auth = '';  // 当前管理员信息.
	private $defaultPhotoPath = 'pictureGroup/userPhotoFolder/defaultPhoto.jpg'; // 用户注册时,默认头像的路径

	public function __construct(){
	
		// 如果$_SESSION['auth']是存在的,并且$_SESSION['auth']不为空.
		if(isset($_SESSION['auth']) && (!empty($_SESSION['auth']))){
			
			//  通过正常登录后把信息存进$auth
			$this->auth = $_SESSION['auth'];

		}else if(isset($_COOKIE['username'])){
			
			//  通过cookie登录后把信息存进$auth
			$indexobj = M('index');
			$this->auth = $indexobj -> checkCookiePassword( $_COOKIE['username'] , $_COOKIE['password'] );
		}
	}


	public function loginsubmit(){   // 进行登录验证的一系列业务逻辑. 

		if(empty($_POST['username']) || empty($_POST['password'])){
			// 如果 用户名 或 密码 其中一个为空 返回 false
			return false;
		}
		// 如果上面的if语句过了,证明用户名和密码是有值的.那进行下面的操作.
		// addslashes() 函数在指定的预定义字符前添加反斜杠.
		
		$username = addslashes($_POST['username']);
		$password = addslashes($_POST['password']);

		// 用户的验证操作 -> 拆分到另外一个方法里面写,减少这个方法的代码量.
		
		$this->auth = $this -> checkuser($username,$password); // $this->auth保存 用户验证方法 的返回结果
		
		if($this->auth){
			
			//登录成功
			$_SESSION['auth'] = $this->auth;

			// cookies
		 	$this -> setCookies($username,$password);

			return true;
		
		}else{
			
			//登录失败	
			return false;
		}

	}

// 	用户验证方法
	public function checkuser($username,$password){ 

		$adminobj = M('admin');
		$auth = $adminobj -> findOne_by_username($username); // 把用户的一条完整信息取出来.

		if((!empty($auth) && $auth['password'] == $password )){
			return $auth;
		}else{
			return false;
		}

	}


//  COOKIES设置方法
	public function setCookies($username,$password){
		
		//  当用户登录成功的时候,才把这个cookie生效	
		if(isset($_POST['remPass'])){
			setcookie('username',$username,time() + 3600 * 24 * 7); //  这个cookir 持续2分钟
			setcookie('password',$password,time() + 3600 * 24 * 7 ); 			
		}
	}


	public function logout(){
		unset($_SESSION['auth']);
		@setcookie("username", "", time() - 3600 * 24 * 7);
		@setcookie("password", "", time() - 3600 * 24 * 7);
		$this->auth = '';
	}

//  点击了退出登录后的 页面跳转
	public function logoutAfter(){
	
		$url    = $_SERVER['HTTP_REFERER'];

		$urlArr = explode( '/' , $url );
		$nowUrl = $urlArr[count($urlArr)-1]; // 获取到当前的Url

		$indexUrl       = 'index.php?controller=header&method=index';
		$userInfoShow   = 'index.php?controller=admin&method=UserInfoList';
		$userInfoChange = 'index.php?controller=admin&method=userInfoChange';
		//echo "<script>alert(11);</script>";
	//  点击了 '退出按钮' 时,当前的 url 是在用户资料展示页面上, 那就要跳转到主页
		if( $nowUrl == $userInfoShow || $nowUrl == $userInfoShow.'#' ){
			echo "<script>window.location = '$indexUrl';</script>";
		}

	//  点击了 '退出按钮' 时,当前的 url 是在用户资料修改页面上, 那就要跳转到主页
		if( $nowUrl == $userInfoChange || $nowUrl == $userInfoChange.'#' ){
			echo "<script>window.location = '$indexUrl';</script>";
		}

	//  如果 不在 '用户资料展示页' 也不在 '用户资料修改页' 那就在哪 退出 就跳转到哪( 也就是不用跳转 )
		echo "<script>window.location = '$url';</script>";
	}


//  用户注册方法
	public function register(){

		$adminobj = M('admin');
		$tableName = $adminobj->_table; // 取出表名

		date_default_timezone_set('PRC');
		$regTime = date('Y-m-d');

		$userRepeat = $this -> checkUserNameRepeat($tableName,$_POST);  // 返回已经存在的用户名或false
	
		if(!$userRepeat){
			
			// 如果不存在,证明可以注册
			
			$registerInfo['userName']     = $_POST['r_username'];
			$registerInfo['password']     = $_POST['r_password'];
			$registerInfo['trueName']     = $_POST['r_truename'];
			$registerInfo['photo']        = $this->defaultPhotoPath;
			$registerInfo['registerTime'] = $regTime;

			$res = DB::insert($tableName , $registerInfo);

			if($res){
				return 1;
			}else{
				return 0;
			}

		}else{
			// 如果存在,证明已有这个用户名了
			return 2;
		}
		

	}

//  查询用户名是否已经存在 返回:存在的用户名 或 false
	public function checkUserNameRepeat($tableName,$arr){
		$userNameSql = "SELECT userName from {$tableName} WHERE userName='{$arr["r_username"]}'  "; 
		$queryRes = DB::query($userNameSql);
		$userNameRes = mysql_fetch_array($queryRes,MYSQL_ASSOC); // 返回数组
		return $userNameRes;
	}


/* (暂时可被同类中的UserInfolist代替)
//  实时的向数据库查询用户信息
	public function userInfoChange(){

		$userInfo = $this -> getauth();
		$username = $userInfo['userName'];

	//  这下面是用户信息经过修改后,我们再次向数据库查询后得出的,而不是登录之后就得出的用户信息
		$adminobj = M('admin');
		$userInfo2 = $adminobj -> findOne_by_username($username);

		return $userInfo2;

	}
*/
//  用户信息修改操作
	public function userInfoChangeWork($POST){
		echo "<pre>";

		//  用户修改信息时,判断上传的数据是否超过限制长度
		$checkPostkRes = $this -> checkPostInfo();
		
		// 检测返回的POST判断结果(如果返回结果是false,停止,返回结果正常的话将不做任何操作)
		if(!$checkPostkRes){ 
			return 0; 
		}

		// 返回已组合好的生日,并删除了散值(年月日)。 
		$spellBirthdayRes = $this -> opBirthday($_POST); 

	//  取出用户表的表名
		$artTableName = M('back')->_tableName2;

	//  取出用户id
		$userInfo = $this->getauth();
		$userID = 'id='.$userInfo['id'];

	//update($table,$arr,$where);
		$res = DB::update($artTableName,$spellBirthdayRes,$userID);
		
		if($res){
			return 1;
		}else{
			return 0;
		}

	}

/*
	调用处:本类中userInfoChangeWork拆分出来的子方法
	作用:检查POST出来的用户信息,是否符合长度的规范
*/
	public function checkPostInfo(){	
		
		$trueNameLength     = strlen($_POST['trueName']);
		$phoneLength        = strlen($_POST['phone']);
		$heightLength       = strlen($_POST['height']);
		$schoolLength       = strlen($_POST['school']);
		$addressLength      = strlen($_POST['address']);
		$introductionLength = strlen($_POST['introduction']);
		
		if($trueNameLength > 12){
			return false;
		}else if($phoneLength > 11){
			return false;
		}else if($heightLength > 3){
			return false;
		}else if($schoolLength > 45){
			return false;
		}else if($addressLength > 150){
			return false;
		}else if($introductionLength > 200){
			return false;
		}else{
			return true;
		}

	}


/*
	调用处:本类中userInfoChangeWork拆分出来的子方法
	用处:拼接用户POST出来的 年月日 
*/
	public function opBirthday($POST){
		//var_dump($POST);
	
		if( strlen($POST['year']) == 4 && strlen($POST['month']) == 2 &&  strlen($POST['day']) == 2 ){
			// 如果POST出来的 年、月、日 符合数字的长度.
			$birthday = $POST['year'].'-'.$POST['month'].'-'.$POST['day']; 

			unset($POST['year']);
			unset($POST['month']);
			unset($POST['day']);
			unset($POST['userInfoChange']);

			$POST['birthday'] = $birthday;
			return $POST;
		}else{
			$POST['birthday'] = '';
		}
	
	}


//  从数据库获取用户修改后的信息数据
	public function UserInfolist(){

	//  这下面是用户信息经过修改后,我们再次向数据库查询后得出的,而不是登录之后就得出的用户信息
		$authInfo = $this->auth;
		$newUserInfo = M('admin') -> findOne_by_username($authInfo['userName']);
		
		// 将$newUserInfo 这个数据再去处理 ( 过滤空格,添加地址长度等 )
		$newUserInfo = $this -> newUserInfoOp($newUserInfo); // 处理数据
		return $newUserInfo;
	}


/*
	归属:本类中的UserInfolist方法.
	作用:处理传进来的 $newUserInfo (过滤空格\添加地址长度)
*/	
	public function newUserInfoOp($data){

		// str_replace(search, replace, subject) 查找出字符串当中的空格,替换为''（空）
		$data['trueName'] = str_replace(' ', '', $data['trueName']);
		$data['phone']    = str_replace(' ', '', $data['phone']);
		$data['height']   = str_replace(' ', '', $data['height']);
		$data['address']  = str_replace(' ', '', $data['address']);
		$data['school']   = str_replace(' ', '', $data['school']);

		$data['addressLength'] = strlen($data['address']);
		$data['schoolLength']  = strlen($data['school']);

		return $data;
	}


//  把传入进来的用户头像路径更新到用户数据库
	public function changeUserPhoto( $newPhotoPath ){
		/*
			两步操作:
				1. 修改头像时, 先删除头像文件夹里旧的头像文件 (默认头像文件除外defaultPhoto.jpg) 
				2. 更新用户数据库的photo路径, 指向新的头像文件路径
		*/
		// 不只是更新数据库 还需要把用户头像文件夹里的历史头像文件也删除

		$id = 'id='.$this->auth['id'];
		$userTableName = M('back')->_tableName2;

		$sql = "SELECT photo FROM $userTableName WHERE $id";
		$agoPhotoPath = DB::findOne( $sql ); // 取出以前的头像地址 

		// 当用户第一次修改头像时,不用在文件中删除默认的头像
		if( $agoPhotoPath['photo'] !== 'pictureGroup/userPhotoFolder/defaultPhoto.jpg'){
			// 当删除头像文件失败时
			if(!unlink($agoPhotoPath['photo'])){ return false; }
		}

		$arr['photo'] = $newPhotoPath;

		$res = DB::update( $userTableName , $arr , $id );
		return $res;
	}


//  获取私有属性$auth的值
	public function getauth(){
		return $this->auth;
	}



}



?>