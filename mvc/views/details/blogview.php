                    <div class="col-sm-8">          
                        <div class="baiviet">
                            <h1 class="baiviet__tieude"><?php echo $data["baiviet"]["tieude"]?></h1>
                            <div class="baiviet__thongtin">
                                <span><b>Ngày đăng:</b> 16-03-2021</span>
                                <span><b>Bởi:</b> Nguyễn Hoàng Trường</span>
                                <span><b>Lượt xem:</b><?php echo $data["baiviet"]["LuotXem"]?></span>
                                
                            </div>
                            <div class="baiviet__noidung">
                                <div class="baiviet-tomtat">
                                    <?php echo $data["baiviet"]["tomtat"]?>
                                </div>
                                <?php echo $data["baiviet"]["content"]?>
                
                            </div>
                            <div class="baiviet__lienquan">
                                <h3>BÀI VIÊT CÙNG THỂ LOẠI</h3>
                                <ul>
                                <?php foreach ($data["baivietcungtheloai"] as $baivietcungtheloai)
                                    {
                                        echo '<li><a href="./baiviet/blog/'.$baivietcungtheloai['tieudekhongdau'].'">'.$baivietcungtheloai["tieude"].'</a></li>';
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                        
                    </div>