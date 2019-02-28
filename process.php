<?php
function currency_format($number,$unit=''){
    return number_format($number).' '.$unit;
}

function currency_unformat($currency){
    return (int) str_replace(",", "", explode(" ",$currency)[0]);
}

$num_cart = $_POST['num_cart'];
$num_order = $_POST['num_order'];
$price = currency_unformat($_POST['price']);
$sub_total = currency_unformat($_POST['sub_total']);
$total = currency_unformat($_POST['total']);
$num_cart_old = $sub_total/$price;

$num_cart_new = $num_cart - $num_cart_old + $num_order;
$sub_total_new = $num_order*$price;
$total_new = $total - $sub_total +$sub_total_new;

$info=array(
    'num_order'=>$num_order,
    'sub_total_new'=> currency_format($sub_total_new,"đ"),
    'total_new'=>currency_format($total_new,"đ"),
    'num_cart_new'=>$num_cart_new
);

echo json_encode($info);


