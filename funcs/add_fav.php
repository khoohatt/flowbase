<?php
    session_start();
    require '../classes/DB.class.php';

    $flower_id = $_REQUEST["flower_id"];
    $colour_id = $_REQUEST["colour"];

    $db = new DB;
    $res = $db -> dbSaveFav($_SESSION['user_id'], $flower_id, $colour_id); 
?>