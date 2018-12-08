<?php 


class VideoView
{
	
	public function showVideo($vModel)
	{

		require_once('templates/admin/video_list.php');

	}

	public function videoEdit($vModel)
	{

		require_once('templates/admin/video_edit.php');
	
	}

	public function notifyEditVideo($vModel)
	{

		if($vModel){

			?>

			<script language="javascript">

				alert('edit success');

				window.location = '?action=videoList';

			</script>

			<?php

		}else {

			echo "thất bại";

		}
	}
}

 ?>