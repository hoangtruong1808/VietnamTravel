<h3>Xác nhận đơn hàng</h3>
<table class="xacnhandonhang">
    <tr>
        <th>Tên tour</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
    </tr>
    <?php 
    if (isset($data["TourDat"]))
    {
        $tong=0;
        foreach($data["TourDat"] as $tour)
        {        
    ?>
    <tr>
        <td><?php echo $tour["ten"]?></td>
        <td><?php echo  number_format($tour["gia"],0,',','.')?></td>
        <td><?php echo $_SESSION["tour"][$tour["ID"]] ?> </td>
        <td><?php echo number_format($a=$tour["gia"]*$_SESSION["tour"][$tour["ID"]],0,',','.')?></td>
    </tr>
    <?php
        $tong = (float)$tong+(float)$a;
        }
    }
    ?>
    <tr>
        <td  colspan="3"> Tổng giá trị </td>
        <td class="tong"><?php echo number_format($tong,0,',','.')?></td>
    </tr>
</table>
<div class="xacnhanthongtinkhachhang">
    <h3>Xác nhận thông tin</h3>
    <div class="row"> 
        <div class="col-sm-2"><b> Họ tên:</b></div> 
        <div class="col-sm-6"><?php echo $data["thongtinuser"]["HoTen"]?> </div> 
    </div>
    <div class="row"> 
        <div class="col-sm-2"><b> Địa chỉ:</b></div> 
        <div class="col-sm-6"><?php echo $data["thongtinuser"]["DiaChi"]?>  </div> 
    </div>
    <div class="row"> 
        <div class="col-sm-2"><b>Điện thoại:</b></div> 
        <div class="col-sm-6"><?php echo $data["thongtinuser"]["DienThoai"]?>  </div> 
    </div>
    <div class="row"> 
        <div class="col-sm-2"><b>Email:</b></div> 
        <div class="col-sm-6"><?php echo $data["thongtinuser"]["Email"]?>  </div> 
    </div>
</div>
<a href="./taikhoan/dattourprocess">
    <button class="btn-dathang">Đặt hàng</button>
</a>
<div class="row" id="luuy">
    <div class="col-sm-8"><i>(*Lưu ý: Vào phần <a href="">Đơn hàng</a> và <a href="">Tài khoản</a> để sửa nếu có sai thông tin)</i></div>
</div>