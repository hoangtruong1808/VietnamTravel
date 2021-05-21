<?php
class khachsan extends controller
{
    public function vn()
    {
        
        $a=$this->model("khachsanmodel");
        $this->view("layout2", ["detail"=>"khachsanview",
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
            $khachsanbatdau = 0+16*($page-1);
            $khachsanbatdau2 = 4+16*($page-1);
            $khachsanbatdau3 = 8+16*($page-1);
            $khachsanbatdau4 = 12+16*($page-1);
        }
        $this->view("layout2", ["detail"=>"khachsanview",
                    "khachsan1"=>$a->LayKhachSanMoi($khachsanbatdau),
                    "khachsan2"=>$a->LayKhachSanMoi($khachsanbatdau2),
                    "khachsan3"=>$a->LayKhachSanMoi($khachsanbatdau3),
                    "khachsan4"=>$a->LayKhachSanMoi($khachsanbatdau4),
                    ]);

    }

    public function chitietkhachsan ($makhachsan)
    {
        
        $a=$this->model("khachsanmodel");
        $this->view("layout2",["detail"=>"chitietkhachsanview",
                    "chitietkhachsan"=>$a->LayChiTietKhachSan($makhachsan),
                    ]);
    }
}
?>