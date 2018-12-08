<?php 
	function login ($username, $password){
		global $con;
		$password = md5($password);
		$sql = "
		select *
		from user
		where 
			username='{$username}' and password='{$password}'
		";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result)==1){
			return mysqli_fetch_assoc($result);
		}
		return false;
	}
?>