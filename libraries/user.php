<?php

function get_gender_vi($gender) {
    $list_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ'
    );
    if (!empty($gender)) {
        if (array_key_exists($gender, $list_gender)) {
            return $list_gender[$gender];
        }
    }
}
