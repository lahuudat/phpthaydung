<?php 

/**
* 
*/
class NewsController
{
	
	public function newsList()
	{

		require_once('models/NewsModel.php');

		$NewsModel = new NewsModel();

		$nModel = $NewsModel->getNewsList();

		require_once('views/NewsView.php');

		$NewsView = new NewsView();

		$NewsView->showNews($nModel);

	}

	public function newsAdd()
	{
		
		require_once('models/CategoryModel.php');

		$CatModel = new CategoryModel();

		$cModel = $CatModel->getCategoryName();

		require_once('views/NewsView.php');

		$NewsView = new NewsView();

		$NewsView->addNews($cModel);

	}

	public function doNewsAdd()
	{

		//upload image
		$msg = "";

		$image = $_FILES['image']['name'];



		$title = $_POST['title'];

		$cat_id = $_POST['cat_id'];

		$description = $_POST['description'];

		$content = $_POST['content'];

		$user_id = $_POST['author'];

		// $feature = $_POST['feature'];

		if(!isset($_POST['feature'])){

			$feature=0;

		}else{

			$feature=1;

		}

		$arr_news = array(
					'title' =>$title,
					'description' =>$description,
					'content' => $content,
					'feature' => $feature,
					'cat_id' => $cat_id,
					'img' => $image,
					'user_id' => $user_id
					);


		$target = "D:/xampp/htdocs/phpthaydung/uploads/news/".basename($image);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

			// echo "uploads thanh cong";

		}else{

			// echo "that bai";

			var_dump($arr_news);

			exit();

		}

		// exit();

		require_once('models/NewsModel.php');

		$NewsModel = new NewsModel();

		$nModel = $NewsModel->doNewsAdd($arr_news);

		require_once('views/NewsView.php');

		$NewsView = new NewsView();

		$NewsView->notifyAddNews($nModel);

	}

	public function newsEdit()
	{

		$nid = $_GET['id'];

		require_once('models/NewsModel.php');

		$NewsModel = new NewsModel();

		$nModel = $NewsModel->newsEdit($nid);

		require_once('models/CategoryModel.php');

		$CatModel = new CategoryModel();

		$cModel2 = $CatModel->getCategory();

		require_once('views/NewsView.php');

		$NewsView = new NewsView();

		$NewsView->newsEdit($nModel, $cModel2);

	}

	public function doNewsEdit()
	{
		if(!isset($_POST['news_id'])){

			header("location:?action=newsList");
			
		}

		$news_id = $_POST['news_id'];

		$msg = "";

		$image = $_FILES['image']['name'];

		if($image==NULL){

			$image = $_POST['img'];

		}

		$title = $_POST['title'];

		$cat_id = $_POST['cat_id'];

		$description = $_POST['description'];

		$content = $_POST['content'];

		// $feature = $_POST['feature'];

		if(!isset($_POST['feature'])){

			$feature = 0;

		}else{

			$feature = 1;

		}

		$arr_news = array(
					'title' =>$title,
					'description' =>$description,
					'content' => $content,
					'feature' => $feature,
					'cat_id' => $cat_id,
					'img' => $image,
					'news_id' => $news_id
					);

		$target = "D:/xampp/htdocs/phpthaydung/uploads/news/".basename($image);

		if($image!=NULL){

			if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

			}else{

				echo "that bai";

				exit();

			}
		}


		require_once('models/NewsModel.php');
		
		$NewsModel = new NewsModel();

		$nModel = $NewsModel->doNewsEdit($arr_news);

		require_once('views/NewsView.php');

		$NewsView = new NewsView();

		$NewsView->notifyEditNews($nModel);

	}

	public function newsDelete()
	{
		
		$nid = $_GET['id'];

		require_once('models/NewsModel.php');

		$NewsModel = new NewsModel();

		$nModel = $NewsModel->deleteNews($nid);

		require_once('views/NewsView.php');

		$NewsView = new NewsView();

		$NewsView->notifyDeleteNews($nModel);

	}

}

 ?>