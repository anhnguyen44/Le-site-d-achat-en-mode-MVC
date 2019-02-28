<?php

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `tbl_users`");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id` = {$id}");
    return $item;
}

function delete_user($id) {
    if (!empty($id)) {
        db_delete('tbl_users', "`user_id`={$id}");
        redirect_to('?mod=connection&act=logout');
    }
}

function logout() {
    setcookie('is_login', false, time() - 3600, '/');
    setcookie('fullname', NULL, time() - 3600, '/');
    setcookie('username', NULL, time() - 3600, '/');

    unset($_SESSION['is_login']);
    unset($_SESSION['fullname']);
    unset($_SESSION['username']);
    
    redirect_to('trang-chu.html');
}
