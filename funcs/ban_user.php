<?php
    session_start();
    require '../classes/DB.class.php';

    $user_id = $_REQUEST["user_id"];
    echo $user_id;

    $db = new DB;
    $res = $db -> dbBanUser($user_id); 
?>