<?php
class Error extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->view->render(DIR_ADMIN."views/theme/".DIR_THEME,"error/index");
    }
}