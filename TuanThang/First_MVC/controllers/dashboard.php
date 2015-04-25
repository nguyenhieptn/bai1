<?php
class Dashboard extends Controller
{


    function __construct()
    {
        parent::__construct();
        $loggedIn = Session::get("loggedIn");
        if($loggedIn==false)
        {
            header("Location:/login");
        }
        $this->view->js=array('dashboard/js/customer.js');
    }

    function index()
    {
        $this->view->render("dashboard/index");
    }
    function logout()
    {
        Session::destroy();
        Header("Location:".URL."/index");
    }
}