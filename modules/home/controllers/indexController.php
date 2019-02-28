<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction() {
    $list_all_pro = get_all_product();
    $data_send['list_all_pro']=$list_all_pro;
//    show_array($_SESSION);
    load_view('index', $data_send);
    
}


