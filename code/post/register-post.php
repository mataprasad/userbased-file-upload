<?php
$error_message = "";
$success_message = "";
if (IS_POST()) {
    
  
  $full_name = $_POST["full_name"];
  $email = $_POST["email"];
  $pwd = $_POST["password"];
  $pwd2 = $_POST["repassword"];

  $user_by_email = db_getUserByEmail($email);

  if($user_by_email){
    $error_message ="User already exists with this email id.";
  }else if($pwd != $pwd2){
    $error_message ="Password and retypr password did not matched.";
  }else{
    $id = db_insertNewUser($email,$full_name,$pwd2);
    if($id > 0){
      $success_message="Your registration was successfully.Now you can login"; 
    }else{
      $error_message="Unable to process your request.Please try after some time";
    }
  }
}
?>