<?php
class taikhoan extends controller
{
    public function __construct()
    {
        if(!isset($_SESSION["id"]))
        {
            header("location:./dangnhap");
        }
        if (isset($_SESSION["tour"]))
        {
            if (count($_SESSION["tour"])==0)
            {
                unset($_SESSION["tour"]);
            }

        }
    }
    public function vn() 
    {    
        $a=$this->model("usermodel"); 
        $this->view("layoutuser", ["detail"=>"thongtintaikhoanview",
                    "danhmucthongtin"=>$a->LayDanhMucThongTinUser(),
                    "thongtinuser"=>$a->LayThongTinUser($_SESSION["id"]),
                    ]);
    }
    //ĐƠN HÀNG
    public function donhang()
    {   
        if (isset($_SESSION["tour"]))
        {
            $arr=array();
            foreach ($_SESSION["tour"] as $id=>$soluong)
            {
                $arr[] = $id;
            }
            if (isset($arr))
            {
            $strid = implode(",", $arr);
            }
        }      
        else $strid = 0;
        $a=$this->model("tourmodel");
        $this->view("layoutuser", ["detail"=>"donhangview",
                    "TourDat"=>$a->DatTour($strid)
                    ]);
    }
    public function capnhatdonhang()
    {   
        if (isset($_POST["sl"]))
        {
            foreach ($_POST["sl"] as $idtour=>$soluong)
            {
                if ($soluong==0)
                {
                    unset($_SESSION["tour"][$idtour]);
                }
                else $_SESSION["tour"][$idtour]=$soluong;
            }    
        }
        header("location: ./vn");
    }
    public function xoadonhang($idtour)
    {
        if (isset($_SESSION["tour"][$idtour]))
        {
            unset($_SESSION["tour"][$idtour]);
        }
        header("location: ../vn");
    }
    public function xacnhandonhang()
    {   
        if (isset($_SESSION["tour"]))
        {
            $arr=array();
            foreach ($_SESSION["tour"] as $id=>$soluong)
            {
                $arr[] = $id;
            }
            if (isset($arr))
            {
            $strid = implode(",", $arr);
            }
        }        
        else $strid = 0;  
        $a=$this->model("tourmodel");
        $b=$this->model("usermodel"); 
        $this->view("layoutuser", ["detail"=>"xacnhandonhangview",
                    "TourDat"=>$a->DatTour($strid),
                    "thongtinuser"=>$b->LayThongTinUser($_SESSION["id"]),
                    ]);;
    }
    public function dattourprocess()
    {
        if (isset($_SESSION["tour"]))
        {
            $arr=array();
            foreach ($_SESSION["tour"] as $id=>$soluong)
            {
                $arr[] = $id;
            }
            if (isset($arr))
            {
            $strid = implode(",", $arr);
            }
        }        
        else $strid = 0; 
        $a=$this->model("tourmodel");
        foreach($a->DatTour($strid) as $tour)
        {
            $tentour = $tour["ten"];          
            $ngayhientai = date("Y-m-d");
            $sotien=$tour["gia"]*$_SESSION["tour"][$tour["ID"]];
            $iduser = $_SESSION["id"];
            $ngaybatdau = $tour["ngaykhoihanh"];
            $ngayketthuc = $tour["thoigian"];
            $soluong =  $_SESSION["tour"][$tour["ID"]];
            $a->LuuTruDatTour($tentour, $ngayhientai, $iduser, $ngaybatdau, $ngayketthuc, $soluong,  $sotien); 
        }
        unset($_SESSION["tour"]);
        header("location: ./dattourhoanthanh");
    } 

