<?php
class diadiem extends controller
{
    protected $a;
    protected $thanhpho;
    protected $loaidiadiem;
    public function __construct()
    {
        $this->a=$this->model("diadiemmodel");
        $this->thanhpho=$this->a->LayDuLieu("thanhpho");
        $this->loaidiadiem=$this->a->LayDuLieu("loaidiadiem");
    }

    public function vn()
    {        
        foreach($this->a->SoDiaDiem() as $diadiem)
        {
            $sodiadiem=$diadiem[0];
        }
        $sopage = ceil($sodiadiem/9);
        $this->view("layoutfilter", ["detail"=>"diadiemview",
                    "diadiem1"=>$this->a->LayDiaDiemMoi(0),
                    "diadiem2"=>$this->a->LayDiaDiemMoi(3),
                    "diadiem3"=>$this->a->LayDiaDiemMoi(6),
                    "thanhpho"=>$this->thanhpho,
                    "loaidiadiem"=>$this->loaidiadiem,
                    "sopage"=>$sopage,
                    ]);
    }
    public function page($page)
    {        
        foreach($this->a->SoDiaDiem() as $diadiem)
        {
            $sodiadiem=$diadiem[0];
        }
        $sopage = ceil($sodiadiem/9);
        $this->view("layoutfilter", ["detail"=>"diadiemview",
                    "diadiem1"=>$this->a->LayDiaDiemMoi($page*9-8),
                    "diadiem2"=>$this->a->LayDiaDiemMoi($page*9-5),
                    "diadiem3"=>$this->a->LayDiaDiemMoi($page*9-2),
                    "thanhpho"=>$this->thanhpho,
                    "loaidiadiem"=>$this->loaidiadiem,
                    "sopage"=>$sopage,
                    ]);
    }
    public function filter()
    {
        $qr ="";
        if (isset($_POST["btn-filter"]))
        {
            if (isset($_POST["gia"][0]))
            {
                $gia=$_POST["gia"][0];
                $qr .= " AND gia='$gia'";
            }              
            if (isset($_POST["thanhpho"][0]))
            {
                $thanhpho=$_POST["thanhpho"][0];
                $qr .= " AND thanhpho='$thanhpho'";
            }       
            if (isset($_POST["chuyenmuc"][0]))
            {
                $chuyenmuc=$_POST["chuyenmuc"][0];
                $qr .= " AND chuyenmuc='$chuyenmuc'";
            }
            if (isset($_POST["loaidiadiem"][0]))
            {
                $loaidiadiem=$_POST["loaidiadiem"][0];
                $qr .= " AND loaidiadiem='$loaidiadiem'";
            }
            if (isset($_POST["tiennghi"]))
            {
                $tiennghi = implode(" - ", $_POST["tiennghi"]);
                $qr .= " AND tiennghi REGEXP '$tiennghi'";
            }
        }
        $this->view("layoutfilter", ["detail"=>"diadiemview",
                    "diadiem1"=>$this->a->LocDiaDiem($qr, 0),
                    "diadiem2"=>$this->a->LocDiaDiem($qr, 3),
                    "diadiem3"=>$this->a->LocDiaDiem($qr, 6),
                    "diadiem4"=>$this->a->LocDiaDiem($qr, 9),
                    "thanhpho"=>$this->thanhpho,
                    "loaidiadiem"=>$this->loaidiadiem,
                    "sopage"=>1,
                    ]);
    }
    public function boloc($loai, $value)
    {
        $this->view("layoutfilter", ["detail"=>"diadiemview",
                    "diadiem1"=>$this->a->LayDiaDiemMoiTheo($loai, $value, 0),
                    "diadiem2"=>$this->a->LayDiaDiemMoiTheo($loai, $value, 3),
                    "diadiem3"=>$this->a->LayDiaDiemMoiTheo($loai, $value, 6),
                    "thanhpho"=>$this->thanhpho,
                    "loaidiadiem"=>$this->loaidiadiem,
                    "sopage"=>1,
        ]);
    }
    public function timkiemdiachi()
    {
        $chitietdiachi = $_POST['diachicuthe'];
        $this->view("layoutfilter", ["detail"=>"diadiemview",
        "diadiem1"=>$this->a->LayDiaDiemTheoChiTiet($chitietdiachi, 0),
        "diadiem2"=>$this->a->LayDiaDiemTheoChiTiet($chitietdiachi, 3),
        "diadiem3"=>$this->a->LayDiaDiemTheoChiTiet($chitietdiachi, 6),
        "thanhpho"=>$this->thanhpho,
        "loaidiadiem"=>$this->loaidiadiem,
        "sopage"=>1,
]);
    }
    public function chitietdiadiem($madiadiem, $id)
    {
        $theloai = "Địa điểm";  
        $a=$this->model("tourmodel");
        $b=$this->model("commentmodel");    
        $this->view("layoutfilter",["detail"=>"chitietdiadiemview",
                    "thanhpho"=>$this->thanhpho,
                    "loaidiadiem"=>$this->loaidiadiem,
                    "diadiem"=>$this->a->LayChiTietDiaDiem($madiadiem),
                    "image"=>$this->a->LayAnhMoTa($id),
                    "comment"=>$b->LayComment($theloai, $id),
                    //"batourlienquan"=>$a->LayBaTourLienQuan($a->LayChiTietTour($matour)["diemxuatphat"], $a->LayChiTietTour($matour)["diemden"]),
                    //"bonkhachsanmoi"=>$this->hotel->LayBonKhachSan(),
                    ]);
    }
}
?>