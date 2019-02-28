<?php

/**
 * Ici on contruit des fonctions qui affiche le nombre de cart et le fullname connectant la page d'info d'un utilisateur
 */
function get_num_order_cart() {
    if (isset($_SESSION['cart']['info']['num_order'])) {
        return $_SESSION['cart']['info']['num_order'];
    }
    return 0;
}

function get_userid_by_username() {
    $username = isset($_COOKIE['is_login']) ? $_COOKIE['username'] : (isset($_SESSION['username']) ? $_SESSION['username'] : "");
    if (!empty($username)) {
        $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username`='{$username}'");
        return $item['user_id'];
    } else
        return false;
}

function get_fullname_user() {
    $fullname = isset($_COOKIE['is_login']) ? $_COOKIE['fullname'] : (isset($_SESSION['fullname']) ? $_SESSION['fullname'] : "");
    if (!empty($fullname))
        return $fullname;
}