    public function dattourhoanthanh()
    {      
        $this->view("layoutuser", ["detail"=>"dattourhoanthanhview",
                    
                    ]);
    }
    //dat khach san
    public function datkhachsan($makhachsan)
    {    
        $a=$this->model("khachsanmodel");
        $b=$this->model("usermodel"); 
        $this->view("layoutuser", ["detail"=>"datkhachsanview",
                    "danhmucthongtin"=>$b->LayDanhMucThongTinUser(),
                    "thongtinuser"=>$b->LayThongTinUser($_SESSION["id"]),
                    "chitietkhachsan"=>$a->LayChiTietKhachSan($makhachsan),
                    "result"=>"",
                    ]);
    }
    public function datkhachsanprocess($makhachsan)
    {
        $a=$this->model("khachsanmodel");          
        $b=$this->model("usermodel"); 
        if (empty($_POST["ngaynhanphong"]) || empty($_POST["ngaytraphong"]) || empty($_POST["sophong"]))
        {
  
            $this->view("layoutuser", ["detail"=>"datkhachsanview",
                    "danhmucthongtin"=>$b->LayDanhMucThongTinUser(),
                    "thongtinuser"=>$b->LayThongTinUser($_SESSION["id"]),
                    "chitietkhachsan"=>$a->LayChiTietKhachSan($makhachsan),
                    "result"=>"Mời nhập đầy đủ thông tin!"]);
        }
        else 
        {  
            $ngaybatdau = $_POST["ngaynhanphong"];
            $sophong=$_POST["sophong"];
            $ngayketthuc = $_POST["ngaytraphong"];           
            $sogiay = strtotime($ngayketthuc) - strtotime($ngaybatdau);
            if ( $sogiay<=0)
            {
                $this->view("layoutuser", ["detail"=>"datkhachsanview",
                    "danhmucthongtin"=>$b->LayDanhMucThongTinUser(),
                    "thongtinuser"=>$b->LayThongTinUser($_SESSION["id"]),
                    "chitietkhachsan"=>$a->LayChiTietKhachSan($makhachsan),
                    "result"=>"Ngày tháng không hợp lệ!"]);    
            }
            else
            {
            $songay = floor($sogiay / (60*60*24));
            $sotien = $songay * $_POST["loaiphong"] * $sophong;
            $tenkhachsan = $_POST["tenkhachsan"];
            $ngayhientai = date("Y-m-d");
            $a->LuuTruDatKhachSan($tenkhachsan, $ngayhientai, $_SESSION["id"], $ngaybatdau, $ngayketthuc, $sophong, $sotien);
            header("location:../xacnhandatkhachsan");
            }
        }
    } 
    public function xacnhandatkhachsan()
    {
        $this->view("layoutuser",["detail"=>"datkhachsanthanhcongview",
                    ]);
    }
    //TÀI KHOẢN
    public function thongtintaikhoan()
    {    
        $a=$this->model("usermodel"); 
        $this->view("layoutuser", ["detail"=>"thongtintaikhoanview",
                    "danhmucthongtin"=>$a->LayDanhMucThongTinUser(),
                    "thongtinuser"=>$a->LayThongTinUser($_SESSION["id"]),
                    ]);
    }
    public function thaydoithongtin($ttdanhmuc)
    {
        $a=$this->model("usermodel");
        $this->view("layoutuser", ["detail"=>"thaydoithongtinview",
                    "danhmucthongtin"=>$a->LayMotDanhMucThongTinUser($ttdanhmuc),
                    "thongtinuser"=>$a->LayThongTinUser($_SESSION["id"]),
                    "result"=>"",
                    ]);
    }
    public function processthaydoi($danhmuc)
    {
        $a=$this->model("usermodel");
        if (empty($_POST["$danhmuc"."moi"]))
        {    
            $this->view("layoutuser", ["detail"=>"thaydoithongtinview",
                        "danhmucthongtin"=>$a->LayMotDanhMucThongTinUser($danhmuc),
                        "thongtinuser"=>$a->LayThongTinUser($_SESSION["id"]),
                        "result"=>"Mời nhập thông tin",
                        ]);
        }
        else  
        {
            $thongtinmoi=$_POST["$danhmuc"."moi"];
            $a->ThayDoiThongTin($_SESSION["id"], $danhmuc, $thongtinmoi);
            header("location: ../thongtintaikhoan");  
        }
        
    }
    public function thaydoimatkhau()
    {
        $this->view("layoutuser", ["detail"=>"thaydoimatkhauview",
                "result"=>"",    
                ]);
    }
    public function processthaydoimatkhau()
    {
        $a=$this->model("usermodel");
        $password=$a->LayMatKhauUser($_SESSION["id"])["Password"];
        if (empty($_POST["matkhaucu"]) || empty($_POST["matkhaumoi"]))
        {
            $this->view("layoutuser", ["detail"=>"thaydoimatkhauview",
            "result"=>"Mời nhập đầy đủ thông tin!",    
            ]);
        }
        else 
        {   
            $passwordcheck = $_POST["matkhaucu"];
            $passwordmoi = $_POST["matkhaumoi"];
            $matkhaumoi = password_hash($passwordmoi, PASSWORD_DEFAULT);
            if (password_verify($passwordcheck, $password))
            {
                $a->ThayDoiMatKhau($_SESSION["id"], $matkhaumoi);
                header("location:./thongtintaikhoan");
            }
            else
            {
                $this->view("layoutuser", ["detail"=>"thaydoimatkhauview",
                "result"=>"Sai mật khẩu!",    
                ]);
            };
        }    
    }
    //lichsudat
    public function lichsudat()
    {
        $a=$this->model("datdichvumodel");
        
        $this->view("layoutuser", ["detail"=>"lichsudatview",
                                "tourdadat"=>$a->LayDichVu("tour"),
                                "khachsandadat"=>$a->LayDichVu("khachsan"),
                    ]);
    }
    public function huydat($id)
    {
        $a=$this->model("datdichvumodel");
        $a->HuyDichVu($id);
        header("location: ../lichsudat");
    }
    //admin
    public function quanlybaiviet($page)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("baivietmodel");
        foreach($a->SoBaiViet() as $baiviet)
        {
            $sobaiviet=$baiviet[0];
        }
        $sopage = ceil($sobaiviet/6);
        $this->view("layoutuser", ["detail"=>"quanlybaivietview",
                                    "baiviet"=>$a->LaySauBaiVietMoi($page-1+5*($page-1)),          
                                    "sobaiviet"=>$sobaiviet,  
                                    "sopage"=>$sopage,
                                    ]);
    }
    public function thembaiviet()
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $this->view("layoutuser", ["detail"=>"thembaivietview",
                                "result"=>"",
        ]);
    }
    public function processthembaiviet()
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("baivietmodel");
        
            $tieude = $_POST["tieude"];
            $tieudekhongdau = $_POST["tieudekhongdau"];
            $theloai= $_POST["theloai"];
            $loaibaiviet = $_POST["loaibaiviet"];
            $urlhinh = $_FILES["baiviet-img"]["name"];
            $tmp = $_FILES["baiviet-img"]["tmp_name"];
            $tomtat = $_POST["tomtat"];
            $content = $_POST["content"];
            move_uploaded_file($tmp, "public/image/".$urlhinh);
            $a->ThemBaiViet($tieude, $tieudekhongdau, $tomtat, $urlhinh, $theloai, $loaibaiviet, $content);
            header("location: ./quanlybaiviet/1");
        
    }
    public function capnhatbaiviet($id)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("baivietmodel");
        $this->view("layoutuser", ["detail"=>"capnhatbaivietview",
                                "baiviet"=>$a->LayChiTietBaiViet($id),
                                "result"=>"",
        ]);
    }
    public function processcapnhatbaiviet($id)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("baivietmodel");
        $tieude = $_POST["tieude"];
        $tieudekhongdau = $_POST["tieudekhongdau"];
        $theloai= $_POST["theloai"];
        $loaibaiviet = $_POST["loaibaiviet"];
        if (empty($_FILES["baiviet-img"]["name"]))
        {
            $urlhinh = $_POST["baiviet-img"];
        }
        else
        {
            $urlhinh = $_FILES["baiviet-img"]["name"];
            $tmp = $_FILES["baiviet-img"]["tmp_name"];
            move_uploaded_file($tmp, "public/image/".$urlhinh);
        }
        $tomtat = $_POST["tomtat"];
        $content = $_POST["content"];
        $a->CapNhatBaiViet($id, $tieude, $tieudekhongdau, $tomtat, $urlhinh, $theloai, $loaibaiviet, $content);
        header("location: ../quanlybaiviet/1");
    }
    
    //quanlytour
    //--------quanlytour----------//
    public function quanlytour($page)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("tourmodel");
        foreach($a->SoTour() as $tour)
        {
            $sotour=$tour[0];
        }
        $sopage = ceil($sotour/6);
        $this->view("layoutuser", ["detail"=>"quanlytourview",
                                    "tour"=>$a->LaySauTourMoi($page-1+5*($page-1)),          
                                    "sotour"=>$sotour,  
                                    "sopage"=>$sopage,
                                    ]);
    }
    
    public function themtour()
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $this->view("layoutuser", ["detail"=>"themtourview",
                                "result"=>"",
        ]);
    }
    public function processthemtour()
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("tourmodel");
        if (empty($_POST["ten"]) || empty($_POST["ma"]) || empty($_POST["gia"]) || empty($_POST["giatruockm"]) || empty($_FILES["tour-img"]["name"])
        || empty($_POST["ngaykhoihanh"]) || empty($_POST["thoigian"]) || empty($_POST["diemxuatphat"]) || empty($_POST["diemden"]) || empty($_POST["chitiet"]))
        {
            $this->view("layoutuser", ["detail"=>"themtourview",
                                      "result"=>"Mời nhập đầy đủ thông tin!",
            ]);
        }
        else 
        {
            $ten = $_POST["ten"];
            $matour = $_POST["ma"];
            $gia = $_POST["gia"];
            $giatruockm = $_POST["giatruockm"];
            $urlhinh = $_FILES["tour-img"]["name"];
            $tmp = $_FILES["tour-img"]["tmp_name"];
            $ngaykhoihanh = $_POST["ngaykhoihanh"];
            $thoigian = $_POST["thoigian"];
            $diemxuatphat = $_POST["diemxuatphat"];
            $diemden = $_POST["diemden"];
            $chitiet = $_POST["chitiet"];
            move_uploaded_file($tmp, "public/image/".$urlhinh);
            $a->ThemTour($ten, $matour, $gia, $giatruockm, $urlhinh, $ngaykhoihanh, $thoigian, $diemxuatphat, $diemden, $chitiet);
            header("location: ./quanlytour/1");
        };
    }
    public function capnhattour($id)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("tourmodel");
        $this->view("layoutuser", ["detail"=>"capnhattourview",
                                "tour"=>$a->LayChiTietTourID($id),
                                "result"=>"",
        ]);
    }
    public function processcapnhattour($id)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("tourmodel");
        if (empty($_POST["ten"]) || empty($_POST["ma"]) || empty($_POST["gia"]) || empty($_POST["giatruockm"]) 
        || empty($_POST["ngaykhoihanh"]) || empty($_POST["thoigian"]) || empty($_POST["diemxuatphat"]) 
        || empty($_POST["diemden"]) || empty($_POST["chitiet"]))
        {
            $this->view("layoutuser", ["detail"=>"capnhattourview",
                                       "tour"=>$a->LayChiTietTourID($id),
                                      "result"=>"Mời nhập đầy đủ thông tin!",
            ]);
        }
        else 
            {$ten = $_POST["ten"];
            $ma = $_POST["ma"];
            $gia = $_POST["gia"];
            $giatruockm = $_POST["giatruockm"];
            if (empty($_FILES["tour-img"]["name"]))
            {
                $urlhinh = $_POST["tour-img"];
            }
            else
            {
                $urlhinh = $_FILES["tour-img"]["name"];
                $tmp = $_FILES["tour-img"]["tmp_name"];
                move_uploaded_file($tmp, "public/image/".$urlhinh);
            }
            $ngaykhoihanh = $_POST["ngaykhoihanh"];
            $thoigian = $_POST["thoigian"];
            $diemxuatphat = $_POST["diemxuatphat"];
            $diemden = $_POST["diemden"];
            $chitiet = $_POST["chitiet"];
            $a->CapNhatTour($id, $ten, $ma, $gia, $giatruockm, $urlhinh, $ngaykhoihanh, $thoigian, $diemxuatphat, $diemden, $chitiet);
            header("location: ../quanlytour/1");
        };
    }
    public function xoatour($matour)
    {
        $a=$this->model("tourmodel");
        $a->XoaTour($matour);
        header("location: ../quanlytour/1");
    }
    
    //--------quanlykhachsan-------//

    public function quanlykhachsan($page)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("khachsanmodel");
        foreach($a->SoKhachSan() as $khachsan)
        {
            $sokhachsan=$khachsan[0];
        }
        $sopage = ceil($sokhachsan/6);
        $this->view("layoutuser", ["detail"=>"quanlykhachsanview",
                                    "khachsan"=>$a->LaySauKhachSanMoi($page-1+5*($page-1)),          
                                    "sopage"=>$sopage,
                                    ]);
    }
    public function themkhachsan()
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $this->view("layoutuser", ["detail"=>"themkhachsanview",
                                "result"=>"",
        ]);
    }
    public function processthemkhachsan()
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("khachsanmodel");
        if (empty($_POST["ten"]) || empty($_POST["ma"]) || empty($_POST["diachi"]) || empty($_POST["thanhpho"]) || empty($_FILES["khachsan-img"]["name"])
        || empty($_POST["gia"]) || empty($_POST["giaphongdoi"]) || empty($_POST["giaphonggiadinh"]) || empty($_POST["chatluong"]) || empty($_POST["tiennghi"]) || empty($_POST["chitiet"]))
        {
            $this->view("layoutuser", ["detail"=>"themkhachsanview",
                                      "result"=>"Mời nhập đầy đủ thông tin!",
            ]);
        }
        else 
        {
            $ten = $_POST["ten"];
            $matour = $_POST["ma"];
            $diachi = $_POST["diachi"];            
            $thanhpho = $_POST["thanhpho"];
            $tmp = $_FILES["khachsan-img"]["tmp_name"];
            $urlhinh = $_FILES["khachsan-img"]["name"];
            $gia = $_POST["gia"];
            $giaphongdoi = $_POST["giaphongdoi"];
            $giaphonggiadinh = $_POST["giaphonggiadinh"];      
            $chatluong = $_POST["chatluong"];
            $tiennghi = $_POST["tiennghi"];
            $chitiet = $_POST["chitiet"];
            move_uploaded_file($tmp, "public/image/".$urlhinh);
            $a->ThemKhachSan($ten, $matour, $diachi, $thanhpho, $urlhinh, $gia, $giaphongdoi, $giaphonggiadinh, $chatluong, $tiennghi, $chitiet);
            header("location: ./quanlykhachsan/1");
        };
    }
    public function xoakhachsan($id)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("khachsanmodel");
        $a->XoaKhachSan($id);
        header("location: ../quanlykhachsan/1");
    }
    public function capnhatkhachsan($id)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("khachsanmodel");
        $this->view("layoutuser", ["detail"=>"capnhatkhachsanview",
                                "khachsan"=>$a->LayChiTietKhachSanID($id),
                                "result"=>"",
        ]);
    }
    public function processcapnhatkhachsan($id)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("khachsanmodel");
        if (empty($_POST["ten"]) || empty($_POST["ma"]) || empty($_POST["diachi"]) || empty($_POST["thanhpho"]) 
        || empty($_POST["gia"]) || empty($_POST["giaphongdoi"]) || empty($_POST["giaphonggiadinh"]) || empty($_POST["chatluong"]) 
        || empty($_POST["tiennghi"]) || empty($_POST["gioithieu"]))
        {
            $this->view("layoutuser", ["detail"=>"capnhatkhachsanview",
                                       "khachsan"=>$a->LayChiTietKhachSanID($id),
                                      "result"=>"Mời nhập đầy đủ thông tin!",
            ]);
        }
        else 
            {
                $ten = $_POST["ten"];
                $ma = $_POST["ma"];
                $diachi = $_POST["diachi"];            
                $thanhpho = $_POST["thanhpho"];
                $gia = $_POST["gia"];
                $giaphongdoi = $_POST["giaphongdoi"];
                $giaphonggiadinh = $_POST["giaphonggiadinh"];      
                $chatluong = $_POST["chatluong"];
                $tiennghi = $_POST["tiennghi"];
                $gioithieu = $_POST["gioithieu"];
                if (empty($_FILES["khachsan-img"]["name"]))
                {
                    $urlhinh = $_POST["khachsan-img"];
                }
                else
                {
                    $urlhinh = $_FILES["khachsan-img"]["name"];
                    $tmp = $_FILES["khachsan-img"]["tmp_name"];
                    move_uploaded_file($tmp, "public/image/".$urlhinh);
                }
            $a->CapNhatKhachSan($id, $ten, $ma, $diachi, $thanhpho, $urlhinh, $gia, $giaphongdoi, $giaphonggiadinh, $chatluong, $tiennghi, $gioithieu);
            header("location: ../quanlykhachsan/1");
        };
    }
    //--------quanlydiadiem-------//

    public function quanlydiadiem($page)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("diadiemmodel");
        foreach($a->SoDiaDiem() as $diadiem)
        {
            $sodiadiem=$diadiem[0]; 
        }
        $sopage = ceil($sodiadiem/6);
        $this->view("layoutuser", ["detail"=>"quanlydiadiemview",
                                    "diadiem"=>$a->LaySauDiaDiemMoi($page-1+5*($page-1)),          
                                    "sopage"=>$sopage,
                                    ]);
    }
    public function themdiadiem()
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $this->view("layoutuser", ["detail"=>"themdiadiemview",
                                "result"=>"",
        ]);
    }
    
    public function processthemdiadiem()
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("diadiemmodel");
        if (empty($_POST["ten"]) || empty($_POST["diachi"]) || empty($_POST["thanhpho"]) || empty($_POST["gia"])  || empty($_POST["madiadiem"]) || empty($_POST["urlmap"]) 
        || empty($_POST["tiennghi"]) || empty($_POST["loaidiadiem"]) || empty($_POST["chuyenmuc"]) || empty($_POST["chitiet"]) || empty($_FILES["diadiem-img"]["name"]))
        {
            $this->view("layoutuser", ["detail"=>"themdiadiemview",
                                      "result"=>"Mời nhập đầy đủ thông tin!",
            ]);
        }
        else 
        {
            $ten = $_POST["ten"];
            $madiadiem = $_POST["madiadiem"];
            $diachi = $_POST["diachi"];            
            $thanhpho = $_POST["thanhpho"];
            $urlmap = $_POST["urlmap"];
            $tmp = $_FILES["diadiem-img"]["tmp_name"];
            $urlhinh = $_FILES["diadiem-img"]["name"];
            $conn = new PDO('mysql:host=localhost;dbname=sql_vedepvietnam; charset=utf8', 'root', '');
            
            move_uploaded_file($tmp, "public/image/".$urlhinh);
            $gia = $_POST["gia"];
            $chitiet = $_POST["chitiet"];
            $chuyenmuc = $_POST["chuyenmuc"];
            $loaidiadiem = $_POST["loaidiadiem"];
            $tiennghi = implode(' - ', $_POST["tiennghi"]);
            $last_id = $a->ThemDiaDiem($ten, $madiadiem, $diachi, $thanhpho, $urlmap, $urlhinh, $gia, $chuyenmuc, $loaidiadiem, $tiennghi, $chitiet);
            foreach ($_FILES["diadiem-imgs"]["name"] as $key=>$value)
            {
                move_uploaded_file($_FILES["diadiem-imgs"]["tmp_name"][$key], "public/image/".$value);
                $a->ThemAnhMoTa($last_id, $value);
            }
            header("location: ./quanlydiadiem/1");
        };
    }
    public function xoadiadiem($id)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("diadiemmodel");
        $a->XoaDiaDiem($id);
        header("location: ../quanlydiadiem/1");
    }
    public function capnhatdiadiem($id)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
            $a=$this->model("diadiemmodel");
            $this->view("layoutuser", ["detail"=>"capnhatdiadiemview",
                                    "diadiem"=>$a->LayChiTietDiaDiem($id),
                                    "result"=>"",
            ]);
    }
    public function processcapnhatdiadiem($id)
    {
        if(!($_SESSION["id"]==0))
        {
            header("location:../../trangchu");
        }
        $a=$this->model("diadiemmodel");
        if (empty($_POST["ten"]) || empty($_POST["diachi"]) || empty($_POST["thanhpho"]) || empty($_POST["madiadiem"]) || empty($_POST["urlmap"]) || empty($_POST["chitiet"]))
        {
            $this->view("layoutuser", ["detail"=>"capnhatdiadiemview",
                                      "diadiem"=>$a->LayChiTietDiaDiem($id),
                                      "result"=>"Mời nhập đầy đủ thông tin!",
            ]);
        }
        else 
            {
                $ten = $_POST["ten"];
                $madiadiem = $_POST["madiadiem"];
                $diachi = $_POST["diachi"];            
                $thanhpho = $_POST["thanhpho"];
                $urlmap = $_POST["urlmap"];
                $gia = $_POST["gia"];
                $chitiet = $_POST["chitiet"];
                $chuyenmuc = $_POST["chuyenmuc"];
                $loaidiadiem = $_POST["loaidiadiem"];
                if (empty($_FILES["diadiem-img"]["name"]))
                {
                    $urlhinh = $_POST["diadiem-img"];
                }
                else
                {
                    $urlhinh = $_FILES["diadiem-img"]["name"];
                    $tmp = $_FILES["diadiem-img"]["tmp_name"];
                    move_uploaded_file($tmp, "public/image/".$urlhinh);
                }
                if (!empty($_FILES["diadiem-imgs"]["name"][0]))
                {
                    $a->XoaAnhCu($id);
                    foreach ($_FILES["diadiem-imgs"]["name"] as $key=>$value)
                    {
                        move_uploaded_file($_FILES["diadiem-imgs"]["tmp_name"][$key], "public/image/".$value);
                        $a->ThemAnhMoTa($id, $value);
                    }    
                }
                $tiennghi = implode(' - ', $_POST["tiennghi"]);
                $a->CapNhatDiaDiem($id, $ten, $madiadiem, $diachi, $thanhpho, $urlmap, $urlhinh, $gia, $chuyenmuc, $loaidiadiem, $tiennghi, $chitiet);
                header("location: ../quanlydiadiem/1");
            };
    }
    //search
    public function search()
    {   
        $a=$this->model("tourmodel");
        $keysearch=$_POST["keysearch"];
        $table=$_POST["table"];
        $this->view("layoutuser", ["detail"=>"quanly".$table."view",
                                    "$table"=>$a->Search($keysearch, $table),          
                                    "sopage"=>1,
                                    ]);

    }
    public function searchbaiviet()
    {   
        $a=$this->model("baivietmodel");
        $keysearch=$_POST["keysearch"];
        $this->view("layoutuser", ["detail"=>"quanlybaivietview",
                                    "baiviet"=>$a->LayBaiVietTimKiem($keysearch),          
                                    "sopage"=>1,
                                    ]);

    }
}
    
?>  