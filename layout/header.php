<!DOCTYPE html>
<html>
    <head>
        <title>Unitop Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo base_url(); ?>"/>
        <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>

<!--<script src="public/js/jquery-3.3.1.min.js" type="text/javascript"></script>-->
        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="public/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp" class="clearfix">
                    <div class="wp-inner clearfix">
                        <a href="trang-chu.html" title="" id="logo" class="fl-left">UNITOP STORE</a>
                        <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        <div id="cart-wp" class="fl-right">
                            <a href="cart" title="" id="btn-cart">
                                <span id="icon"><img src="public/images/icon-cart.png" alt=""></span>
                                <span id="num"><?php echo get_num_order_cart(); ?></span>
                            </a>

                            <?php if (isset($_SESSION['is_login']) || isset($_COOKIE['is_login'])) { ?>
                                <div id="user_logout">
                                    <p>Hello <a style="font-weight: bold;"href="user/<?php echo get_userid_by_username(); ?>"><?php
                                                    echo get_fullname_user();
                                                    ?></a> (<a href="?mod=users&action=logout">Đăng xuất</a>)</p>
                                </div>
                            <?php } else { ?>
                                <div id="user_login">
                                    <p><a href="login">Đăng nhập</a></p>
                                    <p><a href="register">Đăng kí</a></p>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>