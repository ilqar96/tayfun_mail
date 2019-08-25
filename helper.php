<?php


/**
 * @param null $url
 * @return string
 */
function site_url($url=null){
    return 'http://localhost/mail/'.$url;
}

/**
 * @param $name
 * @return string
 */
function post($name){
    if (isset($_POST[$name]))
        return htmlspecialchars(trim($_POST[$name]));
}

/**
 * @param $name
 * @return mixed
 */
function session($name){
    if(isset($_SESSION[$name]))
        return $_SESSION[$name];
}

function questions($id=null){
    $questions = [
        'What is your first car name',
        'What is your first dog name',
        'What is your best friend name',
        'What is your best pc name',
    ];

    return isset($id)? $questions[$id]:$questions;
}