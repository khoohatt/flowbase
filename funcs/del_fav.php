<?php
    session_start();
    require '../classes/DB.class.php';

    $flower_id = $_REQUEST["flower_id"];
    $colour_id = $_REQUEST["colour_id"];

    echo $flower_id;
    echo $colour_id;

    $db = new DB;
    $res = $db -> dbDelFav($_SESSION['user_id'], $flower_id, $colour_id); 
?>