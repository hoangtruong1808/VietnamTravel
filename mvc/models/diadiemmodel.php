<?php 
    class diadiemmodel extends DB
    {
        public function SoDiaDiem()
        { 
            $qr =" SELECT count(ID) FROM diadiem";
            return $this->conn->query($qr);
        }
        public function LaySauDiaDiemMoi($a)
        { 
            $qr =" SELECT * FROM diadiem
            ORDER BY ID DESC
            LIMIT $a , 6 ";
            return $this->conn->query($qr);
        }
        public function XoaDiaDiem($id)
        { 
            $qr = "DELETE FROM diadiem
                WHERE ID = '$id'";              
            return $this->conn->exec($qr);
        }
        public function LayChiTietDiaDiem($madiadiem)
        { 
            $qr =" SELECT * FROM diadiem
            WHERE madiadiem='$madiadiem'";
            $diadiem=$this->conn->query($qr);
            return $diadiem->fetch();
        }
        public function ThemDiaDiem($ten, $madiadiem, $diachi, $thanhpho, $urlmap, $urlhinh, $gia , $chuyenmuc, $loaidiadiem, $tiennghi, $chitiet)
        {
            $qr="INSERT INTO diadiem
                VALUES(null, '$ten', '$madiadiem' ,'$diachi', '$thanhpho', '$urlmap', '$urlhinh', '$gia','$chuyenmuc','$loaidiadiem', '$tiennghi', '$chitiet', 0);
                ";
            $this->conn->exec($qr);
            return $this->conn->lastInsertId();
        }
        public function CapNhatDiaDiem($id, $ten, $madiadiem, $diachi, $thanhpho, $urlmap, $urlhinh, $gia , $chuyenmuc, $loaidiadiem, $tiennghi, $chitiet)
        {
            $qr="UPDATE diadiem
                SET ten='$ten', madiadiem='$madiadiem', diachi='$diachi', thanhpho='$thanhpho', urlmap='$urlmap', urlhinh='$urlhinh' ,gia='$gia',chuyenmuc='$chuyenmuc',
                loaidiadiem='$loaidiadiem', tiennghi='$tiennghi',chitiet='$chitiet'
                WHERE ID = $id;
                ";
            return $this->conn->exec($qr);
        }
        public function LayDiaDiemMoi($a)
        { 
            $qr =" SELECT * FROM diadiem
            ORDER BY ID DESC
            LIMIT $a , 3 ";
            return $this->conn->query($qr);
        }
        public function LayDiaDiemMoiTheo($loai, $value, $a)
        { 
            $qr =" SELECT * FROM diadiem
            WHERE $loai = '$value'
            ORDER BY ID DESC
            LIMIT $a , 3 ";
            return $this->conn->query($qr);
        }
        public function LocDiaDiem($qry, $a)
        {
            $qr = "SELECT * FROM diadiem
            WHERE tmp=0 $qry
            LIMIT $a , 3";
            return $this->conn->query($qr);
        }
        public function LayDuLieu($col)
        {
            $qr = "SELECT DISTINCT $col FROM diadiem";
            return $this->conn->query($qr);
        }
        public function XoaAnhCu($iddiadiem)
        {
            $qr ="DELETE FROM diadiemimage
                WHERE ID_diadiem = $iddiadiem";
            return $this->conn->exec($qr);
        }
        public function ThemAnhMoTa($iddiadiem, $image)
        {
            $qr ="INSERT INTO diadiemimage
                VALUES (null, $iddiadiem, '$image');";
            return $this->conn->exec($qr);
        }
        public function LayAnhMoTa($id)
        { 
            $qr =" SELECT * FROM diadiemimage
                WHERE ID_diadiem = $id";
            return $this->conn->query($qr);
        } 
    }