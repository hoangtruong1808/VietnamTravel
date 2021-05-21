<h3>Các Tour đã đặt</h3> 
<table class="lichsudattour">
    <tr>
        <th class="ten">Tên tour</th>
        <th class="ngaykhoihanh">Ngày khởi hành</th>
        <th class="lichtrinh">Lịch trình</th>
        <th class="thoigiandat">Thời gian đặt</th>
        <th class="soluong">Số lượng</th>
        <th class="gia">Giá</th>
        <th> </th>
    </tr>
    <?php 
    foreach($data["tourdadat"] as $dichvu)
    {
    ?>
    <tr>
        <td class="ten"><?php echo $dichvu["ten"] ?></th>
        <td class="ngaykhoihanh"><?php echo $dichvu["ngaybatdau"] ?></th>
        <td class="lichtrinh"><?php echo $dichvu["ngayketthuc"] ?></th>
        <td class="thoigiandat"><?php echo $dichvu["thoigiandat"] ?></th>
        <td class="soluong"><?php echo $dichvu["soluong"] ?></th>
        <td class="gia"><?php  echo number_format($dichvu["gia"],0,',','.') ?></th>
        <td><?php 
                if ((strtotime($dichvu["ngaybatdau"]) - strtotime(date("Y-m-d"))) > 0)
                {
                    echo '<a href="./taikhoan/huydat/'.$dichvu["ID"].'">Hủy</a>';
                }
            ?>
        </td>
    </tr>  
    <?php
    }
    ?>
</table>
<h3>Khách Sạn đã đặt</h3> 
<table class="lichsudatkhachsan">
    <tr>
        <th class="ten">Tên khách sạn</th>
        <th class="ngaykhoihanh">Ngày nhận phòng</th>
        <th class="lichtrinh">Ngày trả phòng</th>
        <th class="thoigiandat">Thời gian đặt</th>
        <th class="soluong">Số lượng</th>
        <th class="gia">Giá</th>
        <th></th>
    </tr>
    <?php 
    foreach($data["khachsandadat"] as $dichvu)
    {
    ?>
    <tr>
        <td class="ten"><?php echo $dichvu["ten"] ?></th>
        <td class="ngaykhoihanh"><?php echo $dichvu["ngaybatdau"] ?></th>
        <td class="lichtrinh"><?php echo $dichvu["ngayketthuc"] ?></th>
        <td class="thoigiandat"><?php echo $dichvu["thoigiandat"] ?></th>
        <td class="soluong"><?php echo $dichvu["soluong"] ?></th>
        <td class="gia"><?php echo number_format($dichvu["gia"],0,',','.') ?></th>
        <td><?php 
                if ((strtotime($dichvu["ngaybatdau"]) - strtotime(date("Y-m-d"))) > 0)
                {
                    echo '<a href="./taikhoan/huydat/'.$dichvu["ID"].'">Hủy</a>';
                }
            ?>
        </td>
    </tr>  
    <?php
    }
    ?>
</table>
