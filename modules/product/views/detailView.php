<?php get_header(); ?>
<div id="main-content-wp" class="detail-product-page clearfix">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="info-product-wp">
                <div class="section-detail clearfix">
                    <div class="thumb fl-left">
                        <img src="<?php echo $pro_item['product_thumb'] ?>" alt="">
                    </div>
                    <div class="detail fl-right">
                        <h3 class="title"><?php echo $pro_item['product_title'] ?></h3>
                        <p class="price"><?php echo currency_format($pro_item['price'], 'đ'); ?></p>
                        <p class="product-code">Mã sản phẩm: <span><?php echo $pro_item['code'] ?></span></p>
                        <div class="desc-short">
                            <h5>Mô tả sản phẩm:</h5>
                            <p><?php echo $pro_item['product_desc'] ?></p>
                        </div>
                        <div class="num-order-wp">
                            <span>Số lượng:</span>
                            <form action="<?php echo $pro_item['url_add_cart']; ?>" method="POST">
                                <input type="number" min="1" max="10 "id="num-order" name="qty_add" value="1">
                                <input type="submit" name="btn_add_cart" value="Thêm giỏ hàng" class="add-to-cart">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="section" id="desc-wp">
                <div class="section-head">
                    <h3 class="section-title">Chi tiết sản phẩm</h3>
                </div>
                <div class="section-detail">
                    <?php echo $pro_item['product_content'] ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

