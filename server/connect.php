<?php
	try{
		$dic = "mysql:dbname=bringooc_test;localhost=localhost;";
		$db = new PDO($dic,'bringooc','c4d2U9w1Ou',array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
		$dic->rollBack();
	}
?>
