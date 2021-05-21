<div class="thongtintaikhoan">    
    <h3>Hồ Sơ của tôi</h3>
    <?php 
        foreach ($data["danhmucthongtin"] as $danhmuc)
        {
    ?>
    <div class="row"> 
        <div class="col-sm-2"><b> <?php echo $danhmuc["tendaydu"]?></b></div> 
        <div class="col-sm-6"><?php echo $data["thongtinuser"][$danhmuc["tenviettat"]]?> <span><a href="./taikhoan/thaydoithongtin/<?php echo $danhmuc["tenviettat"]?>">Thay đổi</a></span> </div> 
    </div>
    <?php 
        }    
    ?>
    <div class="row"> 
        <div class="col-sm-2"><b>Mật khẩu</b></div> 
        <div class="col-sm-6">************ <span><a href="./taikhoan/thaydoimatkhau">Thay đổi</a></span> </div> 
    </div>
</div>