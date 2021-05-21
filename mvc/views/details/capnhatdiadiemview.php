<div class="themcapnhattour">
    <h3>Cập nhật địa điểm</h3>
    <form action="./taikhoan/processcapnhatdiadiem/<?php echo $data["diadiem"]["ID"]?>" method="POST" enctype="multipart/form-data">
        <div class="row">       
            <div class="col-sm-6"> 
                <div class="form">             
                    <label>Tên địa điểm</label>
                    <div><input type="form" name="ten" value='<?php echo($data["diadiem"]["ten"])?>'></input></div>
                </div>
                <div class="form">
                    <label>Địa chỉ</label>
                    <div><input type="form" name="diachi" value='<?php echo($data["diadiem"]["diachi"])?>'></input></div>
                </div>
                <div class="form">             
                    <label>Thành phố</label>
                    <div><input type="form" name="thanhpho" value='<?php echo($data["diadiem"]["thanhpho"])?>'></input></div>
                </div>
                <div class="form">
                    <label>Mã địa điểm</label>
                    <div><input type="form" name="madiadiem" value='<?php echo($data["diadiem"]["madiadiem"])?>'></input></div>
                </div>
                
                <div class="form">
                    <label>Url map:</label>
                    <div><input type="form" name="urlmap" value='<?php echo($data["diadiem"]["urlmap"])?>'></input></div>
                </div>
                <div class="form">
                    <label>Ảnh</label>
                    <div><input type="file" name="diadiem-img"><input type="hidden" name="diadiem-img" value=<?php echo($data["diadiem"]["urlhinh"])?>></input></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form">             
                    <label>Chuyên mục</label>
                    <div>
                        <select name="chuyenmuc" >
                        <option value='<?php echo $data["diadiem"]["chuyenmuc"] ?>' selected="selected"><?php echo $data["diadiem"]["chuyenmuc"] ?></option>
                            <option value="Đồ ăn & nước uống">Đồ ăn & nước uống</option>
                            <option value="Địa điểm đẹp">Địa điểm đẹp</option>
                            <option value="Mua sắm">Mua sắm</option>
                            <option value="Nhà nghỉ">Nhà nghỉ</option>
                        </select>
                    </div>
                </div>
                <div class="form">             
                    <label>Loại địa điểm</label>
                    <div>
                        <select name="loaidiadiem" >
                            <option value='<?php echo $data["diadiem"]["loaidiadiem"] ?>' selected="selected"><?php echo $data["diadiem"]["loaidiadiem"] ?></option>
                            <option value="Quán cafe">Quán cafe</option>
                            <option value="Nhà hàng">Nhà hàng</option>
                            <option value="Quán ăn">Quán ăn</option>
                            <option value="Nhà nghỉ">Nhà nghỉ</option>
                            <option value="Khách sạn">Khách sạn</option>
                            <option value="Chợ">Chợ</option>
                            <option value="Siêu thị">Siêu thị</option>
                            <option value="Danh lam thắng cảnh">Danh lam thắng cảnh</option>
                            <option value="Đền, chùa">Đền, chùa</option>
                        </select>
                    </div>
                </div> 
                <div class="form">             
                    <label>Giá</label>
                    <div>
                        <select name="gia" >
                        <option value='<?php echo $data["diadiem"]["gia"] ?>' selected="selected"><?php echo $data["diadiem"]["gia"] ?></option>
                            <option value="Giá rẻ">Giá rẻ</option>
                            <option value="Giá bình thường">Giá bình thường</option>
                            <option value="Giá cao">Giá cao</option>
                        </select>
                    </div>
                </div>
                <div class="checkbox">             
                    <label>Tiện nghi</label>
                    <div>
                        <div><input type="checkbox" name="tiennghi[]" value="Điều hòa"><span>Điều hòa</span></input></div>
                        <div><input type="checkbox" name="tiennghi[]" value="Bãi đổ xe"><span>Bãi đổ xe</span></input></div>
                        <div><input type="checkbox" name="tiennghi[] " value="Thanh toán thẻ"><span>Thanh toán thẻ</span></input></div>
                        <div><input type="checkbox" name="tiennghi[] " value="Bể bơi"><span>Bể bơi</span></input></div>
                        <div><input type="checkbox" name="tiennghi[] " value="Wifi"><span>Wifi</span></input></div>
                    </div>
                </div>              
            </div>        
        </div>
        <div class="row"> 
            <div class="form">
                <label>Thông tin chi tiết</label>
                    <div><textarea rows="3" name="chitiet" id="chitiet"><?php echo($data["diadiem"]["chitiet"])?></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('chitiet');
                        </script>
                    </div>
                </label>
            </div>
        </div>
        <input class="btn-themtour" type="submit" value="Cập nhật" name="btn-capnhatdiadiem">
        <p id="ketqua"><?php echo $data["result"]?></p>
    </form>
</div>