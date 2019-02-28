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
            $cat_title= utf8convert($cat['cat_title']);
            $cat['url'] = "cat/{$id}/{$cat_title}-1.html";
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
            $item_title = utf8convert($item['product_title']);
            $item['url'] = "product/{$item['product_id']}/{$item_title}.html";
            $list_pro[] = $item;
        }
    }
    return $list_pro;
}

function get_all_product() {
    $list_pro = array();
    global $list_product_cat;
    foreach ($list_product_cat as $key => $cat_item) {
        $list_pro[$cat_item['cat_id']]['data'] = list_products_by_catId($cat_item['cat_id']);
        $list_pro[$cat_item['cat_id']]['url'] = get_cat_by_id($cat_item['cat_id'])['url'];
        $list_pro[$cat_item['cat_id']]['title'] = $cat_item['cat_title'];
    }
    return $list_pro;
}
