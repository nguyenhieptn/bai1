<?php
class Login_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function run()
    {
        //Check member exists
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        $sth = $this->db->prepare("SELECT user_id FROM users
WHERE user_name = :user_name AND user_password= :user_password");
        $sth->execute(array(':user_name'=>$user_name,
            ':user_password'=>$user_password));
        $count = $sth->rowCount();

        if($count>0)
        {
            Session::set("loggedIn",$_POST['user_name']);
            if($_POST['user_name']=="admin"):
                Header("Location:".HTTP_SERVER."admin?url=Dashboard/index");
            else:
                Header("Location:".HTTP_SERVER);
            endif;
        }else
        {
            header("Location:".HTTP_SERVER."account/Login/error");
        }
    }
}