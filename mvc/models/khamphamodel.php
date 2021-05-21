<?php
    class khamphamodel extends DB
    {
        public function LayBaivietmoi()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idTheLoai=2
            ORDER BY ID DESC
            LIMIT 0,2;';
            return $this->conn->query($qr);

        }
        public function LayBaivietmoinhat()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idTheLoai=2
            ORDER BY ID DESC
            LIMIT 0,1;';
            return $this->conn->query($qr)->fetch();

        }
        public function LayBaivietphantrang($baivietbatdau)
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idTheLoai=2 
            ORDER BY ID DESC
            LIMIT '.$baivietbatdau.',5;';
            return $this->conn->query($qr);

        }
        public function LayDiemden()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idLoaiBaiViet=1
            ORDER BY ID DESC';
            return $this->conn->query($qr);

        }
        public function LayAmthuc()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idLoaiBaiViet=2
            ORDER BY ID DESC';
            return $this->conn->query($qr);

        }
        public function LayLehoi()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idLoaiBaiViet=3
            ORDER BY ID DESC';
            return $this->conn->query($qr);

        }
        public function Layloaibaiviet()
        {
            $qr =' SELECT * FROM loaibaiviet
            WHERE idTheLoai=2';
            return $this->conn->query($qr);
        }
    }
?>