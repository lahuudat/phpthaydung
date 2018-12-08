<?php 


class VideoController
{
	
	public function videoList()
	{

		require_once('models/VideoModel.php');

		$VideoModel = new VideoModel();

		$vModel = $VideoModel->getVideoList();

		require_once('views/VideoView.php');

		$VideoView = new VideoView();

		$VideoView->showVideo($vModel);

	}

	public function videoEdit()
	{
		$vid = $_GET['id'];

		require_once('models/VideoModel.php');

		$ViModel = new VideoModel();

		$vModel = $ViModel->videoEdit($vid);

		// $vModel2 = $ViModel->getVideoList();

		require_once('views/VideoView.php');

		$VideoView = new VideoView();

		$VideoView->videoEdit($vModel);

	}

	public function doVideoEdit()
	{

		if(!isset($_POST['id'])){

			header("location:?action=videoList");
			
		}

		$id = $_POST['id'];

		$title = $_POST['title'];

		$link = $_POST['link'];

		$msg = "";

		$image = $_FILES['image']['name'];

		if($image==NULL){

			$image = $_POST['img'];

		}

		$video = array(

			'id'=>$id,

			'title' =>$title,

			'link' =>$link,

			'img' => $image

		);

		// $target = "D:/xampp/htdocs/phpthaydung/uploads/video/".basename($image);

		// if($image==NULL){

		// 	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

		// 	}else{

		// 		echo "that bai";

		// 		exit();

		// 	}
		// }
		$target = "D:/xampp/htdocs/phpthaydung/uploads/video/".basename($image);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

			// echo "uploads thanh cong";

		}else{

			echo "that bai";

			exit();

		}

		require_once('models/VideoModel.php');
		
		$VideoModel = new VideoModel();

		$vModel = $VideoModel->doVideoEdit($video);

		require_once('views/VideoView.php');

		$VideoView = new VideoView();

		$VideoView->notifyEditVideo($vModel);

	}

}

 ?>