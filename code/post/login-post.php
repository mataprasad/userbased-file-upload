<?php
$error_message = "";
if (IS_POST()) {
    
    $db_user = db_getUserByEmailAndPwd($_POST["email"],$_POST["password"]);

    if( $db_user){
    setUserToSession($db_user);
    REDIRECT(ABS_URL().'/index.php');
    }else{
        $error_message = "Invalid credentails.";
    }
}
?>