<!DOCTYPE html>
	<html>
	<head>
		<title>bai 4.4</title>
	</head>
	<body>
		<form action="bai44.php" method="get">
			<label for="name">Nhap N :</label>
			<input type="text" name="n" >
			<input type="submit" value= "hiển thị"> 
		</form>
		<?php 
		if (isset($_GET['n']))
			if ( is_numeric($_GET['n']) ){
				$N= $_GET['n'];
				echo "1";
				for ($i=2;$i<$N;$i++){
					echo "<br>";
					for ($j=1;$j<$i;$j++)
					echo "&nbsp";
					echo $i;
				}
			} else {
				echo "nhap lai n phai la so";
			}
		?>
	</body>
	
	</html>	