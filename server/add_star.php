<?php
	//require setting
	require('connect.php');
	date_default_timezone_set('Asia/Taipei');

	if(isset($_GET['id']) && isset($_GET['org_id']) && isset($_GET['star']) && isset($_GET['content']) && isset($_GET['time'])){
		$org_id = $_GET['org_id'];
		$out = [];

		$sql = 'SELECT * FROM star_record WHERE org_id=:org_id';

		$get_sql = $db->prepare($sql, array(PDO::FETCH_ASSOC));
	  $get_sql->execute(array(':org_id'=>$org_id));
	  while ($row = $get_sql->fetch(PDO::FETCH_ASSOC)){
			array_push($out,$row);
		}
		echo json_encode($out) . "<br/>";
	}
	else{
		echo '[]';
	}
?>
