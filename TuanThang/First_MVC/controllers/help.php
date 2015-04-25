<?php
Class Help extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->view->render("help/index");
    }
    public function advance()
    {
        $this->view->render("help/index");
        $this->model->advance();
    }
}