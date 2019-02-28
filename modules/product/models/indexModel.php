<?php

//Collect the informations from des table on the database
global $list_product_cat;
global $list_product;

$list_product_cat = db_fetch_array("SELECT * FROM `tbl_cats`");
$list_product = db_fetch_array("SELECT * FROM `tbl_products`");

//For body
function get_cat_by_id($id = '') {
    global $list_product_cat;
    foreach ($list_product_cat as $cat) {
        if ($id == $cat['cat_id']) {
            $cat['url'] = "?mod=product&action=index&id={$id}";
            return $cat;
        }
    }
    return false;
}

function list_products_by_catId($id = '') {
    $list_pro = array();
    global $list_product;
    foreach ($list_product as $item) {
        if ($item['cat_id'] == $id) {
            $item['url'] = "?mod=product&action=detail&id={$item['product_id']}";
            $list_pro[] = $item;
        }
    }
    return $list_pro;
}

function get_pro_by_id($id = '') {
    global $list_product;
    foreach ($list_product as $product) {
        if ($id == $product['product_id']) {
            $product_title = utf8convert($product['product_title']);
            $product['url_add_cart'] = "?mod=cart&action=add&id={$id}";
            $product['url'] = "product/{$id}/{$product_title}.html";
            return $product;
        }
    }
    return false;
}

function get_url_item_of_listProduct($list_products){
    if(!empty($list_products)){
        foreach ($list_products as &$product){//Sự khác biệt thêm thằng & trước $product là do thằng $list_products là tham số hàm nên mình tham chiếu tới bằng &
            $product_title = utf8convert($product['product_title']);
            $product['url']=  "product/{$product['product_id']}/{$product_title}.html";
        }
        return $list_products;
    }
    return false;
}