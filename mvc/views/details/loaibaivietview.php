                       
                    <div class="col-sm-8">
                        <div class="tinmoinhat-chitietloai">
                            <div class="row">
                                <h3><?php echo $data["tentheloai"]?></h3>          
                                <div class="menu-loaibaiviet">
                            <?php
                                foreach($data["loaibaiviet"] as $loaibaiviet)
                                {
                           echo '<span><a href="./'.$data["tentheloaiviettat"].'/'.$loaibaiviet["TenKhongDau"].'">'.$loaibaiviet["Ten"].'</a></span>';
                                        
                                }
                            ?>
                                </div>
                            </div>
                                      
                        </div>
                        <?php
                        foreach($data['baiviet'] as $baiviet)         
                   echo '<div class="content-chitietloai">
                            
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="tieude"><a href="./baiviet/blog/'.$baiviet['tieudekhongdau'].'">'.$baiviet["tieude"].'</a></div>
                                    <div class="tomtat">'.$baiviet['tomtat'].'</div>
                                </div>
                                <div class="col-sm-4">
                                    <img class ="anh" src="./public/image/'.$baiviet['urlhinh'].'">
                                </div>
                            </div>
                        </div>'
                        ?>
                    </div>