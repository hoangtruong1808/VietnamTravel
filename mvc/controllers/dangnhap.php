<?php
class dangnhap extends controller
{
    public function __construct()
    {

    }
    public function vn()
    {
        
        $this->view("dangnhap", ["result"=>""]);

    }
    public function login()
    {
        $a=$this->model("usermodel");
        if (isset($_POST['btnlogin']))
        {
            $username = $_POST['username'];
            $passwordcheck = $_POST['password'];
            $password="";
            if (empty($_POST['username']) || empty($_POST['password']))
            {
                $this->view("dangnhap", ["result"=>"Vui lòng nhập mật khẩu!"]);
            }
            foreach($a->login($username) as $user)
            {
                $id = $user["ID"];
                $password = $user["Password"];
            }
            if (password_verify($passwordcheck, $password))
            {
                $_SESSION["id"]=$id;
                header("location:../trangchu");
            }
            else ($this->view("dangnhap", ["result"=>"Bạn nhập sai mật khẩu!"]));
        }
    }
    public function dangxuat()
    {
        unset($_SESSION["id"]);
        session_destroy();
        header("location:../trangchu");
    }
}
?>