<?php
//config
require_once 'config.php';
require_once 'vendor/autoload.php';
if(!isset($_GET['url']))
{
    header("location:common/Guestbook");
}
$boostrap = new Bootstrap(DIR_APPLICATION);