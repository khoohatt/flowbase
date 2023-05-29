<?php
    session_start();
    ini_set('display_errors', 'Off');
    require '../classes/DB.class.php';

    $colours = $_REQUEST["colours"];
    $longevities = $_REQUEST["longevities"];
    $name = $_REQUEST["name"];

    $db = new DB;
    $res = $db -> dbSelect($colours, $longevities, $name);

    $flag = false;
    while ($row = $res -> fetch(PDO::FETCH_ASSOC)) {
        $flag = true;
        echo '<form style="width:260px; float: left; padding: 10px;" method="$_GET" id="';
        echo $row["flower_id"];
        echo '" action="../funcs/choose_flowers_constructor.php">
        <section class="u-clearfix u-grey-5 u-section-6" id="sec-216c">
        <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
            <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                    <img class="u-image u-image-default u-preserve-proportions u-image-1" src="../images/cc2a2cb0-db61-00e7-122b-c9fd9dfcd8b3.jpg" alt="" data-image-width="1117" data-image-height="1117">
                    <h5 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-1">';
                    echo $row["flower_name"];
                    echo '</h5>
                                <input name="flower_id" value="';
                    echo $row["flower_id"];
                    echo '" visibility: hidden>
                                <input name="flower_name" value="';
                    echo $row["flower_name"];
                    echo '" visibility: hidden>
                                <select id="select" name="colour_id">';

                    $resCol = $db->dbGetFlowerCols($row["flower_id"]);
                    while ($rowCol = $resCol->fetch(PDO::FETCH_ASSOC)) {
                        echo '<option value="';
                        echo $rowCol["colour_id"];
                        echo '">';
                        echo $rowCol["colour_name"];
                        echo '</option>';
                    }

                    echo '</select><input type="text" placeholder="количество" id="numnum" name="flower_amount" class="u-input u-input-rectangle" required="">
                    <a id="submit2" onclick="addEl(this)" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">добавить</a>
                </div>
            </div>
            </div>
        </div>
        </div>
        </section>
        </form>';
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

    $(document).ready(function () {
    });

    function addEl(Element) {
        var formm = $(Element).parents('form');
        var formid = formm.attr('id');
        var $this = $(this);
        var $caption = Element;
        var form = formm; 
        var formData = $(form).serializeArray(); 
        var route = $(form).attr('action'); 

        console.log(formData);

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
</script>