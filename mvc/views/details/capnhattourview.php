<div class="themcapnhattour">
    <h3>Cập nhật tour mới</h3>
    <form action="./taikhoan/processcapnhattour/<?php echo $data["tour"]["ID"]?>"method="POST" enctype="multipart/form-data">
        <div class="row">       
            <div class="col-sm-6"> 
                <div class="form">             
                    <label>Tên tour</label>
                    <div><input type="form" name="ten" value="<?php echo($data["tour"]["ten"])?>"></input></div>
                </div>
                <div class="form">
                    <label>Mã tour</label>
                    <div><input type="form" name="ma" value=<?php echo($data["tour"]["matour"])?>></input></div>
                </div>
                <div class="form">
                    <label>Giá</label>
                    <div><input type="form" name="gia" value=<?php echo($data["tour"]["gia"])?>></input></div>
                </div>
                <div class="form">
                    <label>Giá trước khuyến mãi</label>
                    <div><input type="form" name="giatruockm" value=<?php echo($data["tour"]["giatruockm"])?>></input></div>
                </div>
                <div class="form">
                    <label>Ảnh mô tả</label>
                    <div><input type="file" name="tour-img"><input type="hidden" name="tour-img" value=<?php echo($data["tour"]["urlhinh"])?>></input></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form">             
                    <label>Ngày khởi hành</label>
                    <div><input type="date" name="ngaykhoihanh" value="<?php echo($data["tour"]["ngaykhoihanh"])?>"></input></div>
                </div>
                <div class="form">             
                    <label>Lịch trình</label>
                    <div><input type="form" name="thoigian" value="<?php echo($data["tour"]["thoigian"])?>"></input></div>
                </div>
                <div class="form">             
                    <label>Điểm xuất phát</label>
                    <div><input type="form" name="diemxuatphat" value="<?php echo($data["tour"]["diemxuatphat"])?>"></input></div>
                </div> 
                <div class="form">             
                    <label>Điểm đến</label>
                    <div><input type="form" name="diemden" value="<?php echo($data["tour"]["diemden"])?>"></input></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form">
                <label>Thông tin chi tiết tour</label>
                    <div><textarea name="chitiet" id="chitiet"><?php echo($data["tour"]["chitiet"])?></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('chitiet');
                        </script> 
                    </div>                  
                </label>               
            </div>
        </div>
        <input class="btn-themtour" name="btn-capnhattour" type="submit" value="Cập nhật">
        <p id="ketqua"><?php echo $data["result"]?></p>
    </form>
</div>