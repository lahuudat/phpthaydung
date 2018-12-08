<?php 

require_once('DbModel.php');

class VideoModel extends DbModel
{
	
	public function getVideoList()
	{

		$conn = $this->connect();

		mysqli_set_charset($conn, 'UTF8');

		$sql = "SELECT * FROM video";

		$result = mysqli_query($conn, $sql);

		$video = array();

		if (mysqli_num_rows($result) > 0) {

		    // output data of each row

			while($row= mysqli_fetch_assoc($result)) {

				$video[]=$row;

			}

		} 

		return $video;

		mysqli_close($conn);

	}

	public function videoEdit($vid)
	{

		$conn = $this->connect();

		mysqli_set_charset($conn, 'UTF8');

		$sql = "SELECT * FROM video WHERE id=$vid";

		$result = mysqli_query($conn, $sql);

		$video = array();

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
			while($row= mysqli_fetch_assoc($result)) {

				$video[]=$row;

			}

		} 

		return $video;

		mysqli_close($conn);

	}

	public function doVideoEdit($video)
	{

		$conn = $this->connect();

		$sql = "UPDATE video SET title=N'".$video['title']."', link='".$video['link']."',  img='".$video['img']."' WHERE id='".$video['id']."'";

		$rs = $conn->query($sql);

		return $rs;
	}

}
?>