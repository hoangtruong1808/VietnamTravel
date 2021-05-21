<div class="themcapnhattour">
    <h3>Thêm tour mới</h3>
    <form action="./taikhoan/processthemtour" method="POST" enctype="multipart/form-data">
        <div class="row">       
            <div class="col-sm-6"> 
                <div class="form">             
                    <label>Tên tour</label>
                    <div><input type="form" name="ten"></input></div>
                </div>
                <div class="form">
                    <label>Mã tour</label>
                    <div><input type="form" name="ma"></input></div>
                </div>
                <div class="form">
                    <label>Giá</label>
                    <div><input type="form" name="gia"></input></div>
                </div>
                <div class="form">
                    <label>Giá trước khuyến mãi</label>
                    <div><input type="form" name="giatruockm"></input></div>
                </div>
                <div class="form">
                    <label>Ảnh mô tả</label>
                    <div><input type="file" name="tour-img"></input></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form">             
                    <label>Ngày khởi hành</label>
                    <div><input type="date" name="ngaykhoihanh"></input></div>
                </div>
                <div class="form">             
                    <label>Lịch trình</label>
                    <div><input type="form" name="thoigian"></input></div>
                </div>
                <div class="form">             
                    <label>Điểm xuất phát</label>
                    <div><input type="form" name="diemxuatphat"></input></div>
                </div> 
                <div class="form">             
                    <label>Điểm đến</label>
                    <div><input type="form" name="diemden"></input></div>
                </div>             
            </div>        
        </div>
        <div class="row"> 
            <div class="form">
                <label>Thông tin chi tiết tour</label>
                    <div><textarea rows="3" name="chitiet"></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('chitiet');
                        </script>
                    </div>
                </div>
        </div>
        <input class="btn-themtour" type="submit" value="Thêm" name="btn-themtour">
        <p id="ketqua"><?php echo $data["result"]?></p>
    </form>
</div>