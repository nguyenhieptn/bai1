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
        if(isset($_GET['url'])) 
        {
        /*
         * The completely structure of $_GET's value is the combination of file name,method and parameter
         * put all element of $_GET's value to array
         * */
            $url = rtrim($_GET['url'],"/");
            $url = explode("/", $url);
            $file_name = $url[0];
        }else
        {
             $file_name = 'Index';
        }


        /*
         * Verify the file name exists to require it or refer to error class
         */
        $destination = $dir."controllers/" . $file_name . ".php";
        if (file_exists($destination) && is_string($file_name) && preg_match('/^[a-z_]+$/i',$file_name)) {
            require_once $destination;
        } else {
            require_once $dir."controllers/error.php";
            $error = new Error();
            return false;
        }
        /*
         * If the sum of filename's array's elements more than 1,
         * refer to method defined in  $file_name  */

        $controller = new $file_name;
        $controller->loadModel($file_name);
        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else if (isset($url[1])) {
            $controller->{$url[1]}();
        } else
        {
            $controller->index();
        }
    }
}