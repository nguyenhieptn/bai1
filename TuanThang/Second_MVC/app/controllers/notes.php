<?php
class notes extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->js = array("notes/js/default.js");
    }
    public function index()
    {
        $this->view->note_list = $this->model->getNoteListings();
        $this->view->render("notes/index");
    }
    public function noteInsert()
    {
        $this->model->noteInsert();
    }
    public function getNoteListings()
    {
        $this->model->getNoteListings();
    }
}