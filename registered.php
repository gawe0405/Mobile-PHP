<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registered</title>
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
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Menu -->
</head>

<body>
    <?php include 'header.php';?>
    <main>
        <!--================login_part Area =================-->
        <section class="login_part ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Đăng ký thành viên </h3>
                            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <label>Tài khoản: </label>
                                    <input type="text" class="form-control" id="username" name="username" value=""
                                        placeholder="Nhập tài khoản">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label>Mật khẩu: </label>
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Nhập mật khẩu">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label>Họ và tên: </label>
                                    <input type="text" class="form-control" id="fullname" name="fullname" value=""
                                        placeholder="Nhập đầy đủ họ và tên">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label>Địa chỉ: </label>
                                    <input type="text" class="form-control" id="address" name="address" value=""
                                        placeholder="Nhập địa chỉ">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label>Enail: </label>
                                    <input type="text" class="form-control" id="email" name="email" value=""
                                        placeholder="Nhập email">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label>Số điện thoại: </label>
                                    <input type="text" class="form-control" id="phone" name="phone" value=""
                                        placeholder="Nhập số điện thoại">
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3" name="btnRegistered">
                                        Đăng ký
                                    </button>
                                </div>
                            </form>
                            <?php

                                //       E:\CUSC\GIANGDAY\PHP-MySQL   \dbconnect.php
                                include_once(__DIR__ . '/dbconnect.php');
                                //Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
                                //   $MaKH = "";
                                //   $TenKH = "";
                                //   $DiachiKH = "";
                                //   $EmailKH = "";
                                // Xử lý nếu người dùng có bấm nút "btnLogin"
                                if(isset($_POST['btnRegistered'])) {
                                    // Lấy thông tin người dùng gởi đến Server
                                    $username = $_POST['username'];
                                    $password = $_POST['password'];
                                    $fullname = $_POST['fullname'];
                                    $address = $_POST['address'];
                                    $email = $_POST['email'];
                                    $phone = $_POST['phone'];
                                    $sql="insert into customer (username,password,fullname,address,email,phone)
                                    values ('$username','$password','$fullname','$address','$email','$phone')";
                                    $result=$conn->query($sql);
                                            if ($result=== TRUE) 
                                            {
                                                // // Sử dụng vòng lặp while để lặp kết quả
                                                // while($row = $result->fetch_assoc()) {
                                                //     echo "title: " . $row["MaKH"]. " - Content: " . $row["TenKH"]."<br>";
                                                // }
                                                $message = "Dang ky thanh cong";
                                                echo "<script type='text/javascript'>alert('$message');</script>";
                                            } 
                                            else {
                                                echo "Dang ky that bai!";
                                            }
                                }
                                //Đóng database
                                $conn->close();   
                            ?>
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