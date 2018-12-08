<?php 

/**
* 
*/
class CommentController
{
	public function getCommentList()
	{

		require_once('models/CommentModel.php');

		$ComModel = new CommentModel();

		$coModel = $ComModel->getComment();

		require_once('views/CommentView.php');

		$ComView = new CommentView();

		$ComView->showCom($coModel);

	}

	public function commentDelete()
	{
		
		$coid = $_GET['id'];

		require_once('models/CommentModel.php');

		$ComModel = new CommentModel();

		$coModel = $ComModel->deleteComment($coid);

		require_once('views/CommentView.php');

		$ComView = new CommentView();

		$ComView->notifyDeleteComment($coModel);

	}

	
}

 ?>