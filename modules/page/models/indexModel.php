<?php

global $list_page;
$list_page = db_fetch_array("SELECT * FROM `tbl_pages`");

//show_array($list_page); 

function get_page_by_id($id = "") {
    global $list_page;
    foreach ($list_page as $key => $page) {
        if ($page['page_id'] == $id) {
            return $page;
        }
    }
    return false;
}
