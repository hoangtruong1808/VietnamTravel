<div class="quanlytour">
    <h3>Quản lý địa điểm </h3>
    <div class="row justify-content-between">
        <div class="col-auto">
            <a href="./taikhoan/themdiadiem"><button class="btn-themsanpham">Thêm địa điểm mới</button></a>
        </div>
        <div class="col-auto">
            <form class="search" action="./taikhoan/search" method="POST">
                <input type="text" name="keysearch" placeholder="Nhập từ khóa">
                <input type="hidden" name="table" value="diadiem">
                <input type="submit" value="Tìm">
            </form>
        </div>
    </div>
    <table class="tour">
        <tr>
            <th>ID</th>
            <th>Tên địa điểm</th>
            <th>Địa chỉ</th>
            <th>Chuyên mục</th>
            <th></th>
            <th></th>
        </tr>
    <?php
        foreach ($data["diadiem"] as $diadiem)
        {     
    ?>
        <tr>
            <td><?php echo $diadiem["ID"]?></td>
            <td><a href="./diadiem/chitietdiadiem/<?php echo $diadiem["madiadiem"]?>/<?php echo $diadiem["ID"]?>" class="tentour"><?php echo $diadiem["ten"]?></a></td>
            <td><?php echo $diadiem["diachi"]?></td>
            <td><?php echo $diadiem["chuyenmuc"]?></td>
            <td><a href="./taikhoan/capnhatdiadiem/<?php echo $diadiem["madiadiem"]?>">Sửa</a></td>
            <td><a href="./taikhoan/xoadiadiem/<?php echo $diadiem["ID"]?>">Xóa</a></td>
        </tr>
    <?php
        }    
    ?>
    </table>
    <div class="phantrang">
        <?php 
            for ($i=1; $i<=$data["sopage"]; $i++)
            {
                echo "<a href='./taikhoan/quanlydiadiem/$i' ><span>$i</span></a>";
            }
        ?>
    </div>
</div>