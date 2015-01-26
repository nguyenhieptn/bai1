<!DOCTYPE html>
	<html>
	<head>
		<title>bai 4.5</title>
	</head>
	<body>
		<form action="bai45.php" method="get">
			<label for="name">Nhap N :</label>
			<input type="text" name="n" >
			<input type="submit" value= "hiển thị"> 
		</form>
		<?php 
		if (isset($_GET['n']))
			if ( is_numeric($_GET['n']) ){
				$N= $_GET['n'];
				echo "1";
				for($i=1 ;$i<=(2*$N-3);$i++)
					echo "&nbsp";
				echo "1";
				for ($i=2;$i<=$N;$i++){
					echo "<br>";
					for ($j=1;$j<$i;$j++)
					echo "&nbsp";
					echo $i;
					for($k=1;$k<=(2*$N-2*$i-1);$k++)
					echo "&nbsp";
					if ($i<>$N)
					echo $i;
					
				}
				for ($i=$N-1;$i>0;$i--){
					echo "<br>";
					for ($j=1;$j<$i;$j++)
					echo "&nbsp";
					echo $i;
					for($k=1;$k<=(2*$N-2*$i-1);$k++)
					echo "&nbsp";
					if ($i<>$N)
					echo $i;
					
				}
			} else {
				echo "nhap lai n phai la so";
			}
		?>
	</body>
	
	</html>	