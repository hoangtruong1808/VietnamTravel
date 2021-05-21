<?php
class dangki extends controller
{
    public function vn()
    {
       
        $this->view("dangki", []);

    }
    public function dangkiuser()
    {
        if (isset($_POST["btn-dangky"]))
        {
            $ten = $_POST["ten"];
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $diachi = $_POST["diachi"];
            $dienthoai = $_POST["dienthoai"];
        }
        $a=$this->model("usermodel");
        $this->view("dangki", ["ketqua"=> $a->ThemUser($ten, $email, $username, $password, $diachi,$dienthoai),
        ]);
    }
}
?>