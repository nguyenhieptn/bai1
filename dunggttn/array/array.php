<?php 
	$data = $_GET['data'];
	$array = explode("\n", $data);
	echo count($array)."<br>";
	for ($i=0; $i < count($array); $i++) { 
		$arrRows = explode("|", $array[$i]);
		echo $arrRows[0].' | '.$arrRows[1].' | '.trim($arrRows[2]).'@123.com';
		echo "<br>";
		# code...
	}
 ?>