<?php 

class CategoryView{

	public function showCat($cModel)
	{

		require_once('templates/admin/cate_list.php');

	}

	public function addCat($cModel)
	{

		require_once('templates/admin/cate_add.php');
		
	}

	public function notifyAddCategory($cModel)
	{

		if($cModel){

				// echo "thêm thành công, <a href='http://localhost:8888/user-vff/?action=list'>click để về lại trang chủ</a>";
			?>

			<script language="javascript">

				alert('add success');

				window.location = '?action=categoryList';

			</script>

			<?php

		}else {

			echo "thất bại";

		}

	}

	public function notifyDeleteCategory($cModel)
	{
		if($cModel){

			header("location:?action=categoryList");

		}else {

			echo "xóa thất bại, <a href='location:?action=list'>click để về lại trang chủ</a>";

		}

	}

	public function categoryEdit($cModel, $cModel2)
	{
		
		require_once('templates/admin/cate_edit.php');

	}

	public function notifyEditCategory($cModel)
	{
		if($cModel){

				// echo "thêm thành công, <a href='http://localhost:8888/user-vff/?action=list'>click để về lại trang chủ</a>";
			?>

			<script language="javascript">

				alert('edit success');

				window.location = '?action=categoryList';

			</script>

			<?php

		}else {

			echo "thất bại";

		}
	}
}

 ?>