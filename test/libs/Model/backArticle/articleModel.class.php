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
	
		$resArrLength= count($res); // 统计数组长度

	//  此for截取title长度大于10的,避免title过长 list 不好显示
		for($i=0; $i<$resArrLength; $i++){
			if(strlen($res[$i]['title']) > 24){
				//echo "第{$i}个的标题大于10"."<br/>";
				$res[$i]['title'] = substr($res[$i]['title'],0,24);
				$res[$i]['title'] .= '...';
			}
		}

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