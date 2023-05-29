<?php
    session_start();
    require '../classes/DB.class.php';

    $db = new DB;
    $element = $_REQUEST['colour'];
    $res = $db -> dbGetColourSymbols($element);

    while ($row = $res -> fetch(PDO::FETCH_ASSOC)) {
        echo '<section class="u-align-left u-clearfix u-palette-5-light-1 u-section-2" id="carousel_b2ed">
            <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-align-left u-container-style u-layout-cell u-size-35-lg u-size-35-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                        <h2 class="u-align-left u-text u-text-1">';
                        echo $row['colour_name'];
                        echo '</h2>
                                        <h6 class="u-align-left u-text u-text-default u-text-2">';
                        echo $row['colour_meaning'];
                        echo '</h6>
                        <p class="u-align-left u-text u-text-3" style="line-height: 35px;">'; echo $row['colour_text']; echo '</p>
                    </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-size-25-lg u-size-25-xl u-size-60-md u-size-60-sm u-size-60-xs u-white u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                        <ul class="u-custom-list u-file-icon u-text u-text-default u-text-4">';
                    $points = $db -> dbGetColourPoints($element);
                    while ($point = $points -> fetch(PDO::FETCH_ASSOC)) {
                        echo '<li style="padding-left: 8px;">
                                        <div class="u-list-icon u-text-black">
                                        <img src="../images/1055183.png" alt="">
                                        </div>';
                        echo $point['colour_point'];
                        echo '<br>
                                    </li>';
                    }

                    echo '</ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>';
    }
?>