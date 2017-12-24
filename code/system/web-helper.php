<?php

function REDIRECT($url) {
    header("Location: " . $url);
    exit();
}

function ABS_URL() {
    $pageURL = 'http';

    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"]; 
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"]; 
    }
    return $pageURL . APP_NAME;
}

function HREF($param) {
    echo ABS_URL() . $param;
}

function ToFullUrl($param) {
    return ABS_URL() . $param;
}

function IS_POST() {
    if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
        return TRUE;
    }
    return FALSE;
}

function IS_AJAX() {
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        return TRUE;
    }
    return FALSE;
}

function GET_GUID() {
    if (function_exists('com_create_guid')) {
        $uuid = com_create_guid();
    } else {
        mt_srand((double) microtime() * 10000); //optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45); // "-"
        $uuid = chr(123)// "{"
                . substr($charid, 0, 8) . $hyphen
                . substr($charid, 8, 4) . $hyphen
                . substr($charid, 12, 4) . $hyphen
                . substr($charid, 16, 4) . $hyphen
                . substr($charid, 20, 12)
                . chr(125); // "}"
        $uuid = str_replace("{", "", $uuid);
        $uuid = str_replace("}", "", $uuid);
    }
    return strtolower($uuid);
}

?>