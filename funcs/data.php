<?php
    session_start();
    require '../des/classes/DB.class.php';

    $colours = $_POST["colours"];
    $longevities = $_POST["longevities"];

    $db = new DB;
    $res = $db -> dbSelect($colours, $longevities);

    while ($row = $res -> fetch(PDO::FETCH_ASSOC)) {
        echo '<button onclick="location.href=\'https://localhost/cure/des/welcome.php\'" <?php if($_SERVER[\'REQUEST_URI\'] == \'/blog.html\'){echo \'class="currentPage"\'; }?>
        <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-2">
        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2"><span class="u-align-center u-file-icon u-icon u-text-palette-1-base u-icon-2"><img src="images/1606186-7fd1d7ec.png" alt=""></span>
        <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-4">';
        echo $row["flower_name"];
        echo '</h5>
        </div>
        </div>
        </button>';
    }
?>