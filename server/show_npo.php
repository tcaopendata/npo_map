<?php
	//get json file
	$json = file_get_contents("npo_list.json");
	$data = json_decode($json, true);

	//get type donate if isset
	if(isset($_GET['type'])){
		$type = $_GET['type'];
	}
	if(isset($_GET['donate'])){
		$donate = $_GET['donate'];
	}

	//edit the json if isset type
	if(isset($type)){
		for($i = 0;$i < count($data['list']);++$i){
			// whether have the type , 0 is not , 1 is yes
			$ctr = 0;

			for($j = 0;$j < count($data['list'][$i]['type']);++$j){
				//echo "—" . $data['list'][$i]['type'][$j] . "<br/>";
				if($data['list'][$i]['type'][$j] == $type)$ctr = 1;
			}

			if($ctr == 0){
				// don't have typee delete
				$data['list'][$i]['choose'] = 0;
			}
		}
	}
	if(isset($donate)){
		for($i = 0;$i < count($data['list']);++$i){
			// whether have the donate , 0 is not , 1 is yes
			$ctr = 0;

			for($j = 0;$j < count($data['list'][$i]['donate']);++$j){
				//echo "—" . $data['list'][$i]['type'][$j] . "<br/>";
				if($data['list'][$i]['donate'][$j] == $type)$ctr = 1;
			}

			if($ctr == 0){
				// don't have typee delete
				$data['list'][$i]['choose'] = 0;
			}
		}
	}
	echo json_encode($data);
 ?>
