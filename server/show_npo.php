<?php
	//get json file
	$json = file_get_contents("npo_list.json");
	$data = json_decode($json, true);

	//get tag if isset
	if(isset($_GET['tag'])){
		$tag = $_GET['tag'];
	}

	//edit the json if isset tag
	if(isset($tag)){
		for($i = 0;$i < count($data['list']);++$i){
			//echo $i . "~" . $data['list'][$i]['name'] . "<br/>";

			// whether have the tag , 0 is not , 1 is yes
			$ctr = 0;

			for($j = 0;$j < count($data['list'][$i]['tags']);++$j){
				//echo "—" . $data['list'][$i]['tags'][$j] . "<br/>";
				if($data['list'][$i]['tags'][$j] == $tag)$ctr = 1;
			}

			if($ctr == 0){
				// don't have tage delete
				$data['list'][$i]['choose'] = 0;
			}
		}
		echo json_encode($data);
	}
	else{
		echo json_encode($data);
	}
 ?>
