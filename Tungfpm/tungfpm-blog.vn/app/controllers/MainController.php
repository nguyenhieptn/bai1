<?php

class MainController extends BaseController
{

    public function about()
    {
        return View::make('main.about');
    }
}