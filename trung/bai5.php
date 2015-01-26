<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form action="bai5.php" method="get">
			<label for="name">a:</label>
			<input type="text" name="a" >
			<select name ="select" >
				<option value=""selected=""> </option>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">x</option>
				<option value="/">/</option>
			</select>
			<label for="name">b:</label>
			<input type="text" name="b" >
			<input type="submit" value= "tính">
			
		</form>
			
<?php
	if (isset($_GET['a']))
		$a = $_GET['a'];
	if (isset($_GET['b']))
		$b = $_GET['b'];
	if(isset($_GET['a'])&& isset($_GET['b'])){
		if (is_numeric($_GET['a'])&&is_numeric($_GET['b'])){
			if (isset($_GET['select'])){
				if (($_GET['select'])=='+'){
					echo $a+$b;
				} else if(($_GET['select'])=='-'){
					echo $a-$b;
					} else if (($_GET['select'])=='*'){
						echo $a*$b;
					} else {
						if ($b<>0){
								echo $a/$b;
						} else echo "không thể chia cho không";
					}
		}
		}else {
			echo "a or b phải là số";
		}
	}else echo "a or b không được để trống";
	
?>
</html>
