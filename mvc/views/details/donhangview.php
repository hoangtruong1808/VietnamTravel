
<h3>Đơn hàng</h3>
<table class="giohang">
    <tr>
        <th class="del"></th>
        <th class="img"></th>
        <th class="ten">TOUR</th>
        <th class="gia">GIÁ</th>
        <th class="soluong">SỐ LƯỢNG</th>
        <th class="tamtinh">TẠM TÍNH</th>
    </tr>
    <?php 
    if (isset($data["TourDat"]))
    {
        $tong=0;
        foreach($data["TourDat"] as $tour)
        {        
    ?>
    <form action="./taikhoan/capnhatdonhang" method="POST">
    <tr>
        <td>
            <a href="./taikhoan/xoadonhang/<?php echo $tour["ID"]?>"><input type="button" value="Xóa" class="button"></a>
        </td>
        <td><img src="./public/image/<?php echo $tour["urlhinh"]?>"></td>
        <td><a href=""><?php echo $tour["ten"]?></a></td> 
        <td><?php echo  number_format($tour["gia"],0,',','.')?></td>
        <td>
            <input name="sl[<?php echo $tour["ID"]?>]" type="number" min="0" class="number" value="<?php echo $_SESSION["tour"][$tour["ID"]] ?>">
        </td>
        <td><?php echo number_format($a=$tour["gia"]*$_SESSION["tour"][$tour["ID"]],0,',','.')?></td>
    </tr>    
    <?php
        $tong = (float)$tong+(float)$a;     
        }
    }
    
    else echo "Bạn không có đơn hàng nào";
    ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><input type="submit" value="Cập nhật" class="button" id="capnhat"></td>
    </tr>
    </form>
</table>    

<div class="tongcong"><b>TỔNG CỘNG:</b> <?php echo number_format($tong,0,',','.')?></div>
<a href="./taikhoan/xacnhandonhang"><button class="btn-thanhtoan">THANH TOÁN</button></a>