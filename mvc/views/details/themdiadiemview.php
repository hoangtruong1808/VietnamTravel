<div class="themcapnhattour">
    <h3>Thêm địa điểm mới</h3>
    <form action="./taikhoan/processthemdiadiem" method="POST" enctype="multipart/form-data">
        <div class="row">       
            <div class="col-sm-6"> 
                <div class="form">             
                    <label>Tên địa điểm</label>
                    <div><input type="form" name="ten"></input></div>
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
                    <label>Mã địa điểm</label>
                    <div><input type="form" name="madiadiem"></input></div>
                </div>
                <div class="form">
                    <label>Url map:</label>
                    <div><input type="form" name="urlmap"></input></div>
                </div>
                <div class="form">
                    <label>Ảnh đại diện</label>
                    <div><input type="file" name="diadiem-img"></input></div>
                </div>
                <div class="form">
                    <label>Các ảnh mô tả</label>
                    <div><input type="file" name="diadiem-imgs[]" multiple="multiple"></input></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="select">             
                    <label>Chuyên mục</label>
                    <div>
                        <select name="chuyenmuc">
                            <option value="Đồ ăn & nước uống">Đồ ăn & nước uống</option>
                            <option value="Địa điểm đẹp">Địa điểm đẹp</option>
                            <option value="Mua sắm">Mua sắm</option>
                            <option value="Nhà nghỉ">Nhà nghỉ</option>
                        </select>
                    </div>
                </div>
                <div class="select">             
                    <label>Loại địa điểm</label>
                    <div>
                        <select name="loaidiadiem">
                            <option value="Quán cafe">Quán cafe</option>
                            <option value="Nhà hàng">Nhà hàng</option>
                            <option value="Quán ăn">Quán ăn</option>
                            <option value="Nhà nghỉ">Nhà nghỉ</option>
                            <option value="Khách sạn">Khách sạn</option>
                            <option value="Chợ">Chợ</option>
                            <option value="Siêu thị">Siêu thị</option>
                            <option value="Điểm tham quan">Điểm tham quan</option>
                            <option value="Đền, chùa">Đền, chùa</option>
                        </select>
                    </div>
                </div>
                <div class="select">             
                    <label>Giá</label>
                    <div>
                        <select name="gia">
                            <option value="Giá miễn phí">Giá miễn phí</option>
                            <option value="Giá rẻ">Giá rẻ</option>
                            <option value="Giá bình thường">Giá bình thường</option>
                            <option value="Giá cao">Giá cao</option>
                        </select>
                    </div>
                </div>
                <div class="checkbox">             
                    <label>Tiện nghi</label>
                    <div>
                        <p><input type="checkbox" name="tiennghi[]" value="Điều hòa">Điều hòa</input></div>
                        <div class="checkbox-input"><input type="checkbox" name="tiennghi[]" value="Bãi đổ xe">Bãi đổ xe</input></div>
                        <div class="checkbox-input"><input type="checkbox" name="tiennghi[] " value="Thanh toán thẻ">Thanh toán thẻ</input></div>
                        <div class="checkbox-input"><input type="checkbox" name="tiennghi[] " value="Bể bơi">Bể bơi</input></div>
                        <div class="checkbox-input"><input type="checkbox" name="tiennghi[] " value="Wifi">Wifi</input></div>
                    </div>
                </div>             
            </div>        
        </div>
        <div class="row"> 
            <div class="form">
                <label>Thông tin chi tiết</label>
                    <div><textarea rows="3" name="chitiet"></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('chitiet');
                        </script>
                    </div>
                </label>
            </div>
        </div>
            <input class="btn-themtour" type="submit" value="Thêm" name="btn-themkdiadiem">
            <p id="ketqua"><?php echo $data["result"]?></p>
        </form>
    </div>