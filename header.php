
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a style="font-weight: bold; font-size: 2em" href="index.php">Trang chủ</a></li>
                                    <li><a style="font-weight: bold; font-size: 2em" href="#">Sản phẩm</a></li>
                                    <li><a style="font-weight: bold; font-size: 2em" href="#">Về chúng tôi</a></li>
                                    <li><a style="font-weight: bold; font-size: 2em" href="contact.php">Liên hệ</a></li>
                                    <?php                                   
                                        if(isset( $_SESSION['username'] )){
                                                    echo '<li><a style="font-weight: bold; font-size: 2em" href="edit-account.php">Đổi thông tin</a></li>';
                                        }
                                        else{
                                            echo "";
                                            }
                                    ?>

                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>
                                <li> <a href="login.php"><span class="flaticon-user"></span></a></li>
                                <li>
                                    <p id="xinchao">
                                        <!-- // Kiểm tra biến $_SESSION['username'] -->
                                        <?php                                   
                                        if(isset( $_SESSION['username'] )){
                                                    echo 'Xin chào: '.$_SESSION['username'];
                                        }
                                        else{
                                            echo "Bạn chưa đăng nhập";
                                            }
                                    ?>
                                    </p>
                                </li>
                                <li><a href="#"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    