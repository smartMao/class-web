<?php

class newsController{

	//  后台文章添加方法	
	public function newsadd(){

		// 判断是否有$_POST数据
		// 如果没有$_POST数据,就显示添加、修改的界面

		if(empty($_POST)){

			//读取旧信息,需要传递新闻id $_GET['id']
			//如果能在url里获取, $_GET['id']说明是修改
			
			if(isset($_GET['id'])){
				
				//如果有,那就是修改,执行news模型里的getnewsinfo方法,然后把返回值保存在$data
				$data = M('news') -> getnewsinfo($_GET['id']);

			}else{

				$data = array();
			
			}

			VIEW::assign(array('data'=>$data));
			VIEW::display('admin/newsadd.html');
		
		}else{
		
			$this->newssubmit();
			

		} 


	}


	private function newssubmit(){

		$newobj = M('news');
		$result = $newobj -> newssubmit($_POST);  // newssubmit(); 返回 0 / 1 / 2

		//判断$result的值,来做相应的提示
		if($result == 0){
			$this -> showmessage('操作失败!','admin.php?controller=admin&method=newsadd&id='.$_POST['id']);
		}

		if($result == 1){
			$this -> showmessage('添加成功!','admin.php?controller=admin&method=newslist');
		}

		if($result == 2){
			$this -> showmessage('修改成功!','admin.php?controller=admin&method=newslist');
		}

	}

	public function newslist(){

		$newsobj = M('news');
		$data = $newsobj->findAll_orderby_dateline();
		VIEW::assign(array('data'=>$data));
		VIEW::display('admin/newslist.html');

	}

	public function newsdel(){

		if(intval($_GET['id'])){	
			M('news') -> newsdel($_GET['id']);
			$this -> showmessage('删除成功！','admin.php?controller=admin&method=newslist');
		}

	}






	
}

?>