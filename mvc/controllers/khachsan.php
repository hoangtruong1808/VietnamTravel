<?php
class khachsan extends controller
{
    public function vn()
    {
        
        $a=$this->model("khachsanmodel");
        $this->view("layout2", ["detail"=>"khachsanview",
                    "thanhpho"=>$a->LayDuLieuThanhPho(),
                    "khachsan1"=>$a->LayKhachSanMoi(0),
                    "khachsan2"=>$a->LayKhachSanMoi(4),
                    "khachsan3"=>$a->LayKhachSanMoi(8),
                    "khachsan4"=>$a->LayKhachSanMoi(12),
                    ]);
    }
    public function page($page)
    {
        
        $a=$this->model("khachsanmodel");
        if (isset($page))
        {
            $khachsanbatdau = 0+12*($page-1);
            $khachsanbatdau2 = 4+12*($page-1);
            $khachsanbatdau3 = 8+12*($page-1);
            $khachsanbatdau4 = 12+12*($page-1);
        }
        $this->view("layout2", ["detail"=>"khachsanview",
                    "thanhpho"=>$a->LayDuLieuThanhPho(),
                    "khachsan1"=>$a->LayKhachSanMoi($khachsanbatdau),
                    "khachsan2"=>$a->LayKhachSanMoi($khachsanbatdau2),
                    "khachsan3"=>$a->LayKhachSanMoi($khachsanbatdau3),
                    ]);

    }

    public function chitietkhachsan ($makhachsan, $id)
    {
        $theloai = "Khách sạn";
        $a=$this->model("khachsanmodel");
        $b=$this->model("commentmodel"); 
        $this->view("layout2",["detail"=>"chitietkhachsanview",
                    "chitietkhachsan"=>$a->LayChiTietKhachSan($makhachsan),
                    "comment"=>$b->LayComment($theloai, $id),
                    ]);
    }
    public function search()
    {
        $a=$this->model("khachsanmodel");
        $diadiem = $_POST["chondiadiem"];
        if (isset($_POST["chongia"]))
        {
            $gia = explode("-",$_POST["chongia"]);
            $giamin = $gia[0];
            $giamax = $gia[1];
        }
        $this->view("layout2", ["detail"=>"khachsanview",
                    "thanhpho"=>$a->LayDuLieuThanhPho(),
                    "khachsan1"=>$a->TimKiemKhachSan($diadiem, $giamin, $giamax,0),
                    "khachsan2"=>$a->TimKiemKhachSan($diadiem, $giamin, $giamax,4),
                    "khachsan3"=>$a->TimKiemKhachSan($diadiem, $giamin, $giamax,8),
                    "khachsan4"=>$a->TimKiemKhachSan($diadiem, $giamin, $giamax,12),
                    ]);
    }
}
?>