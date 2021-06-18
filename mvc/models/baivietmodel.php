<?php
    class baivietmodel extends DB
    {
        public function LayBaivietmoinhat()
        { 
            $qr =' SELECT * FROM baiviet
                 ORDER BY ID DESC
                 LIMIT 0,1;';
            $tinmoinhats = $this->conn->query($qr);
            $tinmoinhat = $tinmoinhats->fetch();
            return $tinmoinhat;
        }
        public function LayBaBaivietmoi()
        { 
            $qr =' SELECT * FROM baiviet
                 ORDER BY ID DESC
                 LIMIT 1,3;';
            $batinmois = $this->conn->query($qr);
            return $batinmois;
        }
        public function LayBaiViet($tieudekhongdau)
        {
            $qr =' SELECT * FROM baiviet
                 WHERE tieudekhongdau="'.$tieudekhongdau.'";';
            $baiviet=$this->conn->query($qr); 
            return $baiviet->fetch();
        }
        public function LayBaiVietCungTheLoai($idTheLoai)
        {
            $qr =' SELECT * FROM baiviet
                 WHERE idTheLoai='.$idTheLoai.'
                 ORDER BY ID DESC
                 LIMIT 0,4;';
            return $this->conn->query($qr);
        }
        public function LayTheLoai()
        {
            $qr =' SELECT * FROM theloai
            ORDER BY ThuTu DESC;';
            return $this->conn->query($qr);
        }
        public function CapNhatSoLanXemBaiViet($tieudekhongdau)
        {
            $qr =" UPDATE baiviet
                SET LuotXem=LuotXem+1
                WHERE tieudekhongdau='$tieudekhongdau'";
            return $this->conn->query($qr);
        }
        public function LayBaiVietDocNhieuNhat()
        {
            $qr =" SELECT * FROM baiviet
                ORDER BY LuotXem DESC
                LIMIT 0,4";
            return $this->conn->query($qr);
        }
        public function LaySauBaiVietMoi($a)
        { 
            $qr =" SELECT * FROM baiviet
            ORDER BY ID DESC
            LIMIT $a , 6 ";
            return $this->conn->query($qr);
        }
        public function SoBaiViet()
        { 
            $qr =" SELECT count(ID) FROM baiviet";
            return $this->conn->query($qr);
        }
        public function ThemBaiViet($tieude, $tieudekhongdau, $tomtat, $urlhinh, $theloai, $loaibaiviet, $content)
        {
            $date = date("Y-m-d H:i:s");
            $qr = "INSERT INTO baiviet
            VALUES (NULL, '$tieude', '$tieude   khongdau', '$tomtat', '$urlhinh', '$theloai', '$loaibaiviet',0,'$content', '$date')";
            return $this->conn->query($qr);
        }
        public function CapNhatBaiViet($id, $tieude, $tieudekhongdau, $tomtat, $urlhinh, $theloai, $loaibaiviet, $content)
        {
            $qr="UPDATE baiviet
                SET tieude='$tieude', tieudekhongdau='$tieudekhongdau', tomtat='$tomtat', urlhinh='$urlhinh', 
                idTheLoai='$theloai' , idLoaiBaiViet='$loaibaiviet',content='$content'
                WHERE ID = $id;
                ";
            return $this->conn->exec($qr);
        }
        public function LayChiTietBaiViet($id)
        {
            $qr =' SELECT * FROM baiviet
                 WHERE ID="'.$id.'";';
            $baiviet=$this->conn->query($qr); 
            return $baiviet->fetch();
        }
        public function LayBaiVietTimKiem($tukhoa)
        {
            $qr =" SELECT * FROM baiviet
                WHERE tieude REGEXP '$tukhoa'
                ORDER BY ID DESC";
            return $this->conn->query($qr);
        }
    }
?>