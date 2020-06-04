<?php
session_start();
?>
<?php
include_once( __DIR__ . '/dbconnect.php' );
if ( isset( $_SESSION['username'] ) ) {
    $username = $_SESSION['username'];
}

$sql = "SELECT * FROM customer WHERE username='$username'";
$rs = mysqli_query( $conn, $sql );

$row = mysqli_fetch_array( $rs );

?>
<!doctype html>
<html lang='zxx'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title>Edit Accountd</title>
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='manifest' href='site.webmanifest'>
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico'>

    <!-- CSS here -->
    <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='assets/css/owl.carousel.min.css'>
    <link rel='stylesheet' href='assets/css/flaticon.css'>
    <link rel='stylesheet' href='assets/css/slicknav.css'>
    <link rel='stylesheet' href='assets/css/animate.min.css'>
    <link rel='stylesheet' href='assets/css/magnific-popup.css'>
    <link rel='stylesheet' href='assets/css/fontawesome-all.min.css'>
    <link rel='stylesheet' href='assets/css/themify-icons.css'>
    <link rel='stylesheet' href='assets/css/slick.css'>
    <link rel='stylesheet' href='assets/css/nice-select.css'>
    <link rel='stylesheet' href='assets/css/style.css'> <!-- Menu -->

    <script>
    function updateDatabase() {
        var url;
        var username;
        var password;

        var fullname;
        var address;

        var email;
        var phone;

        // Lấy giá trị theo form
        username = document.getElementById('username_edit').value;
        password = document.getElementById('password_edit').value;
        fullname = document.getElementById('fullname_edit').value;
        address = document.getElementById('address_edit').value;
        email = document.getElementById('email_edit').value;
        phone = document.getElementById('phone_edit').value;
        url = 'update_user_xml.php?username=' + username + '&password=' + password +
            '&fullname=' + fullname + '&address=' + address + '&email=' + email +
            '&phone=' + phone;
        // console.log( url );
        //setupAjax ( url );
        if (window.XMLHttpRequest) {
            // Code for modern browsers
            request = new XMLHttpRequest();
        } else {
            // code for older versions of Internet Explorer
            request = new ActiveXObject('Microsoft.XMLHTTP');
        }
        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200) {
                // alert( request.responseText );
                document.getElementById('resultUpdate').innerHTML = request.responseText;
            }
        }
        request.open('GET', url, true);
        request.send();
    }
    /********Het ham update database ***************/
    </script>
</head>

<body>
    <?php include 'header.php';?>
    <main>
        <!- -================login_part Area=================-->
            <section class='login_part '>
                <div class='container'>
                    <div class='row align-items-center'>
                        <div class='login_part_form'>
                            <div class='login_part_form_iner'>
                                <h3>Chỉnh sửa thông tin: </h3>
                                <form class='row contact_form' action='delete_user.php' method='GET'
                                    novalidate='novalidate' name='edit_form' id='edit_form'>
                                    <div class='col-md-12 form-group p_star'>
                                        <label>Tài khoản: </label>
                                        <input type='text' class='form-control' id='username_edit' name='username'
                                            value="<?php echo $row ['username']; ?>">
                                    </div>
                                    <div class='col-md-12 form-group p_star'>
                                        <label>Mật khẩu: </label>
                                        <input type='password' class='form-control' id='password_edit' name='password'
                                            value="<?php echo $row ['password']; ?>" placeholder='Nhập mật khẩu'>
                                    </div>
                                    <div class='col-md-12 form-group p_star'>
                                        <label>Họ và tên: </label>
                                        <input type='text' class='form-control' id='fullname_edit' name='fullname'
                                            value="<?php echo $row ['fullname']; ?>"
                                            placeholder='Nhập đầy đủ họ và tên'>
                                    </div>
                                    <div class='col-md-12 form-group p_star'>
                                        <label>Địa chỉ: </label>
                                        <input type='text' class='form-control' id='address_edit' name='address'
                                            value="<?php echo $row ['address']; ?>" placeholder='Nhập địa chỉ'>
                                    </div>
                                    <div class='col-md-12 form-group p_star'>
                                        <label>Enail: </label>
                                        <input type='text' class='form-control' id='email_edit' name='email'
                                            value="<?php echo $row ['email']; ?>" placeholder='Nhập email'>
                                    </div>
                                    <div class='col-md-12 form-group p_star'>
                                        <label>Số điện thoại: </label>
                                        <input type='text' class='form-control' id='phone_edit' name='phone'
                                            value="<?php echo $row ['phone']; ?>" placeholder='Nhập số điện thoại'>
                                    </div>
                                    <div class='col-md-12 form-group'>
                                        <button type='button' class='btn_3' name='btnEdit' onclick='updateDatabase ()'>
                                            Cập nhật
                                        </button>
                                    </div>
                                    <div class='col-md-12 form-group'>
                                        <button type='submit' class='btn_3' name='btnDelete'>
                                            Xóa tài khoản!
                                        </button>
                                    </div>
                                    <div class='col-md-12 form-group'>
                                        <label id='resultUpdate' style='color: red'></label>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            </section>
            <!- -================login_part end=================-->
    </main>
    <?php include 'footer.php';?>
    <!--? Search model Begin -->
    <div class='search-model-box'>
        <div class='h-100 d-flex align-items-center justify-content-center'>
            <div class='search-close-btn'>+</div>
            <form class='search-model-form'>
                <input type='text' id='search-input' placeholder='Searching key.....'>
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- JS here -->

    <script src='./assets/js/vendor/modernizr-3.5.0.min.js'></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src='./assets/js/vendor/jquery-1.12.4.min.js'></script>
    <script src='./assets/js/popper.min.js'></script>
    <script src='./assets/js/bootstrap.min.js'></script>
    <!-- Jquery Mobile Menu -->
    <script src='./assets/js/jquery.slicknav.min.js'></script>

    <!-- Jquery Slick, Owl-Carousel Plugins -->
    <script src='./assets/js/owl.carousel.min.js'></script>
    <script src='./assets/js/slick.min.js'></script>

    <!-- One Page, Animated-HeadLin -->
    <script src='./assets/js/wow.min.js'></script>
    <script src='./assets/js/animated.headline.js'></script>

    <!-- Scroll up, nice-select, sticky -->
    <script src='./assets/js/jquery.scrollUp.min.js'></script>
    <script src='./assets/js/jquery.nice-select.min.js'></script>
    <script src='./assets/js/jquery.sticky.js'></script>
    <script src='./assets/js/jquery.magnific-popup.js'></script>

    <!-- contact js -->
    <script src='./assets/js/contact.js'></script>
    <script src='./assets/js/jquery.form.js'></script>
    <script src='./assets/js/jquery.validate.min.js'></script>
    <script src='./assets/js/mail-script.js'></script>
    <script src='./assets/js/jquery.ajaxchimp.min.js'></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src='./assets/js/plugins.js'></script>
    <script src='./assets/js/main.js'></script>

</body>

</html>