<?php get_header(); ?>
<div id="main-content-wp" class="checkout-page ">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="checkout-wp">
                <div class="section-head">
                    <h3 class="section-title">Thanh toán</h3>
                </div>
                <?php if (!empty($list_buy)) { ?>
                <div class="section-detail">
                    <div class="wrap clearfix">
                        <form method="POST" action="?mod=cart&act=valide-cart">
                            <div id="custom-info-wp" class="fl-left">
                                <h3 class="title">Thông tin khách hàng</h3>
                                <div class="detail">
                                    <div class="field-wp">
                                        <label>Họ tên</label>
                                        <input type="text" name="fullname" id="fullname" required="Không bỏ trống">
                                    </div>
                                    <div class="field-wp">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="Không bỏ trống">
                                    </div>
                                    <div class="field-wp">
                                        <label>Địa chỉ nhận hàng</label>
                                        <input type="text" name="address" id="address" required="Không bỏ trống">
                                    </div>
                                    <div class="field-wp">
                                        <label>Số điện thoại</label>
                                        <input type="tel" name="tel" id="tel" pattern="^[0-9]{10}$" maxlength="10" required="Không bỏ trống">
                                    </div>
                                    <div class="field-full-wp">
                                        <label>Ghi chú</label>
                                        <textarea name="note"></textarea>
                                    </div>

                                </div>
                            </div>
                            
                                <div id="order-review-wp" class="fl-right">
                                    <h3 class="title">Thông tin đơn hàng</h3>
                                    <div class="detail">
                                        <table class="shop-table">
                                            <thead>
                                                <tr>
                                                    <td>Sản phẩm(1)</td>
                                                    <td>Tổng</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($list_buy as $item) { ?>
                                                    <tr class="cart-item">
                                                        <td class="product-name"><?php echo $item['pro_title'];?><strong class="product-quantity">x <?php echo $item['qty'];?></strong></td>
                                                        <td class="product-total"><?php echo currency_format($item['sub_total'],"đ");?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr class="order-total">
                                                    <td>Tổng đơn hàng:</td>
                                                    <td><strong class="total-price"><?php echo currency_format($total,"đ");?></strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div id="payment-checkout-wp">
                                            <ul id="payment_methods">
                                                <li>
                                                    <input type="radio" checked="checked" id="direct-payment" name="payment" value="online">
                                                    <label for="direct-payment">Thanh toán online</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="payment-home" name="payment" value="cod">
                                                    <label for="payment-home">Thanh toán tại nhà</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="place-order-wp clearfix">
                                            <button type="submit" name="checkout">Đặt hàng</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                <?php } else{?>
                <p>Check out thành công. Quay về <a href="?">trang chủ</a></p>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>