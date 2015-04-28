<?php
//config
require_once '../config.php';
require_once '../vendor/autoload.php';
if(!isset($_GET['url']))
{
    header("location:index.php?url=Dashboard/Index");
}
$boostrap = new Bootstrap("");