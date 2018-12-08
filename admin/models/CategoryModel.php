<?php 

require_once('DbModel.php');

class CategoryModel extends DbModel
{

	public function getCategory()
	{

		$conn = $this->connect();

		mysqli_set_charset($conn, 'UTF8');
		
		$sql = "select 
    	cat.cat_id,
    	cat.name,
    	cat1.name as 'parent_name'
		from category cat
		left join category cat1 on cat.parent_id = cat1.cat_id";

		$result = mysqli_query($conn, $sql);

		$cats = array();

		if (mysqli_num_rows($result) > 0) {

		    // output data of each row

		    while($row= mysqli_fetch_assoc($result)) {

		        $cats[]=$row;

		    }

		} 

		return $cats;

		mysqli_close($conn);

	}

	public function getCategoryName()
	{
		$conn = $this->connect();

		mysqli_set_charset($conn, 'UTF8');

		$sql = "select cat_id, name from category";

		$result = mysqli_query($conn, $sql);

		$cats = array();

		if (mysqli_num_rows($result) > 0) {

		    // output data of each row

		    while($row= mysqli_fetch_assoc($result)) {

		        $cats[]=$row;

		    }

		} 

		return $cats;

		mysqli_close($conn);

	}

	public function doCategoryAdd($arr_cat)
	{

		$conn = $this->connect();

		if($arr_cat['parent_id']==''){
			$sql= "INSERT INTO `category` (`cat_id`, `name`, `parent_id`, `created_on`, `modified_on`) VALUES (NULL, N'".$arr_cat['cat_name']."', NULL, CURRENT_TIMESTAMP, NULL);";
		}else{

		$sql = "INSERT INTO category ( name, parent_id)
		VALUES (N'".$arr_cat['cat_name']."', N'".$arr_cat['parent_id']."');";
		}

		// echo $sql;

		// exit();

		$rs = $conn->query($sql);

		return $rs;
	}

	public function deleteCategory($did)
	{
		
		$conn = $this->connect();

		$sql = "DELETE FROM news WHERE cat_id=$did ;DELETE FROM category WHERE cat_id=$did";

		$rs = $conn->multi_query($sql);

		return $rs;

	}

	public function categoryEdit($eid)
	{

		$conn = $this->connect();

		mysqli_set_charset($conn, 'UTF8');

		$sql = "SELECT cat_id, name, parent_id FROM category WHERE cat_id=$eid";

		$result = mysqli_query($conn, $sql);

		$cats = array();

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
			while($row= mysqli_fetch_assoc($result)) {

				$cats[]=$row;

			}

		} 

		return $cats;

		mysqli_close($conn);

	}

	public function doCategoryEdit($cat)
	{

		$conn = $this->connect();

		if($cat['parent_id']==''){
			
			$sql = "UPDATE category SET name=N'".$cat['name']."', parent_id=NULL WHERE cat_id='".$cat['cat_id']."'";

		}else{
			
			$sql = "UPDATE category SET name=N'".$cat['name']."', parent_id='".$cat['parent_id']."' WHERE cat_id='".$cat['cat_id']."'";
		}

		$rs = $conn->query($sql);

		return $rs;
	}
	
}

?>