
    <?php
    // Xử lý nếu người dùng có bấm nút "btnLogin"
    if(isset($_POST['btnLogin'])) {
        // Lấy thông tin người dùng gởi đến Server
        $username = $_POST['username'];
        $password = $_POST['password'];
        $remember_me = isset($_POST['remember_me']) ? 1 : 0;

        // Nếu người dùng có chọn "Ghi nhớ Đăng nhập"
        // => tiến hành lưu thông tin vào COOKIE và gởi lại người dùng
        if($remember_me == 1) {
            // Thiết lập Cookie "Ghi nhớ đăng nhập"
            setcookie('is_logged', true, time()+ 3600, '/');

            // Thiết lập Cookie "Tên username đã đăng nhập"
            setcookie("username_logged", $username, time()+3600, "/","", 0);
        }

        // Hiển thị thông tin chào mừng
        echo "<h2>Xin chào $username!</h2>";
    }
    ?>