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
    }
?>