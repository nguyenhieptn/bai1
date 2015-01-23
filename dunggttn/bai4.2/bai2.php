<?php 
	$a = $_GET['a'];
	$b=$_GET['b'];
	$c=$_GET['c'];

	$detal = $b*$b-4*$a*$c;
	echo 'detal = '.$detal;
	echo '<br>';
	if ($detal<0) {
		echo 'phuong trinh vo nghiem';

		# code...
	}
	else if ($detal==0) {
		echo 'phuong trinh co nghiem kep : ';
		echo "x = ".(-$b/2*$a);
		# code...
	}
	else
	{
		echo 'phuong trinh co hai nghiem <br>';
		echo 'x1 = '.round((-$b-sqrt(detal))/(2*$a),2).'<br>';
		echo 'x2 = '.round((-$b+sqrt(detal))/(2*$a),2);

	}
 ?>