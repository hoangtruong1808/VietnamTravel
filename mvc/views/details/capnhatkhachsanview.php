<div class="themcapnhattour">
    <h3>Cập nhật khách sạn</h3>
    <form action="./taikhoan/processcapnhatkhachsan/<?php echo $data["khachsan"]["ID"]?>" method="POST" enctype="multipart/form-data">
        <div class="row">       
            <div class="col-sm-6"> 
                <div class="form">             
                    <label>Tên khách sạn</label>
                    <div><input type="form" name="ten" value='<?php echo($data["khachsan"]["ten"])?>'></input></div>
                </div>
                <div class="form">
                    <label>Mã khách sạn</label>
                    <div><input type="form" name="ma" value='<?php echo($data["khachsan"]["makhachsan"])?>'></input></div>
                </div>
                <div class="form">
                    <label>Địa chỉ</label>
                    <div><input type="form" name="diachi" value='<?php echo($data["khachsan"]["diachi"])?>'></input></div>
                </div>
                <div class="form">
                    <label>Thành phố</label>
                    <div><input type="form" name="thanhpho" value='<?php echo($data["khachsan"]["thanhpho"])?>'></input></div>
                </div>
                <div class="form">
                    <label>Ảnh</label>
                    <div><input type="file" name="khachsan-img"><input type="hidden" name="khachsan-img" value=<?php echo($data["khachsan"]["urlhinh"])?>></input></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form">             
                    <label>Giá phòng đơn</label>
                    <div><input type="form" name="gia" value='<?php echo($data["khachsan"]["gia"])?>'></input></div>
                </div>
                <div class="form">             
                    <label>Giá phòng đôi</label>
                    <div><input type="form" name="giaphongdoi" value='<?php echo($data["khachsan"]["giaphongdoi"])?>'></input></div>
                </div>
                <div class="form">             
                    <label>Giá phòng gia đình</label>
                    <div><input type="form" name="giaphonggiadinh" value='<?php echo($data["khachsan"]["giaphonggiadinh"])?>'></input></div>
                </div> 
                <div class="form">             
                    <label>Chất lượng (<i class="fas fa-star"></i>)</label>
                    <div><input type="form" name="chatluong" value='<?php echo($data["khachsan"]["chatluong"])?>'></input></div>
                </div>
                <div class="form">             
                    <label>Tiện nghi</label>
                    <div><input type="form" name="tiennghi" value='<?php echo($data["khachsan"]["tiennghi"])?>'></input></div>
                </div>             
            </div>        
        </div>
        <div class="row"> 
            <div class="form">
                <label>Giới thiệu khách sạn</label>
                    <div><textarea rows="3" name="gioithieu" id="gioithieu"><?php echo($data["khachsan"]["gioithieu"])?></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('gioithieu');
                        </script>
                    </div>
                </label>
            </div>
        </div>
        <input class="btn-themtour" type="submit" value="Cập nhật" name="btn-capnhatkhachsan">
        <p id="ketqua"><?php echo $data["result"]?></p>
    </form>
</div>