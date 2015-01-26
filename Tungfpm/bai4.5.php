<html>
<head>
    <title>Bai 4.5</title>
</head>
<!-- Hien thi day 2 -->
<body>
<form action="bai4.5.php" method="get">
    <label for="n">Nhập N : </label>
    <input type="text" name="n" />
    <input type="submit" value="Hiển thị" />
</form>
</body>
</html>

<?php
if (isset($_GET['n'])){
    if (is_numeric($_GET['n'])){
        $n = $_GET['n'];
        if ($n >0) {
            for ($i = 1; $i <= $n; $i++) {
                for ($j = 0; $j < $i; $j++) {
                    echo "&nbsp";
                }
                echo $i. "<br/>";
            }
        } else {
            echo "Vui lòng nhập lại n ";
        }
    } else { echo "n phải là số";}
} else {
    echo "Vui lòng nhập vào n";
}
?>