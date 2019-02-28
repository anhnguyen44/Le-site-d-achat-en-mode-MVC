<?php get_header();?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar();?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $cat_item['cat_title'];?></h3>
                    <p class="section-desc">Có <?php echo $qty_pro;?> sản phẩm trong mục này</p>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if(!empty($list_products)){?>
                        <?php foreach ($list_products as $item){?>
                        <li>
                            <a href="<?php echo $item['url']?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thumb'];?>" alt="">
                            </a>
                            <a href="<?php echo $item['url']?>" title="" class="title"><?php echo $item['product_title'];?></a>
                            <p class="price"><?php echo currency_format($item['price'],'đ');?></p>
                        </li>
                        <?php }}?>
                    </ul>
                </div>
            </div>
            <div class="section" id="pagenavi-wp">
                <div class="section-detail">
                    <?php echo $pagging;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>