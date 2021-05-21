<?php
    class datdichvumodel extends DB
    {
        public function LayDichVu($loai)
        { 
            $iduser = $_SESSION["id"];
            $qr = "SELECT * FROM datdichvu
                WHERE loai = '$loai' and iduser=$iduser
                ORDER BY ID DESC";                
            return $this->conn->query($qr);
        }
        public function HuyDichVu($id)
        { 
            $qr = "DELETE FROM datdichvu
                WHERE ID = $id";               
            return $this->conn->query($qr);
        }
    }
?>