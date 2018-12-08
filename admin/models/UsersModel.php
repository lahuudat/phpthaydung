<?php 

require_once('DbModel.php');

class UsersModel extends DbModel
{
	
	public function getUsersList()
	{

		$conn = $this->connect();

		mysqli_set_charset($conn, 'UTF8');

		$sql = "SELECT * FROM user";

		$result = mysqli_query($conn, $sql);

		$users = array();

		if (mysqli_num_rows($result) > 0) {

		    // output data of each row

			while($row= mysqli_fetch_assoc($result)) {

				$users[]=$row;

			}

		} 

		return $users;

		mysqli_close($conn);

	}

	public function doSignin($users)
	{
		
		$conn = $this->connect();

		mysqli_set_charset($conn, 'UTF8');

		$sql = "SELECT * FROM user where username='".$users['username']."' AND password='".$users['password']."'";

		$result = $conn->query($sql);

		$userss = array();

		if ($result->num_rows >= 1) {
    		// output data of each row
			while($row= mysqli_fetch_assoc($result)) {

				$userss[]=$row;

			}

		}

		return $userss;

		$conn->close();

	}

	public function checkExistEmail($email)
	{

		$conn = $this->connect();

		$sql = "SELECT * FROM user where email='".$email."'";

		$result = $conn->query($sql);

		if ($result->num_rows >= 1) {
    		// output data of each row
			return 1;

		} else {

			return 0;

		}

		$conn->close();

	}

	public function doSignUp($user)
	{

		$conn = $this->connect();

		$sql = "INSERT INTO user ( name, username, email, password)
		VALUES (N'".$user['name']."', N'".$user['username']."', '".$user['email']."', '".$user['password']."');";

		$rs = $conn->query($sql);

		return $rs;

	}

	public function usersEdit($uid)
	{
		$conn = $this->connect();

		mysqli_set_charset($conn, 'UTF8');

		$sql = "SELECT * FROM user WHERE id=$uid";

		$result = mysqli_query($conn, $sql);

		$users = array();

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
			while($row= mysqli_fetch_assoc($result)) {

				$users[]=$row;

			}

		} 

		return $users;

		mysqli_close($conn);

	}

	public function doUsersEdit($user)
	{
		
		$conn = $this->connect();
			
		$sql = "UPDATE user SET name=N'".$user['name']."', username='".$user['username']."', email=N'".$user['email']."', level='".$user['role']."' WHERE id='".$user['id']."'";

		$rs = $conn->query($sql);

		return $rs;

	}

}
?>