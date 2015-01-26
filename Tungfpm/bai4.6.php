<html>
<head>
    <title>Bai 4.6</title>
</head>
<!-- Hien thi day 3 -->
<body>
<form action="bai4.6.php" method="get">
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
                    echo "&nbsp &nbsp ";
                }
                if ($i != $n){echo $i;}
                for ($j = 0 ; $j < $n- $i; $j++) {
                    echo "&nbsp &nbsp &nbsp &nbsp";
                }
                echo $i. "<br/>";
            }
            for ($i = 1; $i < $n; $i++) {
                for ($j = 0; $j < $n-$i; $j++) {
                    echo "&nbsp &nbsp ";
                }
                echo $n-$i;
                for ($j = 0 ; $j < $i; $j++) {
                    echo "&nbsp &nbsp &nbsp &nbsp";
                }
                echo $n-$i. "<br/>";
            }
        } else {
            echo "Vui lòng nhập lại n ";
        }
    } else { echo "n phải là số";}
} else {
    echo "Vui lòng nhập vào n";
}
?>