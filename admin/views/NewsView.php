<?php 


class NewsView
{
	
	public function showNews($nModel)
	{

		require_once('templates/admin/news_list.php');

	}

	public function addNews($cModel)
	{

		require_once('templates/admin/news_add.php');
		
	}

	public function notifyAddNews($nModel)
	{

		if($nModel){

			?>

			<script language="javascript">

				alert('add success');

				window.location = '?action=newsList';

			</script>

			<?php

		}else {

			echo "thất bại";

		}

	}

	public function newsEdit($nModel, $cModel2)
	{
		
		require_once('templates/admin/news_edit.php');

	}

	public function notifyEditNews($nModel)
	{
		if($nModel){

				// echo "thêm thành công, <a href='http://localhost:8888/user-vff/?action=list'>click để về lại trang chủ</a>";
			?>

			<script language="javascript">

				alert('edit success');

				window.location = '?action=newsList';

			</script>

			<?php

		}else {

			echo "thất bại";

		}
	}

	public function notifyDeleteNews($nModel)
	{
		if($nModel){

			header("location:?action=newsList");

		}else {

			echo "xóa thất bại, <a href='?action=newsList'>click để về lại trang chủ</a>";

		}

	}
}

 ?>