
                <!--/*-<form class="search1">
                        <span>
                            <input class="searchcity" type="text" name="timdiaiem" placeholder="Nhập thành phố hoặc vị trí">
                        </span>
                    <span><input type="submit" value="TÌM KIẾM NGAY" id="button" class="searchbox">
                    </span>
                </forrm>*/-->
            
                <!--content-->
                <div class="khampha">
                    <h1>Khám phá</h1>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="khampha__menu">
                                <a href="./diadiem/boloc/loaidiadiem/Quán cafe">
                                    <h2>Đồ ăn & Nước uống</h2>
                                    <img src="./public/image/doannuocuon.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="khampha__menu">
                                <a href="./diadiem/boloc/chuyenmuc/Địa điểm đẹp">
                                    <h2>Địa điểm đẹp</h2>
                                    <img src="./public/image/diadiemdep.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">                            
                            <div class="khampha__menu">
                                <a href="./diadiem/boloc/chuyenmuc/Mua sắm">
                                    <h2>Mua sắm</h2>
                                    <img src="./public/image/muasam.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">                            
                            <div class="khampha__menu">
                                <a href="./diadiem/boloc/chuyenmuc/Nhà nghỉ">
                                    <h2>Nhà nghỉ</h2>
                                    <img src="./public/image/hotel.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="diadiemnoibat">
                    <h1>Địa điểm mới nhất</h1>
                    <div class="row">
                        <?php foreach($data["diadiem"] as $diadiem)
                        {?>
                        <div class="col-sm-3">
                            <div class="diadiemnoibat__menu">
                                <a href="./diadiem/chitietdiadiem/<?php echo $diadiem['madiadiem'] ?>/<?php echo $diadiem['ID'] ?>"><img src="./public/image/<?php echo $diadiem['urlhinh']?>"></a>
                                <div class="thanhpho"><a href="./diadiem/boloc/thanhpho/<?php echo $diadiem['thanhpho'] ?> ?>/<?php echo $diadiem['ID'] ?>"> <?php echo $diadiem['thanhpho']?> </a></div>
                                <div class="diadiem"><a href="./diadiem/chitietdiadiem/<?php echo $diadiem['madiadiem'] ?>/<?php echo $diadiem['ID'] ?>"> <?php echo $diadiem['ten']?> </a></div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>  
                <div class="thanhphonoibat">
                    <h1>Thành phố nổi bật</h1>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thanhphonoibat__menu">
                                <a href="./diadiem/boloc/thanhpho/TP.Hồ Chí Minh">
                                    <div class="thanhpho"> TP.HCM - <?php echo $data["tphcm"][0]?> places</div>
                                    <img src="./public/image/tphcm.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thanhphonoibat__menu">
                                <a href="./diadiem/boloc/thanhpho/Hà Nội">
                                    <div class="thanhpho"> Hà Nội - <?php echo $data["hanoi"][0]?> places</div>
                                    <img src="./public/image/tphanoi.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thanhphonoibat__menu">
                                <a href="./diadiem/boloc/thanhpho/Đà Nẵng">
                                    <div class="thanhpho"> Đà Nẵng - <?php echo $data["danang"][0]?> places</div>
                                    <img src="./public/image/langson.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thanhphonoibat__menu">
                                <a href="./diadiem/boloc/thanhpho/Pleiku">
                                    <div class="thanhpho"> Pleiku - <?php echo $data["pleiku"][0]?> places</div>
                                    <img src="./public/image/pleiku.gif">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trangchu-baivietdocnhieunhat">
                    <h1>Bài viết đọc nhiều nhất</h1>
                    <div class="row">
                        <?php foreach ($data["baiviet"] as $baiviet)
                        {
                        ?>
                        <div class="col-sm-3">
                            <div class="baiviet">
                                <div class="tieude">
                                    <a href="./baiviet/blog/<?php echo $baiviet["tieudekhongdau"]?>"><?php echo $baiviet["tieude"]?></a>
                                </div>
                                <div class="tomtat">
                                    <?php echo $baiviet["tomtat"]?>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
    
                <!--kết thúc content-->    
            </div>