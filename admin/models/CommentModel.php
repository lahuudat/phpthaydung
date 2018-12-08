<?php 

require_once('DbModel.php');

class CommentModel extends DbModel
{

	public function getComment()
	{

		$conn = $this->connect();

		mysqli_set_charset($conn, 'UTF8');
		
		$sql = "SELECT comment.id, comment.name_comment, comment.Content, news.title  FROM comment INNER JOIN news ON comment.idNew = news.news_id ";

		$result = mysqli_query($conn, $sql);

		$comments = array();

		if (mysqli_num_rows($result) > 0) {

		    // output data of each row

		    while($row= mysqli_fetch_assoc($result)) {

		        $comments[]=$row;

		    }

		} 

		return $comments;

		mysqli_close($conn);

	}

	public function deleteComment($coid)
	{
		$conn = $this->connect();

		$sql = "DELETE FROM comment WHERE id=$coid";

		$rs = $conn->query($sql);

		return $rs;
	}

	
	
}

?>