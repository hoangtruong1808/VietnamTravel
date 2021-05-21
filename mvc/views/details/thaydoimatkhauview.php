<h3>Thay đổi mật khẩu</h3>
<div class="thaydoithongtin"> 
<form action="./taikhoan/processthaydoimatkhau" method="POST" class="thaydoithongtin">
    <div class="row"> 
        <div class="col-sm-2"><b>Mật khẩu cũ: </b></div> 
        <div class="col-sm-6"><input type="password" name="matkhaucu" class="form"></div>  
    </div>
    <div class="row"> 
        <div class="col-sm-2"><b>Mật khẩu mới: </b></div> 
        <div class="col-sm-6"><input type="password" name="matkhaumoi" class="form"></div> 
    </div>
    <div class="row"> 
        <div class="col-sm-8"><input type="submit" name="btn-sua" class="btn-sua" value="SỬA">
    </div>
    <div class="row" id="ketqua"> 
        <div class="col-sm-8"><?php echo $data["result"]?></div>
    </div>
</form>