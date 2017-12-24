<?php
require_once(ABSPATH . '/code/db/db-helper.php');


function getUserFromSession(){

    if(!isset($_SESSION["USER_INFO"])){
        return null;
    }
    return $_SESSION["USER_INFO"];
}
function setUserToSession($user_info){   
    $_SESSION["USER_INFO"] = $user_info;
}

function isUserLoggedIn()
{
   return getUserFromSession()!=null;
}

function getFileTypeIcon($file_type){
    $returnValue="";
 
$file_type= strtolower($file_type);
switch ($file_type) {
    case "pdf":
    $returnValue='<a style="cursor: default;" href="javascript:void(0);" class="btn btn-social-icon btn-dropbox"><i class="fa fa-file-pdf-o"></i></a>';
    break;
    case "img":
    $returnValue='<a style="cursor: default;" href="javascript:void(0);" class="btn btn-social-icon btn-dropbox"><i class="fa fa-file-image-o"></i></a>';
    break;
    case "xls":
    $returnValue='<a style="cursor: default;" href="javascript:void(0);" class="btn btn-social-icon btn-dropbox"><i class="fa fa-file-excel-o"></i></a>';
    break;
    case "doc":
    $returnValue='<a style="cursor: default;" href="javascript:void(0);" class="btn btn-social-icon btn-dropbox"><i class="fa fa-file-word-o"></i></a>';
    break;
    case "ppt":
    $returnValue='<a style="cursor: default;" href="javascript:void(0);" class="btn btn-social-icon btn-dropbox"><i class="fa fa-file-powerpoint-o"></i></a>';
    break;
    case "mp3":
    $returnValue='<a style="cursor: default;" href="javascript:void(0);" class="btn btn-social-icon btn-dropbox"><i class="fa fa-file-audio-o"></i></a>';
    break;
    case "mp4":
    $returnValue='<a style="cursor: default;" href="javascript:void(0);" class="btn btn-social-icon btn-dropbox"><i class="fa fa-file-video-o"></i></a>';
    break;
    case "zip":
    $returnValue='<a style="cursor: default;" href="javascript:void(0);" class="btn btn-social-icon btn-dropbox"><i class="fa fa-file-archive-o"></i></a>';
    break;
    case "txt":
    $returnValue='<a style="cursor: default;" href="javascript:void(0);" class="btn btn-social-icon btn-dropbox"><i class="fa fa-file-text-o"></i></a>';
    break;
    $returnValue='<a style="cursor: default;" href="javascript:void(0);" class="btn btn-social-icon btn-dropbox"><i class="fa fa-file-o"></i></a>';
    break;

}
return  $returnValue;
}

function getFileTypeText($type){
    if(stripos($type, "pdf") !== FALSE ){
        $type="pdf";
    }
    else if(stripos($type, "image") !== FALSE ){
        $type="img";
    }
    else if(stripos($type, "xls") !== FALSE ){
        $type="xls";
    }
    else if(stripos($type, "doc") !== FALSE ){
        $type="doc";
    }
    else if(stripos($type, "arch") !== FALSE ){
        $type="zip";
    }
    else if(stripos($type, "text") !== FALSE ){
        $type="txt";
    }
    return $type;
}

?>