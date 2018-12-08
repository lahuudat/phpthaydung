<?php 

/**
* 
*/
class CategoryController
{
	public function getCategoryList()
	{

		require_once('models/CategoryModel.php');

		$CatModel = new CategoryModel();

		$cModel = $CatModel->getCategory();

		require_once('views/CategoryView.php');

		$CatView = new CategoryView();

		$CatView->showCat($cModel);

	}

	public function categoryAdd()
	{
		
		require_once('models/CategoryModel.php');

		$CatModel = new CategoryModel();

		$cModel = $CatModel->getCategoryName();

		require_once('views/CategoryView.php');

		$CatView = new CategoryView();

		$CatView->addCat($cModel);

	}

	public function doCategoryAdd()
	{

		$cat_name = $_POST['cat_name'];

		$parent_id = $_POST['parent_id'];

		$arr_cat = array(

					'cat_name' =>$cat_name,

					'parent_id' =>$parent_id,

					);

		// var_dump($arr_cat);

		// exit();

		require_once('models/CategoryModel.php');

		$CatModel = new CategoryModel();

		$cModel = $CatModel->doCategoryAdd($arr_cat);

		require_once('views/CategoryView.php');

		$CatView = new CategoryView();

		$CatView->notifyAddCategory($cModel);

	}

	public function deleteCategory()
	{
		$did = $_GET['id'];

		require_once('models/CategoryModel.php');

		$CatModel = new CategoryModel();

		$cModel = $CatModel->deleteCategory($did);

		require_once('views/CategoryView.php');

		$CatView = new CategoryView();

		$CatView->notifyDeleteCategory($cModel);

	}

	public function categoryEdit()
	{
		$eid = $_GET['id'];

		require_once('models/CategoryModel.php');

		$CatModel = new CategoryModel();

		$cModel = $CatModel->categoryEdit($eid);

		$cModel2 = $CatModel->getCategory();

		require_once('views/CategoryView.php');

		$CatView = new CategoryView();

		$CatView->categoryEdit($cModel, $cModel2);

	}

	public function doCategoryEdit()
	{

		$cat_id = $_POST['cat_id'];

		$cat_name = $_POST['cat_name'];

		$parent_id = $_POST['parent_id'];

		$cat = array(

			'cat_id'=>$cat_id,

			'name' =>$cat_name,

			'parent_id' =>$parent_id

		);

		require_once('models/CategoryModel.php');
		
		$CatModel = new CategoryModel();

		$cModel = $CatModel->doCategoryEdit($cat);

		require_once('views/CategoryView.php');

		$CatView = new CategoryView();

		$CatView->notifyEditCategory($cModel);

	}
	
}

 ?>