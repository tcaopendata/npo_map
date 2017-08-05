<?php
	//require setting
	header('Access-Control-Allow-Origin: *');  
	require('connect.php');
	date_default_timezone_set('Asia/Taipei');

	if(isset($_GET['org_id']) && isset($_GET['star']) && isset($_GET['content']) && isset($_GET['name'])){
		$org_id = $_GET['org_id'];
		$star = $_GET['star'];
		$content = $_GET['content'];
		$name = $_GET['name'];

		$sql = "INSERT INTO star_record (id, org_id, name, star, content, starTime) VALUES (NULL, :org_id, :name, :star, :content, NULL)";
		$insert_sql = $db->prepare($sql);
		$insert_sql->execute(array(':org_id'=>$org_id,':name'=>$name,':star'=>$star,':content'=>$content));

		echo "success";
	}
	else{
		echo 'fail';
	}
?>
