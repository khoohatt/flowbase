<?php
    session_start();
    require '../classes/DB.class.php';

    $login = $_REQUEST["login"];
    $password = md5($_REQUEST["password"]);

    $db = new DB;
    $res = $db -> dbChangeLog($_SESSION['user_id'], $login, $password); 
?>