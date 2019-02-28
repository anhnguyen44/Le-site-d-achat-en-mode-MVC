<?php
get_header();
?>
<?php
global $error;
$error = array();

if (isset($_POST['btn_update'])) {

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

    //Validation gender  
    if (empty($_POST['gender'])) {
        $error['gender'] = "Không bỏ trống giới tính";
    } else {
        $gender = $_POST['gender'];
    }

    //Kết luận
    if (empty($error)) {
        $data = array(
            '`fullname`' => $fullname,
            '`gender`' => $gender
        );
        if (db_update('tbl_users', $data, "`user_id`={$id}")) {
            redirect_to("user/{$id}");
        }
        else{
            $error['update']="Chưa thay đổi thông tin";
        }
    }
}
?>
<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <style>
                label{display: block; margin-top: 20px; margin-bottom: 10px;}
                input[type='text'], input[type='password'], input{
                    display: block;
                    padding: 5px 10px;
                    border: 1px solid #d4d4d4;
                }
                #btn_update{
                    display: block;
                    margin-top: 20px;
                }
                .error_form{
                    color: red;
                    font-style: italic;
                }
                #info-update{
                    margin: 40px;
                }
                #info-update p{
                    color: red;
                    font-style: italic;
                    display: inline;
                }
            </style>
            <div id="info-update"><h1>Sửa thông tin</h1>
                <?php if(form_error('update')) echo form_error('update')."<p>. Quay trở lại <a href='user/".$id."'>Trang cá nhân</a><p>";?>
                <form action="" method="POST">
                    <label for="fullname">Họ và tên</label>
                    <input type="text" name="fullname" value="<?php echo $item['fullname']; ?>" id="fullname">
                    <?php echo form_error('fullname') ?>
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="" selected disabled hidden>Chọn giới tính</option>
                        <option value="male" <?php if ($item['gender'] == 'male') echo "selected='selected'" ?>>Nam</option>
                        <option value="female" <?php if ($item['gender'] == 'female') echo "selected='selected'" ?>>Nữ</option>
                    </select>
                    <?php echo form_error('gender') ?>
                    <input type="submit" name="btn_update" value="update" id="btn_update" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
