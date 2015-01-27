<html>
<head>
    <title>Bai 5.1</title>
    <style>
        #pheptinh {
            margin-left: 250px;
            margin-top: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>

<!-- May tinh ca nhan -->

<body>
<form action="bai5.1.php" method="get">
    <label for="so1">Nhập số thứ nhất:</label>
    <input type="text" name="s1" /> <br />
    <div id ="pheptinh">
    <select name ="pheptinh">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
    </select>
    </div>

    <label for="so2">Nhập số thứ hai: &nbsp;</label>
    <input type="text" name="s2" /> <br />
    <input type="submit" value="Kết quả"/>
</form>
</body>
</html>

<?php
if (isset($_GET['s1']) && isset($_GET['s2'])){
    if (is_numeric($_GET['s1']) && is_numeric($_GET['s2'])){
        $s1 = $_GET['s1'];
        $s2 = $_GET['s2'];
        if ($_GET['pheptinh'] == null || $_GET['pheptinh'] == "add"){
            echo "Kết quả = " . ($s1+$s2);
        }
        if ($_GET['pheptinh'] == "sub"){
            echo "Kết quả = " . ($s1-$s2);
        }
        if ($_GET['pheptinh'] == "mul"){
            echo "Kết quả = " . ($s1*$s2);
        }
        if ($_GET['pheptinh'] == "div"){
            if ($_GET['s2'] != 0)
            echo "Kết quả = " . ($s1/$s2);
            else echo "Nhập lại số thứ 2";
        }


    } else { echo "Các trường nhập vào phải là số";}
}else {
    echo "Các trường nhập số không được để trống";
}
?>
