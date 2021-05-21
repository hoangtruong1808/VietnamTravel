<?php
class khampha extends controller
{
    public $hotel;
    public function __construct()
    {
        $this->hotel=$this->model("khachsanmodel");
    }
    public function vn()
    {   
        $a=$this->model("khamphamodel");
        $baivietbatdau = 0;
        
        $this->view("layout1", ["detail"=>"theloaiview",
                "baivietmoinhat"=>$a->LayBaivietmoinhat(),
                "baivietmoi"=>$a->LayBaivietmoi(),
                "baiviet"=>$a->LayBaivietphantrang($baivietbatdau),
                "loaibaiviet"=>$a->Layloaibaiviet(),
                "tentheloaiviettat"=>"khampha",
                 "tentheloai"=>"Khám phá",
                 "bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                ]);
    }
    public function page($page)
    {   
        $a=$this->model("khamphamodel");
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
                "tentheloaiviettat"=>"khampha",
                 "tentheloai"=>"Khám phá",
                 "bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                ]);
    }


    public function diemden()
    {
        $a=$this->model("khamphamodel");
        $this->view("layout1", [
                "detail"=>"loaibaivietview",
                "baiviet"=>$a->LayDiemDen(),
                "tentheloai"=>"Khám phá",
                "tentheloaiviettat"=>"khampha",
                "loaibaiviet"=>$a->Layloaibaiviet(),
                "bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                ]);
    }

    public function amthuc()
    {
        $a=$this->model("khamphamodel");
        $this->view("layout1", [
                "detail"=>"loaibaivietview",
                "baiviet"=>$a->LayAmThuc(),
                "tentheloai"=>"Khám phá",
                "tentheloaiviettat"=>"khampha",
                "loaibaiviet"=>$a->Layloaibaiviet(),
                "bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                ]);
    }
    
    public function lehoi()
    {
        $a=$this->model("khamphamodel");
        $this->view("layout1", [
                "detail"=>"loaibaivietview",
                "baiviet"=>$a->LayLeHoi(),
                "tentheloai"=>"Khám phá",
                "tentheloaiviettat"=>"khampha",
                "loaibaiviet"=>$a->Layloaibaiviet(),"bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                ]);
    }
}
    
?>