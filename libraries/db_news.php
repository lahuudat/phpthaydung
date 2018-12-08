<?php 
 
 function get_by_category($id){
 	global $con;
 	$sql="select *, DATE_FORMAT(created_on, '%Hh%i %d/%m/%y') as ngay_dang 
 	from news 
 	where cat_id ={$id}
 	order by created_on desc
 	";
 	$result=mysqli_query($con, $sql);
 	$data = array();
 	while ($row=mysqli_fetch_assoc($result)) {
 		$data[] = $row;
 	}
 	return $data;
 }


// function get_news($id){
// 	global $con;
// 	$sql="select * from news where news_id ={$id}";
// 	$result=mysqli_query($con, $sql);
// 	$data = array();
//  	if ($row=mysqli_fetch_assoc($result)==1){
//  		$data[] = $row;
//  		return $data;
//  	}
//  	return false;
// }

 function get_news($id){
 	global $con;
 	// $sql="select * from news where news_id ={$id}";

 	$sql="SELECT title, description, content, img, category.name, username FROM news INNER JOIN category on news.cat_id=category.cat_id INNER JOIN user ON news.user_id=user.id WHERE news.news_id={$id}";
 	$result=mysqli_query($con, $sql);
 	$data = array();
 	while ($row=mysqli_fetch_assoc($result)) {
 		$data[] = $row;
 	}
 	return $data;
 }


 function get_by_categories($arr_id){
 	global $con;
 	$str= implode(',',$arr_id );
 	$sql="
 	select *, DATE_FORMAT(created_on, '%Hh%i %d/%m/%y') as ngay_dang 
 	from news 
 	where cat_id in ({$str})
 	order by created_on desc
 	limit 5 ";

 	$result=mysqli_query($con, $sql);
 	$data = array();
 	while ($row=mysqli_fetch_assoc($result)) {
 		$data[] = $row;
 	}
 	return $data;
 }

 function get_video(){
 	global $con;
 	$sql="SELECT * from video";
 	$result=mysqli_query($con, $sql);
 	$data = array();
 	while ($row=mysqli_fetch_assoc($result)) {
 		$data[] = $row;
 	}
 	return $data;
 }

 function get_all_news(){
 	global $con;
 	// $sql="select * from news where news_id ={$id}";

 	$sql="SELECT news.news_id, title, description, content, img, news.created_on, category.name, username FROM news INNER JOIN category on news.cat_id=category.cat_id INNER JOIN user ON news.user_id=user.id order by news.created_on desc";
 	$result=mysqli_query($con, $sql);
 	$data = array();
 	while ($row=mysqli_fetch_assoc($result)) {
 		$data[] = $row;
 	}
 	return $data;
 }


 function get_news_by_cate($id){
 	global $con;
 	// $sql="select * from news where news_id ={$id}";

 	$sql="SELECT news.news_id, news.created_on, title, description, content, img, category.name, username FROM news INNER JOIN category on news.cat_id=category.cat_id INNER JOIN user ON news.user_id=user.id WHERE category.cat_id={$id} order by news.created_on desc";
 	$result=mysqli_query($con, $sql);
 	$data = array();
 	while ($row=mysqli_fetch_assoc($result)) {
 		$data[] = $row;
 	}
 	return $data;
 }

 function get_all_news_featured(){
 	global $con;
 	// $sql="select * from news where news_id ={$id}";

 	$sql="SELECT news.news_id, title, description, content, img, news.created_on, category.name, username FROM news INNER JOIN category on news.cat_id=category.cat_id INNER JOIN user ON news.user_id=user.id WHERE news.feature = 1 order by news.created_on desc";
 	$result=mysqli_query($con, $sql);
 	$data = array();
 	while ($row=mysqli_fetch_assoc($result)) {
 		$data[] = $row;
 	}
 	return $data;
 }

 ?>