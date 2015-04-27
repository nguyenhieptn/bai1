<?php
class View
{
    public function render($dir,$name)
    {
        require_once $dir."template/layouts/header.php";
        require_once $dir."template/".$name.".php";
        require_once $dir."template/layouts/footer.php";
    }
}