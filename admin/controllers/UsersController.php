<?php 

/**
* 
*/
class UsersController
{
	public function usersList()
	{
		
		require_once('models/UsersModel.php');

		$UsersModel = new UsersModel();

		$uModel = $UsersModel->getUsersList();

		require_once('views/UsersView.php');

		$UsersView = new UsersView();

		$UsersView->showUsers($uModel);

	}

	public function SignIn()
	{
		
		require_once('views/UsersView.php');

		$UsersView = new UsersView();

		$UsersView->SignIn();

	}

	public function doSignIn()
	{
		
		$username = $_POST['username'];

		$password = $_POST['password'];

		$passwordMd5 = md5($password);

		$users = array(

			'username' =>$username,

			'password'=>$passwordMd5,

		);

		require_once('models/UsersModel.php');

		$UsersModel = new UsersModel();

		$doLogin = $UsersModel->doSignin($users);

		if($doLogin) {


			foreach ($doLogin as $key) :

				$_SESSION['username'] = $key['username'];

				$_SESSION['id_user'] = $key['id'];

				$_SESSION['role_user'] = $key['level'];

				$_SESSION['name'] = $key['name'];

			endforeach;

			header("location:?action=categoryList");

		} else {

			?>

			<script language="javascript">

				alert('Sign in failed');

				window.location = '?action=signIn';

			</script>

			<?php

		}

	}

	public function logout()
	{

		session_start();

		if(session_destroy()) {

			header("location:?action=signIn");

		}

	}

	public function SignUp()
	{
		
		require_once('views/UsersView.php');

		$UsersView = new UsersView();

		$UsersView->SignUp();

	}

	public function doSignUp()
	{
		$name = $_POST['name'];

		$username = $_POST['username'];

		$email = $_POST['email'];

		$password = $_POST['password'];

		$passwordMd5 = md5($password);

		require_once('models/UsersModel.php');

		$UserModel = new UsersModel();

		$check = $UserModel->checkExistEmail($email);

		if($check == 1){

			require_once('views/UsersView.php');

			$UserView = new UsersView();

			$UserView->checkEmail($check);

		}else{

			$user = array(

				'name' =>$name,

				'username' => $username,

				'email' => $email,

				'password'=> $passwordMd5,

			);

			require_once('models/UsersModel.php');

			$UserModel = new UsersModel();

			$status = $UserModel->doSignUp($user);

			require_once('views/UsersView.php');

			$UserView = new UsersView();

			$UserView->notifydk($status);

		}

	}

	public function usersEdit()
	{
		
		$uid = $_GET['id'];

		require_once('models/UsersModel.php');

		$UsersModel = new UsersModel();

		$uModel = $UsersModel->usersEdit($uid);

		require_once('views/UsersView.php');

		$UsersView = new UsersView();

		$UsersView->usersEdit($uModel);

	}

	public function doUsersEdit()
	{
		$id = $_POST['id'];

		$name = $_POST['name'];

		$username = $_POST['username'];

		$email = $_POST['email'];

		$role = $_POST['role'];

		$user = array(
			'id'=>$id,
			'name' => $name,
			'username' =>$username,
			'email' =>$email,
			'role' => $role
		);

		require_once('models/UsersModel.php');
		
		$UsersModel = new UsersModel();

		$uModel = $UsersModel->doUsersEdit($user);

		require_once('views/UsersView.php');

		$UsersView = new UsersView();

		$UsersView->notifyEditUsers($uModel);
	}
	
}

 ?>