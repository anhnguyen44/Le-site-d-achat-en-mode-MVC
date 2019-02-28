<?php get_header(); ?>
<?php
global $error;
global $fullname;
global $username;
global $password;
global $mail;
global $gender;
$error = array();

if (isset($_POST['btn_reg'])) {

    //Validation fullname
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Không bỏ trống họ và tên";
    } else {
        if (!(strlen($_POST['fullname']) >= 6 && strlen($_POST['fullname']) <= 32)) {
            $error['fullname'] = "Họ và tên từ 6 kí tự đến 32 kí tự";
        } else {
            if (!is_fullname($_POST['fullname'])) {
                $error['fullname'] = "Họ và tên phải là A-Z hoặc a-z";
            } else {
                $fullname = $_POST['fullname'];
            }
        }
    }

    //Validation username
    if (empty($_POST['username'])) {
        $error['username'] = "Không bỏ trống tên đăng nhập";
    } else {
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $error['username'] = "Tên đăng nhập từ 6 kí tự đến 32 kí tự";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Tên đăng nhập không có kí tự đặc biệt";
            } else {
                $the_same=0;
                foreach ($list_users as $user){
                    if($_POST['username']==$user['username']){
                        $the_same = 1;
                    }
                }
                if($the_same ==1){
                    $error['username']="Tên đăng nhập đã tồn tại";
                }
                else{
                    $username = $_POST['username'];
                }
            }
        }
    }


    //Validation password
    if (empty($_POST['password'])) {
        $error['password'] = "Không bỏ trống Mật khẩu";
    } else {
        if (!(strlen($_POST['password']) >= 6 && strlen($_POST['password']) <= 32)) {
            $error['password'] = "Mật khẩutừ 6 kí tự đến 32 kí tự";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Mật khẩu phải có ký tự đầu in hoa";
            } else {
                $password = $_POST['password'];
//                echo $password;
            }
        }
    }
    
    //Validation password-again
    if (empty($_POST['password-again'])) {
        $error['password'] = "Không bỏ trống Mật khẩu";
    } else {
        if (!(strlen($_POST['password']) >= 6 && strlen($_POST['password']) <= 32)) {
            $error['password'] = "Mật khẩutừ 6 kí tự đến 32 kí tự";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Mật khẩu phải có ký tự đầu in hoa";
            } else {
                if($_POST['password']!=$_POST['password-again']){
                    $error['password-again']="Không khớp mật khẩu";
                }else{
                    $password_again=$_POST['password-again'];
                }
            }
        }
    }

    //Validation email   
    if (empty($_POST['mail'])) {
        $error['mail'] = "Không bỏ trống email";
    } else {
        if (!(strlen($_POST['mail']) >= 5)) {
            $error['mail'] = "Email ít nhất có 5 kí tự";
        } else {
            if (!is_email($_POST['mail'])) {
                $error['mail'] = "Không đúng chuẩn email";
            } else {
                $mail = $_POST['mail'];
            }
        }
    }

    //Validation gender  
    if (empty($_POST['gender'])) {
        $error['gender'] = "Không bỏ trống giới tính";
    } else {
        $gender = $_POST['gender'];
    }
    
//    echo $mail;
    //Kết luận
    if (empty($error)) {
        $info = array(
            '`fullname`' => $fullname,
            '`username`' => $username,
            '`password`' => MD5($password),
            '`email`' => $mail,
            '`gender`' => $gender
        );
        if (db_insert('tbl_users', $info)) {
            redirect_to('login');
        }
    }
}
?>

<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div id="register-form">
                <h1>Đăng kí</h1>
                <form action="" method="POST">
                    <label for="fullname-reg">Họ và tên</label>
                    <input type="text" name="fullname" value="<?php echo set_value('fullname'); ?>" id="fullname-reg">
                    <?php echo form_error('fullname'); ?>
                    <label for="username-reg">Tên đăng nhập</label>
                    <input type="text" name="username" value="<?php echo set_value('username'); ?>" id="username-reg">
                    <?php echo form_error('username'); ?>
                    <label for="password-reg">Mật khẩu</label>
                    <input type="password" name="password" value="<?php echo set_value('password'); ?>" id="password-reg">
                    <?php echo form_error('password'); ?>
                    <label for="password-again-reg">Nhập lại mật khẩu</label>
                    <input type="password" name="password-again" value="<?php echo set_value('password_again'); ?>" id="password-again-reg">
                    <?php echo form_error('password-again'); ?>
                    <label for="mail-reg">Email</label>
                    <input type="mail" name="mail" value="<?php echo set_value('mail'); ?>" id="mail-reg">
                    <?php echo form_error('mail') ?>
                    <label for="gender-reg">Gender</label>
                    <select id="gender-reg" name="gender">
                        <option value="">Chọn giới tính</option>
                        <option value="male" <?php global $gender; if($gender=="male") echo "selected='selected'";?>>Nam</option>
                        <option value="female" <?php global $gender; if($gender=="female") echo "selected='selected'";?>>Nữ</option>
                    </select>
                    <?php echo form_error('gender') ?>
                    <input type="submit" name="btn_reg" value="Register" id="btn_reg">
                </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>