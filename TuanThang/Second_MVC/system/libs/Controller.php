<?php
class Controller
{
    public function __construct()
    {
        Session::init();
        $this->view = new View();
    }
    public function loadModel($name)
    {
        $destination = "models/".$name."_model.php";
       if(file_exists($destination))
       {
           require $destination;
           $name = $name."_model";
           $this->model = new $name;
       }
    }
}