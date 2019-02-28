<!--Nhớ là khi làm cách thêm pattern và title vào trong input để validation form thì chuỗi cho pattern bỏ đi hai dấu // và thêm một
từ khóa required để bắt buộc người điền phải điền vào form không bỏ trống-->
<base href="<?php echo base_url();      ?>"/>
<?php


if (isset($_POST['btn_login'])) {
    global $error;
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "Không bỏ trống tên đăng nhập";
    } else {
        if (!is_username($_POST['username'])) {
            $error['username'] = "Ten dang nhap co chu cai chu so dau _ va dau cham tu 6-32 ki tu";
        } else {
            $username = escape_string($_POST['username']);
        }
    }

    if (empty($_POST['password'])) {
        $error['password'] = "Không bỏ trống mật khẩu";
    } else {
        if (!is_password($_POST['password'])) {
            $error['password'] = "Mat khau phai co kí tự đầu tiên in hoa tu 6-32 ki tu";
        } else {
            $password = escape_string($_POST['password']);
        }
    }

    if (empty($error)) {
        $user = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username`='{$username}' and `password`= md5('{$password}')");
        if(isset($user)){
            if (isset($_POST['remember_me'])) {
                setcookie('is_login', true, time() + 3600, '/');
                setcookie('fullname', $user['fullname'], time() + 3600, '/');
                setcookie('username', $user['username'], time() + 3600, '/');
            }
            $_SESSION['is_login'] = true;
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['username'] = $user['username'];
//            show_array($_SESSION);
            header("location: trang-chu.html");
        } else {
            $error['incorrect'] = "Tên đăng nhập hoặc mật khẩu chưa đúng";
        }
    }
}
?>


<html>
    <head>
        <title>Login</title>
        <link href="public/css/import/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="page_login">
        <div id="wp_login_form">
            <h1 id="title_form_login">Đăng nhập</h1>
            <form action="" method="POST">
                <input id="username" type="text" name="username" value="" placeholder="username">
                <?php echo form_error('username'); ?>
                <input id="password" type="password" name="password" value="" placeholder="password">
                <div id="option" class="clearfix">
                    <?php echo form_error('password'); ?>
                    <?php echo form_error('incorrect'); ?>
                    <div class="remember_me">
                        <input id="remember_me" type="checkbox" name="remember_me" value="remember">
                        <label for="remember_me" class="remember_me">Remember me</label>
                    </div>
                    <a id="lost_pass" href="">Forget password?</a>
                </div>
                <input id="btn_login" type="submit" name="btn_login" value="Đăng nhập">
                <a class="register" href="register">Đăng kí</a>
            </form>
            <a href="trang-chu.html" id="comeback">> Quay lại trang chủ</a>
        </div>
    </body>
</html>


