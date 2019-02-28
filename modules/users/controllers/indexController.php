<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction() {
    $id = (int) $_GET['id'];
    $user = db_fetch_row("SELECT * FROM tbl_users WHERE `user_id`={$id}");
    $data['user']=$user;
    load_view('index', $data);
}

function addAction() {
    $list_users = db_fetch_array("SELECT * FROM `tbl_users` WHERE 1");
    $data['list_users']=$list_users;
    load_view('add',$data);
}

function editAction() {
    $id = (int) $_GET['id'];
    $item = get_user_by_id($id);
    $data_send['item']=$item;
    $data_send['id']=$id;
    load_view('edit', $data_send);
}

function deleteAction(){
    $id = (int)$_GET['id'];
    delete_user($id);
    logout();
}

function loginAction() {
    load_view('login');
}

function logoutAction() {
    logout();
}
