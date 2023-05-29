<?php
    session_start();
    ini_set('display_errors', 'Off');
    require '../classes/DB.class.php';

    $flower_amount = $_REQUEST["flower_amount"];
    $flower_id = $_REQUEST["flower_id"];
    $colour_id = $_REQUEST["colour_id"];
    $flower_name = $_REQUEST["flower_name"];

    $db = new DB;
    $res = $db->dbGetColourName($colour_id);
    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
        $colour_name = $row["colour_name"];
    }

    if ($flower_amount != null) {

    echo '<form style="width:260px; float: left; padding: 10px;" method="$_GET" id="';
    echo $flower_id;
    echo '" colour_id="';
    echo $colour_id;
    echo '" flower_amount="';
    echo $flower_amount;
    echo '" action="../funcs/add_fav.php">
        <section class="u-clearfix u-grey-5 u-section-6" id="sec-216c">
        <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
            <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                    <img class="u-image u-image-default u-preserve-proportions u-image-1" src="../images/cc2a2cb0-db61-00e7-122b-c9fd9dfcd8b3.jpg" alt="" data-image-width="1117" data-image-height="1117">
                    <h6 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-1">';
                    echo $flower_name;
                    echo '</h6>
                                    <h6 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-1">';
                    echo $flower_amount;
                    echo ' шт.<br> ';
                    echo $colour_name;
                    echo '</h6>
                                    <input name="name" value="';
                    echo $row["flower_id"];
                    echo '" visibility: hidden>
                    <a id="del" onclick="delEl(this)" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">удалить</a>
                </div>
            </div>
            </div>
        </div>
        </div>
        </section>
        </form>';
    }
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script type="text/javascript">

    function delEl(Element) {
        var par = Element.closest('form');
        var parent = par.parentElement;
        parent.removeChild(par);
    }
</script>