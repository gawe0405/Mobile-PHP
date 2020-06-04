<?php
session_start();
?>

<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include 'header.php';?>
    <main>
        <!--================login_part Area =================-->
        <section class="login_part ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>Lần đầu ghé thăm chúng tôi?</h2>
                                <p>Hãy là thành viên để nhận được nhiều khuyến mãi hấp dẫn!!!</p>
                                <a href="registered.php" class="btn_3">Tạo tài khoản ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Chào mừng bạn trở lại! <br>
                                    Xin hãy đăng nhập để tiếp tục!</h3>
                                <?php
                                            // Kiểm tra xem Người dùng có sử dụng Ghi nhớ Đăng nhập không?
                                            if(isset($_COOKIE['is_logged'])) {
                                                // Lấy thông tin từ COOKIE từ Web Browser của client gởi đến
                                                $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';

                                                // echo "Xin chào $username! Bạn đã đăng nhập rồi.";
                                                die;
                                            }
                                        ?>
                                <form class="row contact_form" action="" method="post"
                                    novalidate="novalidate">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="username" name="username" value=""
                                            placeholder="Nhập tài khoản">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password"
                                            value="" placeholder="Nhập mật khẩu">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account d-flex align-items-center">
                                            <input type="checkbox" id="remember_me" name="remember_me">
                                            <label for="f-option">Ghi nhớ đăng nhập</label>

                                        </div>


                                        <button type="submit" value="submit" class="btn_3" name="btnLogin">
                                            Đăng nhập
                                        </button>

                                        <a class="lost_pass" href="#">Quên mật khẩu?</a>
                                    </div>
                                </form>
                                <?php
  
                                //       E:\CUSC\GIANGDAY\PHP-MySQL   \dbconnect.php
                                
                                include_once(__DIR__ . '/dbconnect.php');
                                // Xử lý nếu người dùng có bấm nút "btnLogin"
                                if(isset($_POST['btnLogin'])) {
                                    // Lấy thông tin người dùng gởi đến Server
                                    $username = $_POST['username'];
                                    $password = $_POST['password'];
                                    $remember_me = isset($_POST['remember_me']) ? 1 : 0;
                                    if($remember_me == 1) {
                                        // Thiết lập Cookie "Ghi nhớ đăng nhập"
                                        setcookie('is_logged', true, time()+ 3600, '/');
                                        // Thiết lập Cookie "Tên username đã đăng nhập"
                                        setcookie("username_logged", $username, time()+3600, "/","", 0);
                                    }
                                    $sql = "SELECT * FROM customer WHERE username='$username'AND password='$password'";                                    
                                    $result=$conn->query($sql);
                                        if ($result->num_rows > 0) 
                                        {
                                            $message = "Dang nhap thanh cong";
                                            $_SESSION['username'] = $username;
                                            echo "<script type='text/javascript'>alert('$message');</script>";
                                            
                                        } 
                                        else {
                                            echo "Dang nhap that bai!";
                                        }
                                }
                                //Đóng database
                                $conn->close();   
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--================login_part end =================-->

        </div>
    </main>
    <?php include 'footer.php';?>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>

    <!-- Scroll up, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>