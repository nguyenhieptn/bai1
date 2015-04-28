<?php
class Logout extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        Session::destroy();
        header("Location:".HTTP_SERVER);
    }

}