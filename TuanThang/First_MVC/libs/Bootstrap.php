<?php
class Bootstrap
{
    /*
     * GET ROUTE FROM $_GET'S VALUE FOR REQUIRE TO SPECIFIC CONTROLLER COMPONENT
     * */
    public function __construct()
    {
        /*
         * The completely structure of $_GET's value is the combination of file name,method and parameter
         * put all element of $_GET's value to array
         * */
        $url = rtrim($_GET['url'],"/");
        $url = explode("/", $url);
        /*
         * Decision the file name will be require
         * if the file name not exists, redirect to index
         */
        if (empty($url[0])) {
            $file_name = 'index';
        } else {
            $file_name = $url[0];
        }
        /*
         * Verify the file name exists to require it or refer to error class
         */
        $destination = "controllers/" . $file_name . ".php";
        if (file_exists($destination)) {
            require_once $destination;
        } else {
            require_once "controllers/error.php";
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