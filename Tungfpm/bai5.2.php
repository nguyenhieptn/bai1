<html>
<head>
    <title>Bai 5.2</title>

</head>

<!-- Mua theo thang -->

<body>
<form action="bai5.2.php" method="get">
    <label for="month">Nhập tháng : </label>
    <select name ="month"">
        <option value="1">Tháng 1</option>
        <option value="2">Tháng 2</option>
        <option value="3">Tháng 3</option>
        <option value="4">Tháng 4</option>
        <option value="5">Tháng 5</option>
        <option value="6">Tháng 6</option>
        <option value="7">Tháng 7</option>
        <option value="8">Tháng 8</option>
        <option value="9">Tháng 9</option>
        <option value="10">Tháng 10</option>
        <option value="11">Tháng 11</option>
        <option value="12">Tháng 12</option>
    </select>
    <br />
    <input type="submit" value="Hiển thị"/>
</form>
</body>
</html>

<?php
    if(isset($_GET['month'])){
        switch ($_GET['month']){
            case 1 :
            case 2 :
            case 3 :
                echo "Mùa xuân";
                break;
            case 4 : case 5 : case 6 :
                echo "Mùa hạ";
                break;
            case 7 : case 8 : case 9 :
                echo "Mùa thu";
                break;
            case 10 : case 11 : case 12:
                echo "Mùa đông";
                break;
            default : echo "nothing";
        }
    } else {
        echo "Mùa xuân";
    }
?>
