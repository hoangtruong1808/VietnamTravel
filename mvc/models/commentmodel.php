<?php
    class commentmodel extends DB
    {
        public function ThemCommentMoi($comment, $theloai, $hotenuser,$idbaiviet, $link)
        { 
            $iduser = $_SESSION["id"];
            $date = date("Y-m-d H:i:s");
            $qr ="INSERT INTO comment
                VALUES (null, '$comment', '$date', $iduser,'$hotenuser', '$theloai', $idbaiviet, '$link' )";
            return $this->conn->exec($qr);
        }
        public function LayComment($theloai, $idbaiviet)
        { 
            $qr = "SELECT * FROM comment
                 WHERE theloai='$theloai' AND idbaiviet='$idbaiviet' 
                 ORDER BY ID DESC";
            return $this->conn->query($qr);
        }

    }
?>