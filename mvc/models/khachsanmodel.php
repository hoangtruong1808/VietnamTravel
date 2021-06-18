<?php
    class khachsanmodel extends DB
    {
        public function SoKhachSan()
        { 
            $qr =" SELECT count(ID) FROM khachsan";
            return $this->conn->query($qr);
        }
        public function LayKhachSanMoi($a)
        { 
            $qr =" SELECT * FROM khachsan
            ORDER BY ID DESC
            LIMIT $a , 4 ";
            return $this->conn->query($qr);
        }
        public function LaySauKhachSanMoi($a)
        { 
            $qr =" SELECT * FROM khachsan
            ORDER BY ID DESC
            LIMIT $a , 6 ";
             return $this->conn->query($qr);
        }
        public function LayChiTietKhachSan($makhachsan)
        { 
            $qr =" SELECT * FROM khachsan
            WHERE makhachsan='$makhachsan'";
            $khachsan=$this->conn->query($qr);
            return $khachsan->fetch();
        }
        public function LayChiTietKhachSanID($id)
        { 
            $qr =" SELECT * FROM khachsan
            WHERE ID='$id'";
            $khachsan=$this->conn->query($qr);
            return $khachsan->fetch();
        }
        public function LayBonKhachSan()
        { 
            $qr =" SELECT * FROM khachsan
            ORDER BY ID DESC
            LIMIT 1 , 4 ";
            return $this->conn->query($qr);
            
        }

        public function LuuTruDatKhachSan($tenkhachsan, $ngayhientai, $iduser, $ngaybatdau, $ngayketthuc, $sophong, $sotien)
        {
            $qr="INSERT INTO datdichvu
                VALUES(null, '$tenkhachsan', '$ngayhientai', '$iduser', '$ngaybatdau', '$ngayketthuc', 'khachsan' ,'$sophong','$sotien');
                ";
            return $this->conn->exec($qr);

        }
        public function CapNhatKhachSan($id, $ten, $ma, $diachi, $thanhpho, $urlhinh, $gia, $giaphongdoi, $giaphonggiadinh, $chatluong, $tiennghi, $gioithieu)
        {
            $qr="UPDATE khachsan
                SET makhachsan='$ma', ten='$ten', diachi='$diachi', thanhpho='$thanhpho', gia='$gia', giaphongdoi='$giaphongdoi', giaphonggiadinh='$giaphonggiadinh', urlhinh='$urlhinh',
                chatluong='$chatluong', gioithieu='$gioithieu', tiennghi='$tiennghi'
                WHERE ID =$id;
                ";  
            return $this->conn->exec($qr);
        }
        public function ThemKhachSan($ten, $ma, $diachi, $thanhpho, $urlhinh, $gia, $giaphongdoi, $giaphonggiadinh, $chatluong, $tiennghi, $chitiet)
        {
            $qr="INSERT INTO khachsan
                VALUES(null, '$ma', '$ten', '$diachi', '$thanhpho', '$gia' ,'$giaphongdoi','$giaphonggiadinh','$urlhinh','$chatluong','$chitiet', '$tiennghi');
                ";
            return $this->conn->exec($qr);
        }
        public function XoaKhachSan($id)
        { 
            $qr = "DELETE FROM khachsan
                WHERE ID = '$id'";              
            return $this->conn->exec($qr);
        }
        public function LayDuLieuThanhPho()
        {
            $qr = "SELECT DISTINCT thanhpho FROM khachsan";
            return $this->conn->query($qr);
        }
        public function TimKiemKhachSan($diadiem, $giamin, $giamax, $a)
        {
            $qr = "SELECT * FROM khachsan
            WHERE thanhpho='$diadiem' AND gia>$giamin AND gia<$giamax
            LIMIT $a , 4 ;";
            return $this->conn->query($qr);
        }
    }
?>