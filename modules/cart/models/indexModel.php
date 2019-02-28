
<?php
global $list_product;
$list_product = db_fetch_array("SELECT * FROM `tbl_products`");

function get_pro_by_id($id = '') {
    global $list_product;
    foreach ($list_product as $product) {
        if ($id == $product['product_id']) {
            $title = utf8convert($product['product_title']);
            $product['url_add_cart'] = "?mod=cart&action=add&id={$id}";
            $product['url'] = "product/{$id}/{$title}.html";
            return $product;
        }
    }
    return false;
}

function add_cart($id = '', $num_add) {
    if (isset($id)) {
        $item = get_pro_by_id($id);
        $qty = $num_add;
        if (isset($_SESSION['cart']['buy']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
            $qty = $_SESSION['cart']['buy'][$id]['qty'] + $qty;
        }
        $_SESSION['cart']['buy'][$id] = array(
            'id' => $item['product_id'],
            'url' => $item['url'],
            'pro_title' => $item['product_title'],
            'pro_thumb' => $item['product_thumb'],
            'code' => $item['code'],
            'price' => $item['price'],
            'qty' => $qty,
            'sub_total' => $qty * $item['price']
        );
//Update cart
        update_info_cart();
    }
    return false;
}

function update_info_cart() {
    $num_order = 0;
    $total = 0;
    if (isset($_SESSION['cart']['buy'])) {
        foreach ($_SESSION['cart']['buy'] as $item) {
            $num_order += $item['qty'];
            $total += $item['sub_total'];
        }
    }

    if (isset($_SESSION['cart'])) {
        $_SESSION['cart']['info'] = array(
            'num_order' => $num_order,
            'total' => $total
        );
    }
}

function get_list_pro_buy() {
    if (isset($_SESSION['cart']['buy'])) {
        foreach ($_SESSION['cart']['buy'] as &$item) {//Thêm cái dấu & trước $item để nó tham trị trực tiếp lun tức là nó kết nối với biến session giống cái bữa mình làm hoài ở phần add cart mà không chạy đó hoặc làm cách ở dưới được commentaire
            $item['url_delete_cart'] = "?mod=cart&action=delete&id={$item['id']}";
            //Hoặc làm cách như sau không cần thêm dấu & trước $item
//            $item['url_delete_cart']="?mod=cart&act=delete&id={$item['id']}";
//            $_SESSION['cart']['buy'][$item['id']]=$item;
        }
        return $_SESSION['cart']['buy'];
    } else
        return false;
}

function get_total_cart() {
    if (isset($_SESSION['cart']['info'])) {
        return $_SESSION['cart']['info']['total'];
    }
    return 0;
}

function delete_pro($id) {
    if (isset($_SESSION['cart'])) {
        if (!empty($id)) {
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        } else {
            unset($_SESSION['cart']);
        }
    }
}

function update_cart($qty_array) {
    if (!empty($qty_array)) {
        foreach ($qty_array as $key => $value) {
            $_SESSION['cart']['buy'][$key]['qty'] = $value;
            $_SESSION['cart']['buy'][$key]['sub_total'] = $value * $_SESSION['cart']['buy'][$key]['price'];
        }
        update_info_cart();
    }
}


