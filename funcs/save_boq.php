<?php
    session_start();
    require '../classes/DB.class.php';

    $map = array();
    $boq_name;

    // $myhashmap['айди цветка'] = [['цвет', 'количество такого цвета'], ['цвет', 'количество такого цвета']];
    foreach ($_REQUEST as $key => $value) {
        if ($key == 'boq_name') {
            $boq_name = $value;
        } else {
            $myArray = explode(',', $value);
            $map[$key] = $myArray;
        }
    }

    $db = new DB;
    $db -> dbSaveBoq($map, $_SESSION['user_id'], $boq_name);
?>