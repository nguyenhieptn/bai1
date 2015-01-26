<html>
<head>
        <title>Bai 4.1</title>
</head>
<!-- Xin chao -->
<body>
    <form  action ="bai4.1.php" method="get">
    <label for="name">Nhap ten ban:</label>
    <input type="text" name="name" />
    <input type="submit" />
    </form>

    <?php
        if (isset($_GET['name'])) {$ten = $_GET['name'];}
        else {$ten = null;}
        if ($ten <> null)
            {echo "Xin chao ".$ten."! Chuc ban 1 ngay tot lanh.";}
    ?>
</body>
</html>

