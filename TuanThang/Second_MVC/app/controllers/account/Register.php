<?php
class register extends Controller
{
    public $username;
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->view->render("register/index");
    }
    public function getUsername($username)
    {
        $this->username = $username;
        echo "<b>User name:</b> ".$username;
        require_once 'models/Help_model.php';
        $help_model = new Help_model();
        $this->view->render("register/index");
    }
}