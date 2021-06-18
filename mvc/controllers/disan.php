<?php
class disan extends controller
{
    public $hotel;
    public function __construct()
    {
        $this->hotel=$this->model("khachsanmodel");
    }
    public function vn()
    {   
        $a=$this->model("disanmodel");
        $b=$this->model("baivietmodel");
        $baivietbatdau = 0;
        $this->view("layout1", ["detail"=>"theloaiview",
                "baivietmoinhat"=>$a->LayBaivietmoinhat(),
                "baivietmoi"=>$a->LayBaivietmoi(),
                "baiviet"=>$a->LayBaivietphantrang($baivietbatdau),
                "loaibaiviet"=>$a->Layloaibaiviet(),
                "tentheloaiviettat"=>"disan",
                "tentheloai"=>"Di Sản",
                "bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                "baivietdocnhieunhat" => $b->LayBaiVietDocNhieuNhat(),
                ]);
    }
    public function page($page)
    {   
        $a=$this->model("disanmodel");
        $b=$this->model("baivietmodel");
        if (isset($page))
        {
            $baivietbatdau = ($page-1)*5;
        }
        else ($page=1);
        
        $this->view("layout1", ["detail"=>"theloaiview",
                "baivietmoinhat"=>$a->LayBaivietmoinhat(),
                "baivietmoi"=>$a->LayBaivietmoi(),
                "baiviet"=>$a->LayBaivietphantrang($baivietbatdau),
                "loaibaiviet"=>$a->Layloaibaiviet(),
                "tentheloaiviettat"=>"disan",
                 "tentheloai"=>"Di Sản",
                 "bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                 "baivietdocnhieunhat" => $b->LayBaiVietDocNhieuNhat(),
                ]);
    }
    public function disantulieu()
    {
        $a=$this->model("disanmodel");
        $b=$this->model("baivietmodel");
        $this->view("layout1", [
                "detail"=>"loaibaivietview",
                "baiviet"=>$a->LayDiSanTuLieu(),
                "tentheloai"=>"Di sản",
                "tentheloaiviettat"=>"disan",
                "loaibaiviet"=>$a->Layloaibaiviet(),
                "bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                "baivietdocnhieunhat" => $b->LayBaiVietDocNhieuNhat(),
                ]);
    }

    public function disanvatthe()
    {
        $a=$this->model("disanmodel");
        $b=$this->model("baivietmodel");
        $this->view("layout1", [
                "detail"=>"loaibaivietview",
                "baiviet"=>$a->LayDiSanVatThe(),
                "tentheloai"=>"Di sản",
                "tentheloaiviettat"=>"disan",
                "loaibaiviet"=>$a->Layloaibaiviet(),
                "bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                "baivietdocnhieunhat" => $b->LayBaiVietDocNhieuNhat(),
                ]);
    }
    
    public function disanphivatthe()
    {
        $a=$this->model("disanmodel");
        $b=$this->model("baivietmodel");
        $this->view("layout1", [
                "detail"=>"loaibaivietview",
                "baiviet"=>$a->LayDiSanPhiVatThe(),
                "tentheloai"=>"Di sản",
                "tentheloaiviettat"=>"disan",
                "loaibaiviet"=>$a->Layloaibaiviet(),
                "bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                "baivietdocnhieunhat" => $b->LayBaiVietDocNhieuNhat(),
                ]);
    }
}
    
?>