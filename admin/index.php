<?php 

session_start();

require_once('controllers/NewsController.php');

require_once('controllers/CategoryController.php');

require_once('controllers/VideoController.php');

require_once('controllers/UsersController.php');

require_once('controllers/CommentController.php');

$NewsController = new NewsController();

$VideoController = new VideoController();

$CatController = new CategoryController();

$UsersController = new UsersController();

$CommentController = new CommentController();



	if(!isset($_GET['action'])){
		$action='';
	}else{
		$action=$_GET['action'];
	}

	if($action == ''){

		$CatController->getCategoryList();
		
	}

	if($action == 'categoryList'){

		$CatController->getCategoryList();
		
	}

	if($action == 'categoryAdd'){

		$CatController->categoryAdd();	

	}

	if($action == 'doCategoryAdd'){

		$CatController->doCategoryAdd();

	}

	if($action == 'categoryDelete'){

		$CatController->deleteCategory();

	}

	if($action == 'categoryEdit'){

		$CatController->categoryEdit();	

	}

	if($action == 'doCategoryEdit'){

		$CatController->doCategoryEdit();

	}

	if($action == 'newsList'){

		$NewsController->newsList();	

	}

	if($action == 'newsAdd'){

		$NewsController->newsAdd();	

	}

	if($action == 'newsEdit'){

		$NewsController->newsEdit();	

	}

	if($action == 'doNewsEdit'){

		$NewsController->doNewsEdit();	

	}

	if($action == 'doNewsAdd'){

		$NewsController->doNewsAdd();	

	}

	if($action == 'newsDelete'){

		$NewsController->newsDelete();	

	}

	if($action == 'videoList'){

		$VideoController->videoList();	

	}

	if($action == 'videoEdit'){

		$VideoController->videoEdit();	

	}

	if($action == 'doVideoEdit'){

		$VideoController->doVideoEdit();	

	}

	if($action == 'usersList'){

		$UsersController->usersList();	

	}

	if($action == 'usersEdit'){

		$UsersController->usersEdit();	

	}

	if($action == 'doUsersEdit'){

		$UsersController->doUsersEdit();	

	}

	if($action == 'signIn'){

		$UsersController->SignIn();	

	}

	if($action == 'doSignIn'){

		$UsersController->doSignIn();	

	}

	if($action == 'signUp'){

		$UsersController->SignUp();	

	}

	if($action == 'doSignUp'){

		$UsersController->doSignUp();	

	}

	if($action == 'logout'){

		$UsersController->logout();	

	}

	if($action == 'commentList'){

		$CommentController->getCommentList();	

	}

	if($action == 'commentDelete'){

		$CommentController->commentDelete();	

	}




?>