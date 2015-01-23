<?php 
	$n = $_GET['n'];
	if ($n==0) {
		$giaithua = 1;
		echo $n.'! = '.$giaithua;

		# code...
	}
	else
	{
		$giaithua = 1;
		for ($i=2; $i <= $n; $i++) { 
			$giaithua = $giaithua*$i;
			# code...
		}
	}
	echo $n.'! = '.$giaithua;
 ?>