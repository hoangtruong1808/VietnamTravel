<?php
    class vanhoavanguoivietmodel extends DB
    {
        public function LayBaivietmoi()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idTheLoai=1
            ORDER BY ID DESC
            LIMIT 0,2;';
            return $this->conn->query($qr);

        }
        public function LayBaivietmoinhat()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idTheLoai=1
            ORDER BY ID DESC
            LIMIT 0,1;';
            return $this->conn->query($qr)->fetch();

        }
        public function LayBaivietphantrang($baivietbatdau)
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idTheLoai=1 
            ORDER BY ID DESC
            LIMIT '.$baivietbatdau.',5;';
            return $this->conn->query($qr);

        }
        public function LayVanHoa()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idLoaiBaiViet=7
            ORDER BY ID DESC';
            return $this->conn->query($qr);

        }
        public function LayNguoiViet()
        { 
            $qr =' SELECT * FROM baiviet 
            WHERE idLoaiBaiViet=8
            ORDER BY ID DESC';
            return $this->conn->query($qr);

        }
        public function Layloaibaiviet()
        {
            $qr =' SELECT * FROM loaibaiviet
            WHERE idTheLoai=1';
            return $this->conn->query($qr);
        }
    }
?>