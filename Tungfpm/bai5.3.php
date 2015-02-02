<html>
<head>
    <title>Bai 5.3</title>
</head>
<!-- Mang -->
<body>
    <form action="bai5.3.php" method="get">
        <label for="input">Chọn Quốc gia</label>
        <select name="ceu">
            <option value="Italy">Italy</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Belgium">Belgium</option>
            <option value="Denmark">Denmark</option>
            <option value="Finland">Finland</option>
            <option value="Viet Nam">Viet Nam</option>
        </select>
        <br/>
        <input type="submit" value="Tên thủ đô"/>
    </form>
</body>
</html>

<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Viet Nam" =>"Ha Noi");

if (isset($_GET['ceu'])){
    echo $ceu[$_GET['ceu']];
}
?>