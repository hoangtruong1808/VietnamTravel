                        <div class="timkiem"> 
                            <div><p>TÌM KIẾM</p></div>
                            <form name="timkiem" method="POST" action="./baiviet/timkiem">
                                
                                <input id="form" type="form" placeholder="Nhập từ khóa.." name="tukhoa">
                                <input id="submit" type="submit" value="TÌM KIẾM">
                            </form>
                        </div>
                        <div class="tuvan"> 
                            <div><p>TƯ VẤN DU LỊCH</p></div>
                            <div>MR.HOÀNG TRƯỜNG</div>
                            <div><i class="fas fa-phone-square-alt"></i> 0704804311</div>
                            <div><i class="fas fa-envelope"></i> hoangtruong1808@gmail.com</div>
                            <div><i class="fab fa-facebook-square"></i><a href="https://www.facebook.com/hoangtruong1808/"> Nguyễn Hoàng Trường</a></div>
                        </div>  
                        <div class="docnhieunhat"> 
                            <div class="docnhieunhat__tieude">ĐỌC NHIỀU NHẤT</div>
                            <?php
                                foreach ($data["baivietdocnhieunhat"] as $baiviet)
                                {
                            ?>
                                <div> <a href=""><?php echo $baiviet["tieude"] ?> </a></div>
                            <?php
                                }
                            ?>
                            
                        </div>
                        <div class="khachsan1">
                            <div class="khachsan1__tieude">KHÁCH SẠN</div>
                            <ul>
                                <?php foreach($data["bonkhachsanmoi"] as $hotel)
                                {?>
                                <li>
                                    <a href="">
                                        <img src="./public/image/<?php echo $hotel["urlhinh"]?>">
                                        <?php echo $hotel["ten"]?>
                                    </a>
                                </li>
                                <?php 
                                }?>
                            </ul>
                        </div>