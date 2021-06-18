<?php
class trangchu extends controller
{
    public function vn()
    {  
        $a=$this->model("baivietmodel");
        $c=$this->model("diadiemmodel");
        $this->view("layout2", ["detail"=>"trangchuview",
                                "pleiku"=>$c->LaySoDiaDiemCuaThanhPho("Pleiku"),
                                "tphcm"=>$c->LaySoDiaDiemCuaThanhPho("TP.Hồ Chí Minh"),
                                "hanoi"=>$c->LaySoDiaDiemCuaThanhPho("Hà Nội"),
                                "danang"=>$c->LaySoDiaDiemCuaThanhPho("Đà Nẵng"),
                                "diadiem"=>$c->LayBonDiaDiemMoi(),
                                "baiviet"=>$a->LayBaiVietDocNhieuNhat(),

                ]);
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