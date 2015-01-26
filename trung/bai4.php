<!DOCTYPE html>
	<html>
	<head>
		<title>bai 4.1</title>
	</head>
	<body>
		<form action="bai4.php" method="get">
			<label for="name">Nhap ten ban :</label>
			<input type="text" name="name" >
			<input type="submit">
		</form>
		<?php 
		$ten = "";
		if (isset($_GET['name']))
		$ten = $_GET['name'];
		if ($ten <> "")
		echo 'Xin chao '.$ten.' ! Chuc ban ngay moi tot lanh';
		?>
	</body>
	
	</html>	