<?php
global $page;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

//function get_start_index($num_per_page){
//    global $page;
//    $start = ($page - 1) * $num_per_page;
//    return $start;
//}

function get_rows_by_page($table,$num_per_page,$where=""){
    global $page;
    $start = ($page-1)*$num_per_page;
    if(!empty($where)){
        $where = "WHERE ".$where;
    }
    $sql = "SELECT * FROM {$table} {$where} LIMIT {$start},{$num_per_page}";    
    return db_fetch_array($sql);
}

function get_pagging($qty_item,$num_per_page, $basic_url = '') {
    global $page;
    $num_page = ceil($qty_item/$num_per_page);
    $string_pagging = "<ul id='list-pagenavi'>";
    if ($page > 1) {
        $prev_page = $page - 1;
        $string_pagging .= "<a href='{$basic_url}-{$prev_page}.html' class='pre-page'><i class='fa fa-angle-left'></i></a>";
    }
    for ($i = 1; $i <= $num_page; $i++) {
        $active='';
        if($page==$i){
            $active = "class='active'";
        }
        $string_pagging .= "<li {$active}><a href='{$basic_url}-{$i}.html'>{$i}</a></li>";
    }
    if ($page < $num_page) {
        $next_page = $page + 1;
        $string_pagging .= "<a href='{$basic_url}-{$next_page}.html' class='next-page'><i class='fa fa-angle-right'></i></a>";
    }
    $string_pagging .= "</ul>";
    return $string_pagging;
}