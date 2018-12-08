<?php 


class UsersView
{
	
	public function showUsers($uModel)
	{

		require_once('templates/admin/users_list.php');

	}

	public function SignIn()
	{

		require_once('templates/signup-signin/signin.php');

	}

	public function doSignin()
	{
		
		

	}

	public function SignUp()
	{

		require_once('templates/signup-signin/signup.php');

	}

	public function checkEmail($check)
	{

		?>
		<script language="javascript">

			alert('email exist');

			window.location = '?action=signUp';

		</script>
		<?php
	}

	public function notifydk($status){

		if($status){

			?>

			<script language="javascript">

				alert('register success');

				window.location = '?action=signIn';

			</script>

			<?php

		}else {

			echo "thất bại";

		}
	}

	public function usersEdit($uModel)
	{

		require_once('templates/admin/users_edit.php');

	}

	public function notifyEditUsers($uModel)
	{
		if($uModel){ ?>

		<script language="javascript">

			alert('edit success');

			window.location = '?action=usersList';

		</script>

		<?php

		}else {

		echo "thất bại";

		}
	}
}

 ?>