
<?php

class SessionController extends BaseController{

    /** Hien thi ra trang login */
    public function create(){
        return View::make('session.login');
    }


    public function store(){
        $data = Input::only('email','password');
       
        $rules = [
            'email'=>'required',
            'password'=>'required',
        ];
        $messages =[
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập password',
        ];

        $valid = Validator::make($data,$rules,$messages);

        if($valid->passes()){
            if(Auth::attempt($data)){
                Redirect::to('/');
            } else {
                return Redirect::back()
                    -> withFlashMessage('Thông tin đăng nhập không hợp lệ');
            }
        } else {
            return Redirect::back()
                ->withErrors($valid);
        }

    }

    public function destroy(){

    }
}