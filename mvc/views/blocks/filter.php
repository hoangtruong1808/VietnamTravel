<div class="filter">
    <form name="filter-form" method="POST" action="./diadiem/filter">
        <div class="row justify-content-between">
            <div class="col-sm-9">
                <h3>
                Bộ lọc 
                </h3>      
            </div>
            <div class="col-sm-3">     
                <input class="btn-search" type="submit" name="btn-filter" value="Tìm">
            </div>
        </div>
        <div class="filter_tq">
            <div class="filter_tieude">
                Giá
            </div>
            <div class="filter_option">
                <input type="radio" name="gia[]" value="Giá miễn phí">Giá miễn phí
            </div>
            <div class="filter_option">
                <input type="radio" name="gia[]" value="Giá rẻ">Giá rẻ
            </div>
            <div class="filter_option">
                <input type="radio" name="gia[]" value="Giá bình thường">Giá bình thường
            </div>
            <div class="filter_option">
                <input type="radio" name="gia[]" value="Giá cao">Giá cao
            </div>
        </div>
        <div class="filter_tq">
            <div class="filter_tieude">
                Thành phố
            </div>
            <?php foreach($data["thanhpho"] as $thanhpho)
            {?>
            <div class="filter_option">
                <input type="radio" name="thanhpho[]" value="<?php echo $thanhpho['thanhpho']?>"><?php echo $thanhpho['thanhpho']?>
            </div>
            <?php
            }?>
            
        </div>
        <div class="filter_tq">
            <div class="filter_tieude">
                Chuyên mục
            </div>
            <div class="filter_option">
                <input type="radio" name="chuyenmuc[]" value="Đồ ăn & nước uống">Đồ ăn & nước uống
            </div>
            <div class="filter_option">
                <input type="radio" name="chuyenmuc[]" value="Địa điểm đẹp">Địa điểm đẹp
            </div>
            <div class="filter_option">
                <input type="radio" name="chuyenmuc[]" value="Mua sắm">Mua sắm
            </div>
            <div class="filter_option">
            <input type="radio" name="chuyenmuc[]" value="Nhà nghỉ">Nhà nghỉ
            </div>
        </div>
        <div class="filter_tq">
            <div class="filter_tieude">
                Loại địa điểm
            </div>
            <?php foreach($data["loaidiadiem"] as $loaidiadiem)
            {?>
            <div class="filter_option">
                <input type="radio" name="loaidiadiem[]" value="<?php echo $loaidiadiem['loaidiadiem']?>"><?php echo $loaidiadiem['loaidiadiem']?>
            </div>
            <?php
            }?>
        </div>
        <div class="filter_tq">
            <div class="filter_tieude">
                Tiện ích
            </div>
            <div class="filter_option">
                <input type="checkbox" name="tiennghi[]" value="Điều hòa">Điều hòa
            </div>
            <div class="filter_option">
                <input type="checkbox" name="tiennghi[]" value="Bãi đổ xe">Bãi đổ xe
            </div>
            <div class="filter_option">
                <input type="checkbox" name="tiennghi[]" value="Thanh toán thẻ">Thanh toán thẻ
            </div>
            <div class="filter_option">
                <input type="checkbox" name="tiennghi[]" value="Bể bơi">Bể bơi
            </div>
            <div class="filter_option">
                <input type="checkbox" name="tiennghi[]" value="Wifi">Wifi
            </div>
        </div>
    </form>
</div> 