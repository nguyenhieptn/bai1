<html>
<head>
</head>
<body>
<form action="bai4.2.php" method="get">
    <label for="name">Nhap he so A:</label>
    <input type="text" name="a" /> <br />
    <label for="name">Nhap he so B:</label>
    <input type="text" name="b" /> <br />
    <label for="name">Nhap he so C:</label>
    <input type="text" name="c" /> <br />
    <input type="submit" value="Tính nghiệm"/>
</form>
</body>
</html>

<?php
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])){
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    $delta = $b*$b-4*$a*$c;
    if ($delta < 0) {
        echo "Phương trình vô nghiệm";
    } else if($delta==0) {
        if ((-$b/2*$a) != 0) {
            echo "Phương trình có nghiệm kép";
            echo " x = " . (-$b / 2 * $a);
        } else { echo "Vui lòng nhập lại";}
    } else {
        echo "Phương trình có 2 nghiệm "; 
        echo " x1 = ".(-$b-sqrt($delta))/(2*$a);
        echo " x2 = ".(-$b+sqrt($delta))/(2*$a);
    }
} else {
}




?>
