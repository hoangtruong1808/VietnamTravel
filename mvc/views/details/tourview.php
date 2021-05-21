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
                <div class="adver">
                    <h1>Tour du lịch</h1>
                    <p>Sale off tất cả các tour từ miền Bắc đến miền Nam. Nhanh tay đặt tour cho gia đình cùng quây quần bên nhau</p>
                </div>
                <div class="row">
                    <?php foreach($data["tour1"] as $tour1)
                    {?>
                    <div class="col-sm-3">
                        <div class="tours">
                            <a href="./dattour/chitiettour/<?php echo $tour1["matour"]?>">  
                            <img src="public/image/<?php echo $tour1["urlhinh"]?>">
                            <div class="tentour"><?php echo $tour1["ten"]?></div>
                            <div><span class="giakhuyenmai"><?php echo number_format($tour1["gia"],0,',','.')?></span><span class="gia "><?php echo $tour1["giatruockm"]?></span></div>
                            <div class="button">
                            <span><button class="chitiet">CHI TIẾT</button></span>
                            <span><button class="dattour">ĐẶT TOUR</button></span>
                            </div>
                            </a> 
                        </div> 
                    </div>         
                    <?php
                    }
                    ?>
                </div>    
                <div class="row">
                    <?php foreach($data["tour2"] as $tour1)
                    {?>
                    <div class="col-sm-3">
                        <div class="tours">
                            <a href="./dattour/chitiettour/<?php echo $tour1["matour"]?>">  
                            <img src="public/image/<?php echo $tour1["urlhinh"]?>">
                            <div class="tentour"><?php echo $tour1["ten"]?></div>
                            <div><span class="giakhuyenmai"><?php echo number_format($tour1["gia"],0,',','.')?></span><span class="gia   "><?php echo $tour1["giatruockm"]?></span></div>
                            <div class="button">
                            <span><button class="chitiet">CHI TIẾT</button></span>
                            <span><button class="dattour">ĐẶT TOUR</button></span>
                            </div>
                            </a> 
                        </div> 
                    </div>         
                    <?php
                    }
                    ?>
                </div> 
                <div class="row">
                    <?php foreach($data["tour3"] as $tour1)
                    {?>
                    <div class="col-sm-3">
                        <div class="tours">
                            <a href="./dattour/chitiettour/<?php echo $tour1["matour"]?>">  
                            <img src="public/image/<?php echo $tour1["urlhinh"]?>">
                            <div class="tentour"><?php echo $tour1["ten"]?></div>
                            <div><span class="giakhuyenmai"><?php echo number_format($tour1["gia"],0,',','.')?></span><span class="gia   "><?php echo $tour1["giatruockm"]?></span></div>
                            <div class="button">
                            <span><button class="chitiet">CHI TIẾT</button></span>
                            <span><button class="dattour">ĐẶT TOUR</button></span>
                            </div>
                            </a> 
                        </div> 
                    </div>         
                    <?php
                    }
                    ?>
                </div> 
                <div class="row">
                    <?php foreach($data["tour4"] as $tour1)
                    {?>
                    <div class="col-sm-3">
                        <div class="tours">
                            <a href="./dattour/chitiettour/<?php echo $tour1["matour"]?>">  
                            <img src="public/image/<?php echo $tour1["urlhinh"]?>">
                            <div class="tentour"><?php echo $tour1["ten"]?></div>
                            <div><span class="giakhuyenmai"><?php echo number_format($tour1["gia"],0,',','.')?></span><span class="gia   "><?php echo $tour1["giatruockm"]?></span></div>
                            <div class="button">
                            <span><button class="chitiet">CHI TIẾT</button></span>
                            <span><button class="dattour">ĐẶT TOUR</button></span>
                            </div>
                            </a> 
                        </div> 
                    </div>         
                    <?php
                    }
                    ?>
                </div> 
                <div class="phantrang">
                            <a href="./dattour/page/1" ><span>1</span></a>
                            <a href="./dattour/page/2" ><span>2</span></a>
                
                    </div>