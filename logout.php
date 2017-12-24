<?php
require_once('config.php');
setUserToSession(null);
REDIRECT(ABS_URL().'/login.php');
?>