<h3>Thay đổi thông tin</h3>
<form action="./taikhoan/processthaydoi/<?php echo $data["danhmucthongtin"]["tenviettat"]?>" method="POST" class="thaydoithongtin">
    <div class="row"> 
        <div class="col-sm-2"><b><?php echo $data["danhmucthongtin"]["tendaydu"]?></b></div> 
        <div class="col-sm-6"><?php echo $data["thongtinuser"][$data["danhmucthongtin"]["tenviettat"]]?></div> 
    </div>
    <div class="row"> 
        <div class="col-sm-2"><b><?php echo $data["danhmucthongtin"]["tendaydu"]?> mới: </b></div> 
        <div class="col-sm-6"><input type="form" name="<?php echo $data["danhmucthongtin"]["tenviettat"]?>moi" class="form"></div> 
    </div>
    <div class="row"> 
        <div class="col-sm-8"><input type="submit" name="btn-sua" class="btn-sua" value="SỬA">
    </div>
    <div class="row" id="ketqua"> 
        <div class="col-sm-8"><?php echo $data["result"]?></div>
    </div>
</form>