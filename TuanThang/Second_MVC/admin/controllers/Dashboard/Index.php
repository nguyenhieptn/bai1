<?php
class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $loggedIn = Session::get("loggedIn");
        if($loggedIn==false)
        {
            header("Location:".HTTP_SERVER."login");
        }else if($loggedIn!="admin")
        {
            header("Location:".HTTP_SERVER);
        }
    }
    public function index()
    {
        $this->view->render("views/","Dashboard/index");
    }
}