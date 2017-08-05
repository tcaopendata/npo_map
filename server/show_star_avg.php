<?php
	//require setting

	require('connect.php');
	date_default_timezone_set('Asia/Taipei');

	if(isset($_GET['org_id'])){
		$org_id = $_GET['org_id'];
		$out = [];

		$sql = 'SELECT SUM(star),COUNT(star) FROM star_record WHERE org_id=:org_id';

		$count_sql = $db->prepare($sql, array(PDO::FETCH_ASSOC));
	  $count_sql->execute(array(':org_id'=>$org_id));
	  $row = $count_sql->fetch(PDO::FETCH_ASSOC);

		if($row['SUM(star)'] == null)echo "無評分";
		else echo $row['SUM(star)'] / $row['COUNT(star)'];
		//echo json_encode($out);
	}
	else{
		echo '[]';
	}
?>
