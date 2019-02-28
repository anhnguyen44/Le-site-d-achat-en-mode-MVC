<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction() {
    $list_buy = get_list_pro_buy();
    $total = get_total_cart();
    $data['list_buy'] = $list_buy;
    $data['total'] = $total;
    load_view('index', $data);
}

function addAction() {
    $id = (int) $_GET['id'];
    $num_order_add = $_POST['qty_add'];
    add_cart($id, $num_order_add);
    redirect_to('cart');
}

function deleteAction() {
    $id = (int) $_GET['id'];
    delete_pro($id);
    redirect_to('cart');
}

function deleteAllAction() {
    delete_pro();
    redirect_to('cart');
}

function updateAction() {
    if (isset($_POST['btn_update'])) {
        if (isset($_SESSION['cart'])) {
            update_cart($_POST['qty']);
        }
        redirect_to('cart');
    }
    if (isset($_POST['btn_checkout'])) {
        if (isset($_SESSION['cart'])) {
            update_cart($_POST['qty']);
        }
        redirect_to('checkout');
    }
}

function checkoutAction(){
    $list_buy = get_list_pro_buy();
    $total = get_total_cart();
    $data['list_buy'] = $list_buy;
    $data['total'] = $total;
    load_view('checkout', $data);
}
