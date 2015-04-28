<?php
class Bootstrap
{
    /*
     * GET ROUTE FROM $_GET'S VALUE FOR REQUIRE TO SPECIFIC CONTROLLER COMPONENT
     * */
    public function __construct($dir)
    {
        /*
         * Decision the file name will be require
         * if the file name not exists, redirect to index
         */
        echo "<b>URL:</b> ".$_GET['url']."<br>";
        if(isset($_GET['url'])) 
        {
        /*
         * The completely structure of $_GET's value is the combination of file name,method and parameter
         * put all element of $_GET's value to array
         * */
            $url = rtrim($_GET['url'],"/");
            $url = explode("/", $url);
            $folder = $url[0];
            $file_name = (isset($url[1]))?$url[1]:"";
        }else
        {
            $folder = "common";
            $file_name = 'Guestbook';
        }

        /*
         * Verify the file name exists to require it or refer to error class
         */
        $destination = $dir."controllers/" . $folder ."/". $file_name . ".php";
        echo "<b>controller destination:</b> ".$destination."<br>";
        if (file_exists($destination) && is_string($file_name)
            && preg_match('/^[a-z_]+$/i',$file_name) && $file_name!="")
        {
            require_once $destination;
        }
        else
        {
            require_once $dir."controllers/common/error.php";
            $error = new Error();
            return false;
        }
        /*
         * If the sum of filename's array's elements more than 1,
         * refer to method defined in  $file_name  */

        $controller = new $file_name;
        echo "<b>Controller object define:</b> ".$file_name."<br>";
        $controller->loadModel($dir,$folder,$file_name);
        if (isset($url[3])) {
            $controller->{$url[2]}($url[3]);
        } else if (isset($url[2])) {
            $controller->{$url[2]}();
        } else
        {
            $controller->index();
        }
    }
}