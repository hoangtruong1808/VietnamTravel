<?php
    class disanmodel extends DB
    {
        public function LayBaivietmoi()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idTheLoai=3
            ORDER BY ID DESC
            LIMIT 0,2;';
            return $this->conn->query($qr);

        }
        public function LayBaivietmoinhat()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idTheLoai=3
            ORDER BY ID DESC
            LIMIT 0,1;';
            return $this->conn->query($qr)->fetch();

        }
        public function LayBaivietphantrang($baivietbatdau)
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idTheLoai=3 
            ORDER BY ID DESC
            LIMIT '.$baivietbatdau.',5;';
            return $this->conn->query($qr);

        }
        public function LayDiSanTuLieu()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idLoaiBaiViet=4
            ORDER BY ID DESC';
            return $this->conn->query($qr);

        }
        public function LayDiSanPhiVatThe()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idLoaiBaiViet=5
            ORDER BY ID DESC';
            return $this->conn->query($qr);

        }
        public function LayDiSanVatThe()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idLoaiBaiViet=6
            ORDER BY ID DESC';
            return $this->conn->query($qr);

        }
        public function Layloaibaiviet()
        {
            $qr =' SELECT * FROM loaibaiviet
            WHERE idTheLoai=3';
            return $this->conn->query($qr);
        }
    }
?>