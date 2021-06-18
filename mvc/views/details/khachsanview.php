                <div class="row">
                    <form class="search" action="./khachsan/search" method="POST">
                        <span>
                            <select name="chondiadiem" class="searchbox">
                                <option>Tìm thành phố</option>                           
                                <?php
                                    foreach ($data["thanhpho"] as $thanhpho)
                                    {
                                ?>
                                    <option value="<?php echo $thanhpho[0]?>"><?php echo $thanhpho[0]?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </span>
                        <span>
                            <select name="chongia" class="searchbox">
                                <option value="0-10000000000">Tìm Giá Phòng Đơn</option>
                                <option value="100000-500000">100.000 - 500.000</option>
                                <option value="500000-1000000">500.000 - 1.000.000</option>
                                <option value="1000000-2000000">1.000.000 - 2.000.000</option>
                            </select>
                        </span>
                    <span><input type="submit" value="TÌM KIẾM NGAY" id="button" class="searchbox">
                    </span>
                </forrm>
                </div>
                <div class="row">
                    <?php foreach($data["khachsan1"] as $khachsan)
                    {?>
                    <div class="col-sm-3">
                        <div class="khachsan">
                            <a href="./khachsan/chitietkhachsan/<?php echo $khachsan["makhachsan"]?>/<?php echo $khachsan["ID"]?>">  
                            <img src="public/image/<?php echo $khachsan["urlhinh"]?>">
                            <div class="tenkhachsan"><?php echo $khachsan["ten"]?></div>
                            <div class="thanhpho"><i class="fas fa-map-marker-alt"></i><?php echo " ".$khachsan["thanhpho"]?></div>
                            <div class="star">
                                <?php for ($i=1; $i<=$khachsan["chatluong"]; $i++)
                                {
                                    echo '<i class="fas fa-star"></i>';
                                }
                                ?>
                            </div>
                            <div class="gia"><?php echo number_format($khachsan["gia"],0,',','.')?>đ</div>
                            <div class="button">
                                <span><button class="chitiet">CHI TIẾT</button></span>
                                <span><button class="datphong">ĐẶT PHÒNG</button></span>
                            </div>
                            </a> 
                        </div> 
                    </div>         
                    <?php
                    }
                    ?>
                    <?php foreach($data["khachsan2"] as $khachsan)
                    {?>
                    <div class="col-sm-3">
                        <div class="khachsan">
                            <a href="./khachsan/chitietkhachsan/<?php echo $khachsan["makhachsan"]?>/<?php echo $khachsan["ID"]?>">  
                            <img src="public/image/<?php echo $khachsan["urlhinh"]?>">
                            <div class="tenkhachsan"><?php echo $khachsan["ten"]?></div>
                            <div class="thanhpho"><i class="fas fa-map-marker-alt"></i><?php echo " ".$khachsan["thanhpho"]?></div>
                            <div class="star">
                                <?php for ($i=1; $i<=$khachsan["chatluong"]; $i++)
                                {
                                    echo '<i class="fas fa-star"></i>';
                                }
                                ?>
                            </div>
                            <div class="gia"><?php echo number_format($khachsan["gia"],0,',','.')?>đ</div>
                            <div class="button">
                                <span><button class="chitiet">CHI TIẾT</button></span>
                                <span><button class="datphong">ĐẶT PHÒNG</button></span>
                            </div>
                            </a> 
                        </div> 
                    </div>         
                    <?php
                    }
                    ?>
                    <?php foreach($data["khachsan3"] as $khachsan)
                    {?>
                    <div class="col-sm-3">
                        <div class="khachsan">
                            <a href="./khachsan/chitietkhachsan/<?php echo $khachsan["makhachsan"]?>/<?php echo $khachsan["makhachsan"]?>">  
                            <img src="public/image/<?php echo $khachsan["urlhinh"]?>">
                            <div class="tenkhachsan"><?php echo $khachsan["ten"]?></div>
                            <div class="thanhpho"><i class="fas fa-map-marker-alt"></i><?php echo " ".$khachsan["thanhpho"]?></div>
                            <div class="star">
                                <?php for ($i=1; $i<=$khachsan["chatluong"]; $i++)
                                {
                                    echo '<i class="fas fa-star"></i>';
                                }
                                ?>
                            </div>
                            <div class="gia"><?php echo number_format($khachsan["gia"],0,',','.')?>đ</div>

                            <div class="button">
                                <span><button class="chitiet">CHI TIẾT</button></span>
                                <span><button class="datphong">ĐẶT PHÒNG</button></span>
                            </div>
                            </a> 
                        </div> 
                    </div>         
                    <?php
                    }
                    ?>  
                </div> 
                <div class="phantrang">
                            <a href="./khachsan/page/1" ><span>1</span></a>
                            <a href="./khachsan/page/2" ><span>2</span></a>
                
                    </div>