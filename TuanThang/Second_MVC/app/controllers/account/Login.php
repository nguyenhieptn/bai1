<?php
class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->view->render(DIR_APPLICATION."views/theme/".DIR_THEME,"account/login");
    }
    public function run()
    {
        $this->model->run();
    }
    public function error()
    {
        $this->view->error = "Hmm, Maybe you have some problem with your memory or your speed typing, try again<br>";
        $this->index();
    }
}