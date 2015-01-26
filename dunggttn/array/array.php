<?php 
	$data = $_GET['data'];
	$array = explode("\n", $data);
	echo count($array)."<br>";
	for ($i=0; $i < count($array); $i++) { 
		$arrRows = explode("|", $array[$i]);
		echo $arrRows[0].' | '.trim($arrRows[1]).'@123.com'.' | '.trim($arrRows[2]);
		echo "<br>";
		# code...
	}
 ?>