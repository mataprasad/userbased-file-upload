<?php

function db_getUserByEmail($email)
{
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $sql = "SELECT * FROM tbl_users WHERE email = %s;";
    $query = $db->prepare($sql,$email);
    $result = $db->get_row($query);

    if (APP_DEBUG) {
        $db->dumpvar($result);
    }

    return $result;
}

function db_getUserByEmailAndPwd($email,$pwd)
{
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $sql = "SELECT * FROM tbl_users WHERE email = %s AND password = %s ;";
    $query = $db->prepare($sql,$email, $pwd);
    $result = $db->get_row($query);

    if (APP_DEBUG) {
        $db->dumpvar($result);
    }

    return $result;
}

function db_getUploadsByUserId($user_id)
{
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $sql = "SELECT * FROM tbl_uploads WHERE created_by = %s ;";
    $query = $db->prepare($sql,$user_id);
    $result = $db->get_results($query);

    if (APP_DEBUG) {
        $db->dumpvar($result);
    }

    return $result;
}

function db_insertUploadDetails($name,$description,$size,$user_id,$type,$db_name)
{
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $sql = "INSERT INTO tbl_uploads (file_name, description,size,creation_date,created_by,file_type,db_file_name) VALUES (%s, %s, %s, CURRENT_DATE(), %s, %s, %s);";
    $query = $db->prepare($sql,$name,$description,$size,$user_id,$type,$db_name);
    $db->query($query);
    $result = $db->insert_id;

    if (APP_DEBUG) {
        $db->dumpvar($result);
    }

    return $result;
}

function db_insertNewUser($email,$name,$pwd)
{
    $db = new ezSQL_mysqli(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    $sql = "INSERT INTO tbl_users (email, name,password) VALUES (%s, %s, %s);";
    $query = $db->prepare($sql,$email,$name,$pwd);
    $db->query($query);
    $result = $db->insert_id;

    if (APP_DEBUG) {
        $db->dumpvar($result);
    }

    return $result;
}
?>