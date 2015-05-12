<?php


class articleModel{

	public $_tableName = 'article_info';

	
//  文章添加操作
	public function artAdd($postInfo){
		$authobj = M('auth');
		$userInfo = $authobj -> getauth();

		date_default_timezone_set('PRC');
		$artAddTime = date('Y-m-d H:i:s');

		$artFieldArr = array('id','uid','title','author','time','content'); // 文章表字段

		
		if(empty($postInfo['artTitle'])){
			return 'titleFalse';
			break;	
		}else if(empty($postInfo['content'])){
			return 'contentFalse';
			break;
		}

		$artInfo = array(); // 保存添加文章的所有信息

			$artInfo[] = '';                     // id
			$artInfo[] = $userInfo['id'];        // uid
			$artInfo[] = $postInfo['artTitle'];  // title
			$artInfo[] = $userInfo['userName'];  // author
			$artInfo[] = $artAddTime;            // time
			$artInfo[] = $postInfo['content'];   // content


		$artArr = array_combine($artFieldArr,$artInfo); //包含字段与值
		
		$res = DB::insert($this->_tableName,$artArr);
			
	}


//  文章列表查询
	public function artList(){

		$sql   = "SELECT * FROM $this->_tableName  order by time desc"; // 通过倒序的方式查出数据
		$res = DB::findAll($sql);

		if( empty($res) ){ return $res; } // 如果没有查出数据,返回空
		return $res;
	}


//  文章修改操作 (点击修改按钮查出数据)
	public function changeArticle($id){

		$sql = "SELECT * FROM $this->_tableName WHERE id={$id}";
		$res = DB::findAll($sql);
		return $res;

	}

//  文章修改操作 (点击提交按钮更新修改数据)
	public function changeArticleOk($id){
		
		$newTitle   = $_POST['artTitle'];
		$newContent = $_POST['content'];

		if(!empty($newTitle) && !empty($newContent)){	
			$sql = "UPDATE $this->_tableName SET title='{$newTitle}', content='{$newContent}' WHERE id=$id ";
			$res = DB::query($sql);
			return $res;
		}else{
			return 0;
		}

	}

//  文章删除操作
	public function artDel($id){
		
		$sql = "DELETE FROM $this->_tableName  WHERE id=$id";
		$res = DB::query($sql);
		return $res;

	}




}



?>