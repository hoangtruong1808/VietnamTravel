<?php
    class usermodel extends DB
    {
        public function login($username)
        {
            $qr="SELECT * FROM user
                WHERE Username='$username';";
        
            return $this->conn->query($qr);
        }
        public function ThemUser($ten, $email, $username, $password, $diachi,$dienthoai)
        {
            $qr="INSERT INTO user
                VALUES(null, '$ten', '$username', '$password', '$diachi','$dienthoai','$email',3);
                ";
            $result="false";
            if ($this->conn->exec($qr))
            {
                $result="true";
            };
            return $result;
        }
        public function LayThongTinUser($iduser)
        {
            $qr ="SELECT * FROM user
            WHERE ID=$iduser";
            $baiviet=$this->conn->query($qr); 
            return $baiviet->fetch();
        }
        public function LayTenUser()
        {
            $iduser=$_SESSION["id"];
            $qr ="SELECT hoten FROM user
            WHERE ID=$iduser";
            $baiviet=$this->conn->query($qr); 
            return $baiviet->fetch();
        }
        public function LayDanhMucThongTinUser()
        {
            $qr ="SELECT * FROM thongtinuser";
            return $this->conn->query($qr); 
        }
        public function LayMotDanhMucThongTinUser($danhmuc)
        {
            $qr ="SELECT * FROM thongtinuser
            WHERE tenviettat='$danhmuc'";
            $baiviet=$this->conn->query($qr); 
            return $baiviet->fetch();
            
        }
        public function ThayDoiThongTin($iduser, $danhmuc, $thongtinmoi)
        {
            $qr ="UPDATE user
                SET $danhmuc = '$thongtinmoi'
                WHERE ID = $iduser ";    
            return $this->conn->exec($qr);
        }
        public function LayMatKhauUser($iduser)
        {
            $qr ="SELECT Password FROM user
            WHERE ID=$iduser";
            $baiviet=$this->conn->query($qr); 
            return $baiviet->fetch();
            
        }
        public function ThayDoiMatKhau($iduser, $matkhaumoi)
        {
            $qr ="UPDATE user
                SET Password = '$matkhaumoi'
                WHERE ID = $iduser ";    
            return $this->conn->exec($qr);
        }
    }