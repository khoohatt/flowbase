<?php
    session_start();
    require '../classes/DB.class.php';

    $db = new DB;
    $res = $db -> dbGetUserBoq($_SESSION['user_id']);

    $flag = false;
    while ($row = $res -> fetch(PDO::FETCH_ASSOC)) {
        $flag = true;
        echo '<section class="u-section-6" id="sec-216c">
            <form style=" width:260px; float: left; padding: 10px;" method="$_GET" id="';
        echo $row["bouquet_id"];
        echo '">
        <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
            <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                    <img class="u-image u-image-default u-preserve-proportions u-image-1" src="../images/cc2a2cb0-db61-00e7-122b-c9fd9dfcd8b3.jpg" alt="" data-image-width="1117" data-image-height="1117">
                    <h6 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-1">';
                    echo $row["bouquet_name"];
                    echo '</h6>
                                <a href="constructor.php?boq_id=';
                    echo $row["bouquet_id"];
                    echo '" id="show" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">посмотреть</a>
                    <a id="del" onclick="delBoq(this)" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">удалить</a>
                </div>
            </div>
            </div>
        </div>
        </div><input name="bouquet_id" value="';
        echo $row["bouquet_id"];
        echo '" visibility: hidden>
        </form> </section>';
    }
    if ($flag == false) {
        echo '<h5 class="u-text u-text-default u-text-1">Ничего не нашлось...</h5>';
    }
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script type="text/javascript">

    function delBoq(Element) {
        var par = Element.closest('form');
        var parent = par.parentElement;
        parent.removeChild(par);

        var formm = $(Element).parents('form');
        var formid = formm.attr('id');

        var $this = $(this);
        var $caption = Element;
        var form = formm; 
        var formData = $(form).serializeArray(); 
        var route = "../funcs/del_boq.php"; 

        $.ajax({
            type: "POST", 
            url: route,
            data: formData,
            beforeSend: function () {
                $this.attr('disabled', true);
            },
            success: function (response) {
                $("#yes2").append(response);
            },
            complete: function () {
                $this.attr('disabled', false).html($caption);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
            }
        });
    }

    function showBoq(Element) {
        var formm = $(Element).parents('form');
        var formid = formm.attr('id');
        var $this = $(this);
        var $caption = Element;
        var form = formm; 
        var formData = $(form).serializeArray(); 
        var route = "../funcs/construct_boq.php"; 

        $.ajax({
            type: "POST", 
            url: route, 
            data: formData, 
            beforeSend: function () {
                $this.attr('disabled', true);
            },
            success: function (response) {
                $("#yes2").append(response);
            },
            complete: function () {
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
            }
        });
    }
</script>