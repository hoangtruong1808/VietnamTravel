                <div class="row">
                    <form class="searchtour"  method="POST" action="./dattour/search">
                        <span>
                            <select name="chondiemxuatphat" class="searchbox">
                                <option>Điểm xuất phát</option>
                                <?php 
                                    foreach ($data["diemxuatphat"] as $diemxuatphat)
                                    {
                                ?>
                                <option value="<?php echo $diemxuatphat[0]?>"><?php echo $diemxuatphat[0]?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </span>
                        <span>
                            <select name="chondiemden" class="searchbox">
                                <option>Điểm đến</option>
                                <?php 
                                    foreach ($data["diemden"] as $diemden)
                                    {
                                ?>
                                <option value="<?php echo $diemden[0]?>"><?php echo $diemden[0]?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </span>
                        <span>
                            <select name="chongia" class="searchbox">
                                <option value="0-1000000000000">Tìm Giá</option>
                                <option value="3000000-5000000">3.000.000 - 5.000.000</option>
                                <option value="5000000-7000000">5.000.000 - 7.000.000</option>
                                <option value="7000000-10000000">7.000.000 - 10.000.000</option>
                                <option value="10000000-12000000">10.000.000 - 12.000.000</option>
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