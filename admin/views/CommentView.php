<?php 

class CommentView{

	public function showCom($coModel)
	{

		require_once('templates/admin/comment_list.php');

	}

	public function notifyDeleteComment($coModel)
	{
		if($coModel){

			header("location:?action=commentList");

		}else {

			echo "xóa thất bại, <a href='location:?action=commentList'>click để về lại trang chủ</a>";

		}
	}

	
}

 ?>