<?php
$error_message = "";
$success_message = "";
if (IS_POST()) {

if($_FILES['upload']){

$name = $_FILES['upload']['name'];
$size = $_FILES['upload']['size'];
$type = getFileTypeText($_FILES['upload']['type']);
$ext = pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION);

$db_name = GET_GUID().".".$ext;
$file_name_db = ABSPATH . '/content/uploads/'.$db_name;
$description = $_POST["description"];
$user = getUserFromSession(); 
//$data = db_getUploadsByUserId($user->id);
echo $size;
if($size>0){
    move_uploaded_file($_FILES['upload']['tmp_name'], $file_name_db);
$id = db_insertUploadDetails($name,$description,$size,$user->id,$type,$db_name);
if($id > 0){
    $success_message="Uploaded successfully."; 
}
}else{
    $error_message="Not a valid file.";
}

}
}
?>