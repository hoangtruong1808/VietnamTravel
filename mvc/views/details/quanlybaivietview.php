<div class="quanlytour">
    <h3>Quản lý bài viết </h3>
    <div class="row justify-content-between">
        <div class="col-auto">
            <a href="./taikhoan/thembaiviet"><button class="btn-themsanpham">Thêm bài viết mới</button></a>
        </div>
        <div class="col-auto">
            <form class="search" action="./taikhoan/searchbaiviet" method="POST">
                <input type="text" name="keysearch" placeholder="Nhập từ khóa">
                <input type="hidden" name="table" value="baiviet">
                <input type="submit" value="Tìm">
            </form>
        </div>
    </div>
    <table class="tour">
        <tr>
            <th><div style=" margin:0px 10px;">ID</div></th>
            <th>Tiêu đề</th>
            <th>Lượt xem</th>
            <th></th>
            <th></th>
        </tr>
    <?php
        foreach ($data["baiviet"] as $baiviet)
        {     
    ?>
        <tr>
            <td><?php echo $baiviet["ID"]?></td>
            <td><a href="./baiviet/blog/<?php echo $baiviet["tieudekhongdau"]?>/<?php echo $baiviet["ID"]?>" class="tentour"><?php echo $baiviet["tieude"]?></a></td>
            <td><?php echo $baiviet["LuotXem"]?></td>
            <td><a href="./taikhoan/capnhatbaiviet/<?php echo $baiviet["ID"]?>" style=" margin:0px 10px;">Sửa</a></td>
            <td><a href="./taikhoan/xoabaiviet/<?php echo $baiviet["tieudekhongdau"] ?>" style=" margin:0px 10px;">Xóa</a></td>
        </tr>
    <?php
        }    
    ?>
    </table>
    <div class="phantrang">
        <?php 
            for ($i=1; $i<=$data["sopage"]; $i++)
            {
                echo "<a href='./taikhoan/quanlybaiviet/$i' ><span>$i</span></a>";
            }
        ?>
    </div>
</div>