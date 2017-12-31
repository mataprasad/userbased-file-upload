<?php
require_once(ABSPATH . '/code/app-biz.php');

$user_logged_in = isUserLoggedIn();

$requested_page = strtolower($_SERVER["REQUEST_URI"]);

if (stripos($requested_page, "login.php") !== FALSE && $user_logged_in==1) {
    REDIRECT(ABS_URL().'/index.php');
}

if($user_logged_in!=1 && (stripos($requested_page, "login.php") === FALSE && stripos($requested_page, "register.php") === FALSE ))
{
    REDIRECT(ABS_URL().'/login.php');
}
?>