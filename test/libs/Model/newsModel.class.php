<?php



class newsModel{

	public $_table = 'article_info';

//  新闻数量
	function count(){

		$sql = "SELECT count(*) FROM ".$this->_table;
		return DB::findResult($sql,0,0);

	}

//  通过参数新闻的id,来获取新闻的信息
	public function getnewsinfo($id){

		if(empty($id)){
			return array();
		}else{
			$id = intval($id); // intval() — 获取变量的整数值  (防止SQL注入)
			$sql = 'SELECT * FROM '.$this->_table.' WHERE id='.$id;
			return DB::findOne($sql);
		}

	}

//  点击新闻提交按钮的时候执行,参数$data是一个$_POST数组,包含主题、内容等等
	public function newssubmit($data){

		extract($data); // extract()  对于数组中的每个元素，键名用于变量名，键值用于变量值.
		
		if(empty($title) || empty($content)){
			return 0;
		}

		date_default_timezone_set('PRC');

		$title = addslashes($title);
		$content = addslashes($content);
		$time = date('Y-m-d H:i:s');
		$authArr = $_SESSION['auth'];
		$username = $authArr['username'];


		$data = array(
				'title'=>$title,
				'author'=>$username,
				'content'=>$content,
				'time'=>$time
		);

		if($_POST['id'] != ''){ // 如果当前传入来的id不为空,即当前是有id的
			
		//  修改文章
			DB::update($this->_table,$data,'id='.$id);
			return 2;
		
		}else{

		//	添加文章
			DB::insert($this->_table,$data);
			return 1;

		}

	}

//  根据ID删除新闻
	public function newsdel($id){
		DB::del($this->_table,$id);
	}

//  查询出$_table里的所有内容,按照time排序
	public function findAll_orderby_dateline(){

		$sql = 'SELECT * FROM '.$this->_table.' order by time desc';
		return DB::findAll($sql);

	}

//  此方法是查询出所有文章截取前200个字符,让前台列表去显示
	public function get_news_list(){
		
		$data = $this->findAll_orderby_dateline(); // 查询出所有数据让foreach截取200个字符出来
		foreach ($data as $key => $value) {
			
			// mb_substr()函数是用来截中文与英文的函数
			// strip_tags() 函数剥去 HTML、XML 以及 PHP 的标签.
			
			$data[$key]['content'] = mb_substr(strip_tags($data[$key]['content']),0,200);
			//$data[$key]['time'] = data('Y-m-d H:i:s',$data[$key]['time']);

		}
			return $data;
	}


}


?>