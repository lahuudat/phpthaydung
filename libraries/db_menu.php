<?php 

function get_menu(){
	global $con;
	$sql= "select * from category";
	$result= mysqli_query($con, $sql);
	$data=array();
	while ($row= mysqli_fetch_assoc($result)){
		if($row['parent_id']==null){
			$ma=$row['cat_id'];
			$data[$ma]=$row;
			$data[$ma]['child']=array();
		} else{
			$ma=$row['parent_id'];
			$data[$ma]['child'][]=$row;
		}
	}
	return $data;

}