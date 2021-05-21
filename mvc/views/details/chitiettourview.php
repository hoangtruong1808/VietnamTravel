
                    <div class="col-sm-9">
                        <div class="chitiettour1">                         
                            <p><b>ĐIỂM XUẤT PHÁT:</b> <?php echo $data["chitiettour"]["diemxuatphat"] ?> </p>
                            <p><b>ĐIỂM ĐẾN:</b> <?php echo $data["chitiettour"]["diemden"] ?> </p>
                        </div>
                        <div class="chitiettour2">
                            <table>
                                <tr>
                                    <th>TÊN TOUR</th>
                                    <th>KHỞI HÀNH</th>
                                    <th>THỜI GIAN</th>
                                    <th>MÃ TOUR</th>
                                    <th>GIÁ</th>                                    
                                    <th></th>
                                </tr>
                                <tr>
                                    <td><?php echo $data["chitiettour"]["ten"] ?></td>
                                    <td><?php echo $data["chitiettour"]["ngaykhoihanh"]?></td>
                                    <td><?php echo $data["chitiettour"]["thoigian"]?></td>
                                    <td><?php echo $data["chitiettour"]["matour"]?></td>
                                    <td><?php echo number_format($data["chitiettour"]["gia"],0,',','.')?></td>
                                    <?php if(isset($_SESSION["id"]))
                                    { ?>
                                    <td><a href="./dattour/dattour/<?php echo $data["chitiettour"]["ID"] ?>"><button>ĐẶT TOUR</button></a></td>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            </table>
                        </div>
                        <div class="chitiettour3">
                            <h2>Chương trình tour</h2>
                            <img src="./public/image/<?php echo $data["chitiettour"]["urlhinh"]?>">
                            <?php echo $data["chitiettour"]["chitiet"] ?>
                        </div>
                        <div class="tourlienquan">
                            <h2>Tour liên quan</h2>
                            <div class="row">
                                <?php foreach ($data["batourlienquan"] as $tourlienquan)
                                { 
                                ?>
                                <div class="col-sm-4">
                                    <div class="tourlienquan__menu">
                                        <a href="./dattour/chitiettour/<?php echo $tourlienquan["matour"]?>"><img src="./public/image/<?php echo $tourlienquan["urlhinh"]?>"></a>
                                        <div class="ten"><a href="./dattour/chitiettour/<?php echo $tourlienquan["matour"]?>"> <?php echo $tourlienquan["ten"]?> </a></div>
                                        <div class="gia"> <?php echo number_format($tourlienquan["gia"],0,',','.')?></div>
                                    </div>
                                </div>
                                <?php 
                                }
                                ?>
                            </div>
                            
                        </div>
                        
                    </div>