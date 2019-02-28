<?php

function is_username($username){
    $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
    if(preg_match($pattern, $username)){
        return true;
    }
    return false;
}

function is_password($password){
    $pattern = "/^([A-Z]{1})([\w\.~!@#$%^&*()+]){5,31}$/";
    if(preg_match($pattern, $password)){
        return true;
    }
    return false;
}

function is_fullname($fullname) {
    $pattern = "/^[A-Za-z\s]{6,32}$/";
    if (preg_match($pattern, $fullname, $matches)) {
        return true;
    }
    return false;
}

function is_tel($tel){
    $pattern = "/^(09|08|01[2|8|6])+([0-9]{8})$/";
    if(preg_match($pattern, $tel, $matches)){
        return true;
    }
    return false;
}

function is_email($email){
    $pattern = "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/";
    if(preg_match($pattern, $email, $matches)){
        return true;
    }
    return false;
}

function set_value($label_field){
    global $$label_field;
    if(!empty($$label_field)){
        return $$label_field;
    }
}

function form_error($label_field){
    global $error;
    if(!empty($error[$label_field])){
        return "<p style='color: #f36363;font-size: 13px;text-align: left;margin-left: 10px;'>{$error[$label_field]}</p>";
    }
}

function get_error_by_field($field){
    global $erreur;
    if(isset($erreur[$field])){
        echo "<p style='color: #f36363;font-size: 13px;text-align: left;margin-left: 10px;'>{$erreur[$field]}</p>";
    }
}


?>

