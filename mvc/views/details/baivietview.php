                    <div class="col-sm-9">    
                        <div class="tinmoinhat">
                            <div class="row">
                            
                                <h5>Bài viết mới nhất</h5>
                                <div class="col-sm-8">
                                    <img class ="tinmoinhat__anh" src="./public/image/<?php echo $data['baivietmoinhat']['urlhinh'] ?>">
                                </div>
                                <div class="col-sm-4">
                                    <div class="tieude"><a href='./baiviet/blog/<?php echo $data['baivietmoinhat']['tieudekhongdau']?>'><?php echo $data['baivietmoinhat']['tieude'] ?></a></div>
                                    <div class="tomtat"><?php echo $data['baivietmoinhat']['tomtat'] ?></div>                                     
                                    </div>
                            </div>  
                            <div class="row">
                            <?php foreach($data["baivietmoi"] as $baivietmoi) 
                        {echo '<div class="col-sm-4">
                                    <div class="news">
                                        <div class="tieude"><a href="./baiviet/blog/'.$baivietmoi['tieudekhongdau'].'">'.$baivietmoi["tieude"].'</a></div>
                                        <div class="tomtat">'.$baivietmoi["tomtat"].'</div>
                                    </div>
                                 </div>';
                            }   
                                ?>                          
                            </div>   
                        </div> 
                        <div class="content">                        
                            <h5> <a href="./khampha">Khám phá</a></h5>
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class ="anh" src="./public/image/hanoi.jpg">
                                </div>
                            <?php 
                            foreach($data["baivietkhamphamoi"] as $baivietkhamphamoi)
                            {
                            echo '<div class="col-sm-4">
                                    <div class="tieude"><a href="./baiviet/blog/'.$baivietkhamphamoi['tieudekhongdau'].'">'.$baivietkhamphamoi['tieude'].'</a></div>
                                    <div class="tomtat">'.$baivietkhamphamoi['tomtat'].'</div>
                                </div>';
                            }
                                ?>
                            </div>
                        </div>

                        <div class="content">                        
                            <h5> <a href="./disan">Di sản</a></h5>
                            <div class="row">                            
                                <div class="col-sm-4">
                                    <img class ="anh" src="./public/image/ditichmyson.jpg">
                                </div>
                                <?php 
                            foreach($data["baivietdisanmoi"] as $baivietdisanmoi)
                            {
                            echo '<div class="col-sm-4">
                                    <div class="tieude"><a href="./baiviet/blog/'.$baivietdisanmoi['tieudekhongdau'].'">'.$baivietdisanmoi['tieude'].'</a></div>
                                    <div class="tomtat">'.$baivietdisanmoi['tomtat'].'</div>
                                </div>';
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                