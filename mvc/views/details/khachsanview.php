
                <div class="row">
                    <forrm class="search">
                        <span>
                            <select name="chondiadiem" class="searchbox">
                                <option>Tìm Địa điểm</option>
                                <option>Gia Lai</option>
                                <option>Thành phố Hồ Chí Minh</option>
                                <option>Hà Nội</option>
                            </select>
                        </span>
                        <span>
                            <select name="chongia" class="searchbox">
                                <option>Tìm Giá</option>
                                <option>100.000-200.000</option>
                                <option>100.000-200.000</option>
                                <option>100.000-200.000</option>
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
                            <a href="./khachsan/chitietkhachsan/<?php echo $khachsan["makhachsan"]?>">  
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
                            <a href="./khachsan/chitietkhachsan/<?php echo $khachsan["makhachsan"]?>">  
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
                            <a href="./khachsan/chitietkhachsan/<?php echo $khachsan["makhachsan"]?>">  
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