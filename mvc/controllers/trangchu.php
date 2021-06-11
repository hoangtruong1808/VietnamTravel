<?php
class trangchu extends controller
{
    public function vn()
    {  
        $this->view("layout2", ["detail"=>"trangchuview"]);
    }
    public function comment()
    { 
        $a=$this->model("commentmodel");
        $b=$this->model("usermodel");
        $hoten = $b->LayTenUser();
        if (isset($_POST["comment-text"]))
        {

            $comment = $_POST["comment-text"];
            $theloai = $_POST["theloai"];
            $idbaiviet = $_POST["idbaiviet"];
            $link = $_POST["link"];
            $hotenuser = $hoten['hoten'];
            $a->ThemCommentMoi($comment, $theloai, $hotenuser, $idbaiviet, $link);
            header("location: .$link ");
        }
        
        
    }
}
    
?>