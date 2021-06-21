<div class="quanlytour">
    <h3>Quản lý khách sạn </h3>
    <div class="row justify-content-between">
        <div class="col-auto">
            <a href="./taikhoan/themkhachsan"><button class="btn-themsanpham">Thêm khách sạn mới</button></a>
        </div>
        <div class="col-auto">
            <form class="search" action="./taikhoan/search" method="POST">
                <input type="text" name="keysearch" placeholder="Nhập từ khóa">
                <input type="hidden" name="table" value="khachsan">
                <input type="submit" value="Tìm">
            </form>
        </div>
    </div>
    <table class="tour">
        <tr>
            <th>ID</th>
            <th>Tên khách sạn</th>
            <th>Thành phố</th>
            <th>Giá</th>
            <th></th>
            <th></th>
        </tr>
    <?php
        foreach ($data["khachsan"] as $khachsan)
        {     
    ?>
        <tr>
            <td><?php echo $khachsan["ID"]?></td>
            <td><a href="./khachsan/chitietkhachsan/<?php echo $khachsan["makhachsan"]?>/<?php echo $khachsan["ID"]?>" class="tentour"><?php echo $khachsan["ten"]?></a></td>
            <td><?php echo $khachsan["thanhpho"]?></td>
            <td><?php echo number_format($khachsan["gia"],0,",",".")?></td>
            <td><a href="./taikhoan/capnhatkhachsan/<?php echo $khachsan["ID"]?>">Sửa</a></td>
            <td><a href="./taikhoan/xoakhachsan/<?php echo $khachsan["ID"]?>">Xóa</a></td>
        </tr>
    <?php
        }    
    ?>
    </table>
    <div class="phantrang">
        <?php 
            for ($i=1; $i<=$data["sopage"]; $i++)
            {
                echo "<a href='./taikhoan/quanlykhachsan/$i' ><span>$i</span></a>";
            }
        ?>
    </div>
</div>