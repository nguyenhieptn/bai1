<html>
<head>
</head>
<body>
<form action="bai42.php" method="get">
<label for="name">Nhap he so A:</label>
<input type="text" name="a" /> <br />
<label for="name">Nhap he so B:</label>
<input type="text" name="b" /> <br />
<label for="name">Nhap he so C:</label>
<input type="text" name="c" /> <br />
<input type="submit" value="tinh nghiem"/>
</form>
<?php 
if (isset($_GET['a']))
$a = $_GET['a'];
if (isset($_GET['b']))
$b = $_GET['b'];
if (isset($_GET['c']))
$c = $_GET['c'];
if(isset($_GET['c'])&isset($_GET['a'])&isset($_GET['b']))
{
	$delta = (($b*$b)-(4*$a*$c));
if ($delta <0) {
	echo "phuong trinh vo nghiem";
} else if($delta==0) {
	echo "Phuong trinh co nghiem kep";
	echo " x = ". (-$b/2*$a);
} else {
	echo "Phuong trinh co 2 nghiem.";
	echo "<br>";
	echo " x1 = ".(-$b-sqrt($delta))/(2*$a);
	echo "<br>";
	echo " x2 = ".(-$b+sqrt($delta))/(2*$a);
}
}
?>

</body>
</html>
