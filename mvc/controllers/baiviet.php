<?php
class baiviet extends controller
{
    public $hotel;
    public function __construct()
    {
        $this->hotel=$this->model("khachsanmodel");
    }
    public function vn()
    {
        $a=$this->model("baivietmodel");
        $b=$this->model("vanhoavanguoivietmodel");
        $c=$this->model("khamphamodel");
        $d=$this->model("disanmodel");        
        $this->view("layout1", ["detail"=>"baivietview",
                "baivietmoinhat"=>$a->LayBaivietmoinhat(),
                "baivietmoi"=>$a->LayBaBaivietmoi(),
                "baivietvhnvmoi"=>$b->LayBaivietmoi(),
                "baivietkhamphamoi"=>$c->LayBaivietmoi(),
                "baivietdisanmoi"=>$d->LayBaivietmoi(),
                "bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                "baivietdocnhieunhat" => $a->LayBaiVietDocNhieuNhat(),
                ]);
    }
    public function blog($tieudekhongdau)
    {
        $a=$this->model("baivietmodel");
        $this->view("layout1", ["detail"=>"blogview",
                "baiviet"=>$a->LayBaiViet($tieudekhongdau),
                "baivietcungtheloai"=>$a->LayBaiVietCungTheLoai($a->LayBaiViet($tieudekhongdau)["idTheLoai"]),
                "bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(), 
                "baivietdocnhieunhat" => $a->LayBaiVietDocNhieuNhat(),
                ]);
        $a->CapNhatSoLanXemBaiViet($tieudekhongdau);
                    
    }
    public function timkiem()
    {
        
        $a=$this->model("khamphamodel");
        $b=$this->model("baivietmodel");
        if (isset($_POST['tukhoa']))
        {
           $tukhoa = $_POST['tukhoa'];
        }
        $this->view("layout1", [
                "detail"=>"loaibaivietview",
                "baiviet"=>$b->LayBaiVietTimKiem($tukhoa),
                "tentheloai"=>"Tìm kiếm",
                "tentheloaiviettat"=>"khampha",
                "loaibaiviet"=>$a->Layloaibaiviet(),
                "bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                "baivietdocnhieunhat" => $b->LayBaiVietDocNhieuNhat(),
                ]);
    }
}
    
?>