<div class="themcapnhattour">
    <h3>Thêm khách sạn mới</h3>
    <form action="./taikhoan/processthemkhachsan" method="POST" enctype="multipart/form-data">
        <div class="row">       
            <div class="col-sm-6"> 
                <div class="form">             
                    <label>Tên khách sạn</label>
                    <div><input type="form" name="ten"></input></div>
                </div>
                <div class="form">
                    <label>Mã khách sạn</label>
                    <div><input type="form" name="ma"></input></div>
                </div>
                <div class="form">
                    <label>Địa chỉ</label>
                    <div><input type="form" name="diachi"></input></div>
                </div>
                <div class="form">
                    <label>Thành phố</label>
                    <div><input type="form" name="thanhpho"></input></div>
                </div>
                <div class="form">
                    <label>Ảnh</label>
                    <div><input type="file" name="khachsan-img"></input></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form">             
                    <label>Giá phòng đơn</label>
                    <div><input type="form" name="gia"></input></div>
                </div>
                <div class="form">             
                    <label>Giá phòng đôi</label>
                    <div><input type="form" name="giaphongdoi"></input></div>
                </div>
                <div class="form">             
                    <label>Giá phòng gia đình</label>
                    <div><input type="form" name="giaphonggiadinh"></input></div>
                </div> 
                <div class="form">             
                    <label>Chất lượng (<i class="fas fa-star"></i>)</label>
                    <div><input type="form" name="chatluong"></input></div>
                </div>
                <div class="form">             
                    <label>Tiện nghi</label>
                    <div><input type="form" name="tiennghi"></input></div>
                </div>             
            </div>        
        </div>
        <div class="row"> 
            <div class="form">
                <label>Thông tin chi tiết khách sạn</label>
                    <div><textarea rows="3" name="chitiet"></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('chitiet');
                        </script>
                    </div>
                </label>
            </div>
        </div>
        <input class="btn-themtour" type="submit" value="Thêm" name="btn-themkhachsan">
        <p id="ketqua"><?php echo $data["result"]?></p>
    </form>
</div>