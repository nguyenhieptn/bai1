<?php
class Controller
{
    public function __construct()
    {
        Session::init();
        $this->view = new View();
    }
    public function loadModel($dir,$folder,$name)
    {
        $destination = $dir."models/".$folder."/".$name.".php";
        echo "<b>Model:</b>".$destination."<br>";
       if(file_exists($destination))
       {
           require $destination;
           $name = $name."_model";
           echo "<b>Model Object: </b>".$name."<br>";
           $this->model = new $name;
       }
    }
}