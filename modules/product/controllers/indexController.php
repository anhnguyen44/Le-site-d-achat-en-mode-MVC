<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction() {
    $id = (int) $_GET['id'];
    $num_per_page = 2;
    $qty_pro = count(list_products_by_catId($id));
    $list_products = get_rows_by_page('`tbl_products`', $num_per_page, "`cat_id`={$id}");
    $data['list_products'] = get_url_item_of_listProduct($list_products);

    $cat_item = get_cat_by_id($id);
    $data['cat_item'] = $cat_item;
    $cat_title = utf8convert(($cat_item['cat_title']));

    $pagging = get_pagging($qty_pro, $num_per_page, "cat/{$id}/{$cat_title}");
    $data['pagging'] = $pagging;

    $data['qty_pro'] = $qty_pro;

    load_view('index', $data);
}

function detailAction() {
    $id = (int) $_GET['id'];
    $pro_item = get_pro_by_id($id);
    $data['pro_item'] = $pro_item;
    load_view('detail', $data);
}
