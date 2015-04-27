<?php
class Error extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->view->render(DIR_APPLICATION."views/theme/".DIR_THEME,"error/index");
    }
}