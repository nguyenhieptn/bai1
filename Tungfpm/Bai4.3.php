<html>
<head>
    <title>Bai 4.3</title>
</head>
<!-- Tinh giai thua cua n -->
<body>
<form  action ="bai4.3.php" method="get">
    <label for="n">Nhap N :</label>
    <input type="text" name="n" />
    <input type="submit" value="Tính" />
</form>
</body>
</html>

<?php
    if (isset($_GET['n'])){
        if (is_numeric($_GET['n'])){
            $n = $_GET['n'];
            if ($n >0) {
                $gt = 1;
                for ($i = 1; $i <= $n; $i++) {
                    $gt = $gt*$i;
                }
                echo $n . "! = ". $gt;
            } else {
                echo "Vui lòng nhập lại n ";
            }
        } else { echo "n là số cơ ";}
    } else {
        echo "Vui lòng nhập vào n";
    }
?>