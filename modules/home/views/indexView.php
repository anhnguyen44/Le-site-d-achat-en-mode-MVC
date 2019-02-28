<?php get_header(); ?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <?php
            foreach ($list_all_pro as $cat_id=>$cat_value) {
                $list_pro = $cat_value['data'];
                ?>
                <div class="section list-cat">
                    <div class="section-head">
                        <!--<h3 class="section-title"><a href="?mod=product&act=main&cat_id=<?php //echo $cat_item['id'] ?>" style="color: #333;"><?php //echo $cat_item['cat_title']; ?></a></h3>-->
                        <h3 class="section-title"><a href="<?php echo $cat_value['url'];?>" style="color: #333;"><?php echo $cat_value['title']; ?></a></h3>

                    </div>
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                            <?php if (!empty($list_pro)) {
                                foreach ($list_pro as $pro_item) {
                                    ?>
                                    <li>
                                        <a href="<?php echo $pro_item['url']; ?>" title="" class="thumb">
                                            <img src="<?php echo $pro_item['product_thumb']; ?>" alt="">
                                        </a>
                                        <a href="<?php echo $pro_item['url'] ?>" title="" class="title"><?php echo $pro_item['product_title'] ?></a>
                                        <p class="price"><?php echo currency_format($pro_item['price'], 'đ'); ?></p>
                                    </li>
        <?php }
    } ?>
                        </ul>
                    </div>
                </div>
<?php } ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>