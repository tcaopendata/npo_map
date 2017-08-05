<?php
	//get json file
	$json = file_get_contents("npo_list.json");
	$data = json_decode($json, true);

	//get tag if isset
	if(isset($_GET['tag'])){
		$tag = $_GET['tag'];
		echo $tag;
	}

	//select the json if isset tag
		echo json_encode($data);
 ?>
