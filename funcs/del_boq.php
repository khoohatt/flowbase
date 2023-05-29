<?php
    session_start();
    require '../classes/DB.class.php';

    $boq_id = $_REQUEST["bouquet_id"];
    echo $boq_id;

    $db = new DB;
    $res = $db -> dbDelBoq($_SESSION['user_id'], $boq_id); 
?>