<?php
Class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->view->render(DIR_APPLICATION."views/theme/".DIR_THEME,"index/index");
    }
}