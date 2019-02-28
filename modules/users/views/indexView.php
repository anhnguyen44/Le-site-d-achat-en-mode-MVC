<?php get_header(); ?>
<div id="main-content-wp" class="detail-news-page">
    <style>
        #info-user{
            margin: 40px;
        }
        #info-user h1{
            font-size: 30px;
            padding-bottom: 40px;
            font-weight: bold;
        }
        #info-user p{
            padding-bottom: 10px;
        }
        #info-user strong{
            padding-right: 10px;
        }
        #info-user a{
            margin-right: 20px;
        }
    </style>
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div id="info-user">
                <h1>Thông tin khách hàng</h1>
                <p><strong>Tên đăng nhập:</strong> <?php echo $user['username']; ?></p>
                <p><strong>Họ và tên:</strong> <?php echo $user['fullname']; ?></p>
                <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
                <p><strong>Giới tính:</strong> <?php echo get_gender_vi($user['gender']); ?></p>
                <a href="user/edit/<?php echo $user['user_id'];?>" class="btn btn-success">Sửa thông tin</a>
                <a href="?mod=users&action=delete&id=<?php echo $user['user_id'];?>" class="btn btn-danger">Xóa tài khoản</a>
            </div>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>