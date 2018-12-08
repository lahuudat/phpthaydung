<?php 

require_once('DbModel.php');

class NewsModel extends DbModel
{
	
	public function getNewsList()
	{

		$conn = $this->connect();

		mysqli_set_charset($conn, 'UTF8');

		$sql = "SELECT news.news_id, news.title, user.username, category.name, news.feature FROM news INNER JOIN user ON news.user_id = user.id INNER JOIN category ON news.cat_id = category.cat_id";

		$result = mysqli_query($conn, $sql);

		$news = array();

		if (mysqli_num_rows($result) > 0) {

		    // output data of each row

			while($row= mysqli_fetch_assoc($result)) {

				$news[]=$row;

			}

		} 

		return $news;

		mysqli_close($conn);

	}

	public function doNewsAdd($arr_news)
	{

		$conn = $this->connect();

		$sql = "INSERT INTO news ( title, description, content, img, feature, cat_id, user_id)
		VALUES (N'".$arr_news['title']."', N'".$arr_news['description']."', N'".$arr_news['content']."', N'".$arr_news['img']."', N'".$arr_news['feature']."', N'".$arr_news['cat_id']."', N'".$arr_news['user_id']."');";

		// echo $sql;

		// exit();

		$rs = $conn->query($sql);

		return $rs;

	}

	public function newsEdit($nid)
	{

		$conn = $this->connect();

		mysqli_set_charset($conn, 'UTF8');

		$sql = "SELECT * FROM news WHERE news_id=$nid";

		$result = mysqli_query($conn, $sql);

		$news = array();

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
			while($row= mysqli_fetch_assoc($result)) {

				$news[]=$row;

			}

		} 

		return $news;

		mysqli_close($conn);

	}

	public function doNewsEdit($arr_news)
	{

		$conn = $this->connect();

		$sql = "UPDATE news SET title=N'".$arr_news['title']."', description=N'".$arr_news['description']."', content=N'".$arr_news['content']."', img='".$arr_news['img']."', feature='".$arr_news['feature']."', cat_id='".$arr_news['cat_id']."' WHERE news_id='".$arr_news['news_id']."'";
		

		$rs = $conn->query($sql);

		return $rs;

	}

	public function deleteNews($nid)
	{
		
		$conn = $this->connect();

		$sql = "DELETE FROM comment WHERE idNew=$nid;DELETE FROM news WHERE news_id=$nid";

		$rs = $conn->multi_query($sql);

		return $rs;

	}

}
?>