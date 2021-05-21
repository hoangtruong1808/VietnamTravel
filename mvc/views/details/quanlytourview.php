<div class="quanlytour">
    <h3>Quản lý tour </h3>
    <div class="row justify-content-between">
        <div class="col-auto">
            <a href="./taikhoan/themtour"><button class="btn-themsanpham">Thêm sản phẩm mới</button></a>
        </div>
        <div class="col-auto">
            <form class="search" action="./taikhoan/search" method="POST">
                <input type="text" name="keysearch" placeholder="Nhập từ khóa">
                <input type="hidden" name="table" value="tour">
                <input type="submit" value="Tìm">
            </form>
        </div>
    </div>
    <table class="tour">
        <tr>
            <th>ID</th>
            <th>Tên tour</th>
            <th>Mã tour</th>
            <th>Giá</th>
            <th></th>
            <th></th>
        </tr>
    <?php
        foreach ($data["tour"] as $tour)
        {     
    ?>
        <tr>
            <td><?php echo $tour["ID"]?></td>
            <td><a href="./dattour/chitiettour/<?php echo $tour["matour"]?>" class="tentour"><?php echo $tour["ten"]?></a></td>
            <td><?php echo $tour["matour"]?></td>
            <td><?php echo number_format($tour["gia"],0,",",".")?></td>
            <td><a href="./taikhoan/capnhattour/<?php echo $tour["ID"]?>">Sửa</a></td>
            <td><a href="./taikhoan/xoatour/<?php echo $tour["matour"]?>">Xóa</a></td>
        </tr>
    <?php
        }    
    ?>
    </table>
    <div class="phantrang">
        <?php 
            for ($i=1; $i<=$data["sopage"]; $i++)
            {
                echo "<a href='./taikhoan/quanlytour/$i' ><span>$i</span></a>";
            }
        ?>
    </div>
</div>