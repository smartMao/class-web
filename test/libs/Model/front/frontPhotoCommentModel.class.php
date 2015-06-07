<?php


/* 
	此模块为前端照片layer展示的 提交模块
	点赞、评论、回复 都在这处理

*/
class frontPhotoCommentModel{

	private $_tableName2 = 'user_info';
	private $_tableName6 = 'comment';
	private $_tableName7 = 'reply';



//  添加照片评论
	public function photoAddComment(){

		date_default_timezone_set('PRC');

		$insertArr['uid'] = $_POST['uid'];
		$insertArr['pid'] = $_POST['pid'];
		$insertArr['time']= date('Y-m-d:H:i:s');
		$insertArr['content'] = mysql_real_escape_string($_POST['photoComData']);

		$insertResID = DB::insert( $this->_tableName6 , $insertArr );

		$sql = "SELECT `uid`,`pid`,`content` FROM $this->_tableName6 WHERE id=$insertResID";
		$res[0] = DB::findOne( $sql );
		//var_dump($res);exit;
		$newComData = $this->comInfoAddUserInfo( $res );
		//var_dump($newComData);exit;

		$newComment = '<li>
										<!--ASDASDASDASDSADSA-->	
											<div class="comment-content-block" title="点击回复">
												<div class="comment-content-block-small-box" 
												username="' . $newComData[0]['username'] . '">
												
													<div class="comment-content-block-photo">
														<!-- 评论块头像 -->
														<img src="' . $newComData[0]['photo'] . '" 
														width="40" height="40" />
														
													</div>

													<div class="comment-content-block-box">
														
														<span class="comment-content-block-username">
															<a href="#"><!-- 评论username -->' . $newComData[0]['username'] . '</a>
															<span>:</span>
														</span>
														<span class="comment-content-block-content">
															<!-- 评论内容content -->' . $newComData[0]['content'] . '
															<a href="#" class="comment-content-block-reply-icon"></a>
														</span>


														
													</div>

													<div class="clear"></div>

												</div>

												<div class="comment-content-reply">
													<ul class="reply-list" style="display:none;">

														<li><!-- 照片评论回复 -->
															<a href="#" class="publish-username">热而过性值</a> 
															回复 
															<a href="#" class="see-username">恩属性值尔</a> :
															你个dog
															<a href="#" class="comment-content-block-reply-icon"></a>
														</li>

														

													</ul>
													<!-- 回复 输入的input -->
													<div class="comment-reply-input-box" style="display:none;">
														<i class="comment-reply-info">
															回复属性值乔：<!-- 回复对象 -->
														</i>
														<textarea onpropertychange="this.style.height=this.scrollHeight + "px"" oninput="this.style.height=this.scrollHeight + "px"" ></textarea>
														<span class="reply-retract">收起</span>
														<span class="reply-submit">回复</span>
													</div>
												</div>

											</div>
										<!-- asdcasdasdasd-->
											</li>';

				echo $newComment;
	}


//  获取全部评论
	public function getphotoComment(){
		$sql = "SELECT `id`,`uid`,`pid`,`content` FROM $this->_tableName6 ";
		$res = DB::findAll( $sql );

		$commentData = $this->comInfoAddUserInfo( $res );
		return $commentData;
	}


//  根据评论里的uid, 查出此uid 的 username ,photo
	public function comInfoAddUserInfo( $comInfo ){
		$sql = "SELECT `id`,`userName`,`photo` FROM $this->_tableName2";
		$userInfo = DB::findAll( $sql );
	

		// 将评论数组加上 username , photo 信息
		foreach( $userInfo as $key => $value ){
			foreach( $comInfo as $k => $v ){
				// 如果当前评论的uid 等于 当前循环的用户id,那就把当前用户的 username photo 放进这个评论数组里

				if( $comInfo[$k]['uid'] == $userInfo[$key]['id'] ){

					$comInfo[$k]['username'] = $userInfo[$key]['userName'];
					$comInfo[$k]['photo'] = $userInfo[$key]['photo'];
				}
			}
		}

		
		return $comInfo;
	}

























































}





?>