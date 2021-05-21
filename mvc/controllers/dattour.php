<?php
class dattour extends controller
{
    public $hotel;
    public function __construct()
    {
        $this->hotel=$this->model("khachsanmodel");
    }
    public function vn()
    {
        $a=$this->model("tourmodel");
        $this->view("layout2", ["detail"=>"tourview",
                    "tour1"=>$a->LayTourMoi(0),
                    "tour2"=>$a->LayTourMoi(4),
                    "tour3"=>$a->LayTourMoi(8),
                    "tour4"=>$a->LayTourMoi(12),
                    ]);

    }
    public function page($page)
    {
        $a=$this->model("tourmodel");
        if (isset($page))
        {
            $tourbatdau = 0+16*($page-1);
            $tourbatdau2 = 4+16*($page-1);
            $tourbatdau3 = 8+16*($page-1);
            $tourbatdau4 = 12+16*($page-1);
        }
        $this->view("layout2", ["detail"=>"tourview",
                    "tour1"=>$a->LayTourMoi($tourbatdau),
                    "tour2"=>$a->LayTourMoi($tourbatdau2),
                    "tour3"=>$a->LayTourMoi($tourbatdau3),
                    "tour4"=>$a->LayTourMoi($tourbatdau4),
                    ]);

    }

    public function chitiettour($matour)
    {
        
        $a=$this->model("tourmodel");
        $this->view("layout1",["detail"=>"chitiettourview",
                    "chitiettour"=>$a->LayChiTietTour($matour),
                    "batourlienquan"=>$a->LayBaTourLienQuan($a->LayChiTietTour($matour)["diemxuatphat"], $a->LayChiTietTour($matour)["diemden"]),
                    "bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                    ]);
    }

    public function dattour($idtour)
    {   
        if (isset($_SESSION["tour"][$idtour]))
        {
            $_SESSION["tour"][$idtour]++;
        }
        else $_SESSION["tour"][$idtour]=1;
        header("location: ../../taikhoan/donhang");
    }

}
?>