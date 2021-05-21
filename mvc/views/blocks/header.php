<header>
        <section class="top-bar">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                            <ul class="top-bar__social-list">
                                <li>
                                    <a href="https://www.facebook.com/hoangtruong1808/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UC5cbBBXL06XbvF-F2OIuv8g">
                                    <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </li>
                                <li>    
                                    <a href="https://zalo.me/0704804311">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/hoangtruong_18/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                
                            </ul>                      
                    </div>
                    <div class="col-auto">
                        <div class="top-bar__user">
                            <?php if (!isset($_SESSION["id"]))
                            {?>
                            <a href="./dangki">Đăng ký</a>
                            <span>/</span>
                            <a href="./dangnhap">Đăng nhập    </a>
                            <?php 
                            }
                            else 
                            {
                            ?>  
                            <a href="./dangnhap/dangxuat">Đăng xuất </a>
                            <?php 
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <nav class="top-menu">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="top-menu__logo">
                            <a href="./vietnamtravel/trangchu">
                                <img src="./public/image/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">  
                        <ul class="top-menu__menu">
                                <li class="top-menu__menu--list">
                                    <a href="./trangchu">
                                        TRANG CHỦ
                                    </a>
                                </li>
                                <li class="top-menu__menu--list">
                                    <a href="./baiviet">
                                        BÀI VIẾT
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="./khampha">KHÁM PHÁ</a></li>
                                        <li><a href="./disan">DI SẢN </a></li>
                    
	                                    </ul>
	                                </li>
                                
                                <li class="top-menu__menu--list">
                                    <a href="./dattour">
                                        ĐẶT TOUR
                                    </a>
                                </li>
                                <li class="top-menu__menu--list">
                                    <a href="./khachsan">
                                        ĐẶT KHÁCH SẠN
                                    </a>
                                </li>
                                <?php if(isset($_SESSION["id"]))
                                { ?>
                                <li class="top-menu__menu--list">
                                    <a href="./taikhoan">
                                        TÀI KHOẢN
                                    </a>
                                </li>
                                <?php
                                }
                                ?>
                            </ul>
                    </div>    
                    <div class="col-auto">  
                    </div>  
                </div>
            </div>
        </nav>
        <section class="banner">
            <div class="container-fluid">
                <a href="./trangchu">
                    <img src="./public/image/banner.jpg">
                </a>
            </div>
        </section>            
    </header>