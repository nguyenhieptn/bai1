<?php

class SessionController extends BaseController{

    /** Hien thi ra trang login */
    public function create(){
        return View::make('session.login');
    }

    public function store()
    {
        $data = Input::only('email', 'password');
        if (Auth::attempt($data)) {
            return Redirect::to('/');
        } else {
            return Redirect::back()
                ->withFlashMessage('Thông tin đăng nhập không hợp lệ');
        }

    }
    public function destroy(){

    }
}