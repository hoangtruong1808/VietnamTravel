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
        public function LayChiTietDiaDiem($id)
        { 
            $qr =" SELECT * FROM diadiem
            WHERE id='$id'";
            $diadiem=$this->conn->query($qr);
            return $diadiem->fetch();
        }
        public function ThemDiaDiem($ten, $madiadiem, $diachi, $thanhpho, $urlmap, $urlhinh, $gia , $chuyenmuc, $loaidiadiem, $chitiet)
        {
            $qr="INSERT INTO diadiem
                VALUES(null, '$ten', '$madiadiem' ,'$diachi', '$thanhpho', '$urlmap', '$urlhinh', '$gia','$chuyenmuc','$loaidiadiem','$chitiet');
                ";
            return $this->conn->exec($qr);
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
    }