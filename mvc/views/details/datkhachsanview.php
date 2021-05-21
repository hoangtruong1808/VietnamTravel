<div class="datkhachsan">    
    <div class="row">
        <div class="col-sm-8">
            <h3>Đặt khách sạn</h3>
        </div>
    </div>
    <?php 
        foreach ($data["danhmucthongtin"] as $danhmuc)
        {
    ?>
    <div class="row"> 
        <div class="col-sm-3"><b> <?php echo $danhmuc["tendaydu"]?></b></div> 
        <div class="col-sm-6"><?php echo $data["thongtinuser"][$danhmuc["tenviettat"]]?> </div> 
    </div>

    <?php 
        }
    ?>    
    <form name="datkhachsan" method="POST" action="./taikhoan/datkhachsanprocess/<?php echo $data["chitietkhachsan"]["makhachsan"]?>">
        <div class="row">
            <div class="col-sm-3"><b>Khách sạn</b></div>
            <div class="col-sm-5"><input type="form" name="tenkhachsan" value="<?php echo $data["chitietkhachsan"]["ten"]?>"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"><b>Ngày nhận phòng</b></div>
            <div class="col-sm-5"> <input name="ngaynhanphong" type="date" min="<?php echo date("Y-m-d")?>"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"><b>Ngày trả phòng</b></div>
            <div class="col-sm-5"> <input name="ngaytraphong" type="date" min="<?php echo date("Y-m-d")?>"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"><b>Chọn loại phòng</b></div>    
            <div class="col-sm-5">
                <select name="loaiphong">
                    <option value=<?php echo $data["chitietkhachsan"]["gia"]?>>Phòng đơn: <?php echo number_format($data["chitietkhachsan"]["gia"],0,',','.')?>đ/ngày</option>
                    <option value=<?php echo $data["chitietkhachsan"]["giaphongdoi"]?>>Phòng đôi: <?php echo number_format($data["chitietkhachsan"]["giaphongdoi"],0,',','.') ?>đ/ngày</option>
                    <option value=<?php echo $data["chitietkhachsan"]["giaphonggiadinh"]?>>Phòng giành cho gia đình: <?php echo number_format($data["chitietkhachsan"]["giaphonggiadinh"],0,',','.') ?>đ/ngày</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"><b>Số phòng</b></div>        
            <div class="col-sm-5">
                <input name="sophong" type="form">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8" id="result">
                <?php echo $data["result"]?>
            </div>
        </div>
        <div>
            <input name="btn-datphong" class="btn-datphong" type="submit" value="Đặt phòng">
        </div>
    </form>
    <div class="row">
        <div class="col-sm-8" id="luuy">
            <i>(*Lưu ý: Vào phần<a href="./taikhoan/thongtintaikhoan">Tài khoản</a> để sửa nếu có sai thông tin)</i>
        </div>
    </div>
</div>