<?php
Class GuestBook extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->view->render(DIR_APPLICATION."views/theme/".DIR_THEME,"common/Guestbook");
    }
}