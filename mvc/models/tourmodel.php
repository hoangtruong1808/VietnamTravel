<?php
    class tourmodel extends DB
    {
        public function SoTour()
        { 
            $qr =" SELECT count(ID) FROM tour";
            return $this->conn->query($qr);
        }
        public function LayTourMoi($a)
        { 
            $qr =" SELECT * FROM tour
            ORDER BY ID DESC
            LIMIT $a , 4 ";
            return $this->conn->query($qr);
        }
        public function LaySauTourMoi($a)
        { 
            $qr =" SELECT * FROM tour
            ORDER BY ID DESC
            LIMIT $a , 6 ";
            return $this->conn->query($qr);
        }
        public function XoaTour($matour)
        { 
            $qr = "DELETE FROM tour
                WHERE matour = '$matour'";              
            return $this->conn->exec($qr);
        }
        public function LayChiTietTour($matour)
        { 
            $qr =" SELECT * FROM tour
            WHERE matour='$matour'";
            $tour=$this->conn->query($qr);
            return $tour->fetch();
        }
        public function LayChiTietTourID($id)
        { 
            $qr =" SELECT * FROM tour
            WHERE id='$id'";
            $tour=$this->conn->query($qr);
            return $tour->fetch();
        }
        public function Search($keysearch, $table)
        { 
            $qr =" SELECT * FROM $table
            WHERE ten REGEXP '$keysearch'
            ORDER BY ID DESC";
            return $this->conn->query($qr);
            //return $qr;
        }
        public function LayBaTourLienQuan($diemxuatphat, $diemden)
        { 
            $qr =" SELECT * FROM tour
            WHERE diemxuatphat='$diemxuatphat' or diemden='$diemden'
            ORDER BY ID DESC
            LIMIT 1 , 3 ";
            return $this->conn->query($qr);
            
        }
        public function DatTour($idtour)
        {
            $qr =" SELECT * FROM tour
            WHERE ID in($idtour)
            ORDER BY ID ;";
            return $this->conn->query($qr);
        }
        public function LuuTruDatTour($tentour, $ngayhientai, $iduser, $ngaybatdau, $ngayketthuc, $soluong, $sotien)
        {
            $qr="INSERT INTO datdichvu
                VALUES(null, '$tentour', '$ngayhientai', '$iduser', '$ngaybatdau', '$ngayketthuc', 'tour' ,'$soluong','$sotien');
                ";
            return $this->conn->exec($qr);

        }
        public function ThemTour($ten, $matour, $gia, $giatruockm, $urlhinh, $ngaykhoihanh, $thoigian, $diemxuatphat, $diemden, $chitiet)
        {
            $qr="INSERT INTO tour
                VALUES(null, '$ten', '$gia', '$giatruockm', '$matour', '$thoigian' ,'$diemxuatphat','$diemden','$ngaykhoihanh','$chitiet','$urlhinh');
                ";
            return $this->conn->exec($qr);
        }
        public function CapNhatTour($id, $ten, $matour, $gia, $giatruockm, $urlhinh, $ngaykhoihanh, $thoigian, $diemxuatphat, $diemden, $chitiet)
        {
            $qr="UPDATE tour
                SET ten='$ten', gia='$gia', giatruockm='$giatruockm', matour='$matour', thoigian='$thoigian' ,diemxuatphat='$diemxuatphat',diemden='$diemden',
                ngaykhoihanh='$ngaykhoihanh',chitiet='$chitiet',urlhinh='$urlhinh' 
                WHERE ID = $id;
                ";
            return $this->conn->exec($qr);
        }
        public function LayDuLieu($a)
        {
            $qr = "SELECT DISTINCT $a FROM tour";
            return $this->conn->query($qr);
        }
        public function TimKiemTour($diemxuatphat, $diemden, $giamin, $giamax, $a)
        {
            $qr = "SELECT * FROM tour
            WHERE diemxuatphat='$diemxuatphat' AND diemden='$diemden' AND gia>$giamin AND gia<$giamax
            LIMIT $a , 4 ;";
            return $this->conn->query($qr);
        }
    }
?>