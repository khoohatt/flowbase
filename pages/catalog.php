<?php
    session_start();
    require '../classes/DB.class.php';
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​​Флориография&nbsp;–язык цветов">
    <meta name="description" content="">
    <title>Каталог</title>
    <link rel="icon" href="../images/logo2.png">
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/Контакты.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.8.2, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Site1",
        "logo": "../images/logo2.png"
    }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Контакты">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="ru">
    <header class="u-clearfix u-header u-header" id="sec-f58a">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="main.php" class="u-image u-logo u-image-1" data-image-width="808" data-image-height="720">
                <img src="../images/logo2.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-hamburger u-offcanvas u-menu-1" data-responsive-from="XL">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                        href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="main.php">Главная</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="catalog.php">Каталог</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="constructor.php">Конструктор</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                <?php
                                if (!isset($_SESSION['user_id'])) {
                                    echo 'onclick="location.href=\'https://localhost/flowbase/pages/login.php\'"';
                                } else {
                                    echo 'onclick="location.href=\'https://localhost/flowbase/pages/profile.php\'"';
                                }
                                ?>>Кабинет</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="symbols.php">Символика</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" <?php
                                if (!isset($_SESSION['user_id'])) {
                                    echo 'href="login.php">Авторизация';
                                } else {
                                    echo 'href="logout.php">Выход';
                                }
                                ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section
        class="u-clearfix u-container-align-left-md u-container-align-left-sm u-container-align-left-xs u-palette-5-light-1 u-section-3"
        id="carousel_28ca">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-container-style u-group u-group-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                    <h2 class="u-text u-text-1"> Каталог цветов</h2>
                    <p class="u-align-left u-text u-text-default u-text-2"> Здесь вы можете ознакомиться с перечнем всех
                        цветов, доступных для добавления в ваши букеты.</p>
                </div>
            </div>
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <button onclick="location.href='https://localhost/flowbase/pages/symbols.php'">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2"><span
                                class="u-align-center u-icon u-text-palette-2-base u-icon-1"><svg class="u-svg-link"
                                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5934"></use>
                                </svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-5934"
                                    style="enable-background:new 0 0 60 60;">
                                    <g>
                                        <path d="M57.49,27H54v-6.268C54,19.226,52.774,18,51.268,18H50V0H10v2H7v2H4v7H2.732C1.226,11,0,12.226,0,13.732v43.687l0.006,0
        c-0.005,0.563,0.17,1.114,0.522,1.575C1.018,59.634,1.76,60,2.565,60h44.759c1.157,0,2.175-0.78,2.449-1.813L60,30.149v-0.177
        C60,28.25,58.944,27,57.49,27z M51.268,20C51.672,20,52,20.328,52,20.732V27h-2v-7H51.268z M48,2v16v9H12.731
        c-0.233,0-0.457,0.039-0.674,0.098c-0.018,0.005-0.039,0.003-0.057,0.008V2H48z M10,4v25.585l-0.063,0.173L9,32.326V4H10z M6,6h1
        v31.81l-1,2.741V11V6z M2,13.732C2,13.328,2.329,13,2.732,13H4v32.943l-2,5.455V13.732z M47.868,57.584
        C47.803,57.829,47.579,58,47.324,58H2.565c-0.243,0-0.385-0.139-0.448-0.222c-0.063-0.082-0.16-0.256-0.123-0.408L4,51.87v0.001
        l3-8.225l0,0l3-8.225v0.003l1.932-5.301L12,29.938l0,0l0.16-0.439l0.026-0.082C12.252,29.172,12.477,29,12.731,29H48h2h4h3.49
        c0.379,0,0.477,0.546,0.501,0.819L47.868,57.584z"></path>
                                        <path
                                            d="M18,17h24c0.552,0,1-0.447,1-1s-0.448-1-1-1H18c-0.552,0-1,0.447-1,1S17.448,17,18,17z">
                                        </path>
                                        <path
                                            d="M18,10h10c0.552,0,1-0.447,1-1s-0.448-1-1-1H18c-0.552,0-1,0.447-1,1S17.448,10,18,10z">
                                        </path>
                                        <path
                                            d="M18,24h24c0.552,0,1-0.447,1-1s-0.448-1-1-1H18c-0.552,0-1,0.447-1,1S17.448,24,18,24z">
                                        </path>
                                    </g>
                                </svg></span>
                            <h5 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-3">символика
                            </h5>
                        </div>
                    </button>
                    <button onclick="location.href='https://localhost/flowbase/pages/constructor.php'">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3"><span
                                class="u-align-center u-file-icon u-icon u-text-palette-2-base u-icon-2"><img
                                    src="../images/7806995-3873ba41.png" alt=""></span>
                            <h5 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-4">
                                конструктор</h5>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section
        class="u-clearfix u-container-align-left-md u-container-align-left-sm u-container-align-left-xs u-palette-5-light-1 u-section-4"
        id="carousel_98e7">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-form u-palette-5-light-2 u-form-1">
                <form method="$_GET" id="form" action="../funcs/find_flowers_catalog.php"
                    class="u-clearfix u-form-horizontal u-form-spacing-15 u-inner-form" style="padding: 15px;"
                    source="email">
                    <div
                        class="u-form-checkbox-group u-form-group u-form-input-layout-horizontal u-label-top u-form-group-1">
                        <label class="u-label u-label-1">Цвет</label>
                        <div class="u-form-checkbox-group-wrapper">
                            <div class="u-input-row">
                                <input id="field-2860" type="checkbox" name="colours[]" value="1"
                                    class="u-active-palette-2-base u-field-input u-grey-25" data-calc="1">
                                <label class="u-field-label" for="field-2860">красный</label>
                            </div>
                            <div class="u-input-row">
                                <input id="field-f8c6" type="checkbox" name="colours[]" value="2"
                                    class="u-active-palette-2-base u-field-input u-grey-25" data-calc="2">
                                <label class="u-field-label" for="field-f8c6">розовый</label>
                            </div>
                            <div class="u-input-row">
                                <input id="field-8f6b" type="checkbox" name="colours[]" value="3"
                                    class="u-active-palette-2-base u-field-input u-grey-25" data-calc="3">
                                <label class="u-field-label" for="field-8f6b">синий</label>
                            </div>
                            <div class="u-input-row">
                                <input id="field-5133" type="checkbox" name="colours[]" value="4"
                                    class="u-active-palette-2-base u-field-input u-grey-25" data-calc="4">
                                <label class="u-field-label" for="field-5133">голубой</label>
                            </div>
                            <div class="u-input-row">
                                <input id="field-6bde" type="checkbox" name="colours[]" value="5"
                                    class="u-active-palette-2-base u-field-input u-grey-25" data-calc="5">
                                <label class="u-field-label" for="field-6bde">желтый</label>
                            </div>
                            <div class="u-input-row">
                                <input id="field-8ffc" type="checkbox" name="colours[]" value="6"
                                    class="u-active-palette-2-base u-field-input u-grey-25" data-calc="6">
                                <label class="u-field-label" for="field-8ffc">рыжий</label>
                            </div>
                            <div class="u-input-row">
                                <input id="field-ad19" type="checkbox" name="colours[]" value="7"
                                    class="u-active-palette-2-base u-field-input u-grey-25" data-calc="7">
                                <label class="u-field-label" for="field-ad19">фиолетовый</label>
                            </div>
                            <div class="u-input-row">
                                <input id="field-dcf3" type="checkbox" name="colours[]" value="8"
                                    class="u-active-palette-2-base u-field-input u-grey-25" data-calc="8">
                                <label class="u-field-label" for="field-dcf3">белый</label>
                            </div>
                            <div class="u-input-row">
                                <input id="field-9450" type="checkbox" name="colours[]" value="9"
                                    class="u-active-palette-2-base u-field-input u-grey-25" data-calc="9">
                                <label class="u-field-label" for="field-9450">персиковый</label>
                            </div>
                            <div class="u-input-row">
                                <input id="field-3245" type="checkbox" name="colours[]" value="10"
                                    class="u-active-palette-2-base u-field-input u-grey-25" data-calc="10">
                                <label class="u-field-label" for="field-3245">сиреневый</label>
                            </div>
                            <div class="u-input-row">
                                <input id="field-d986" data-calc="11" type="checkbox" name="colours[]" value="11"
                                    class="u-active-palette-2-base u-field-input u-grey-25">
                                <label class="u-field-label" for="field-d986">зеленый</label>
                            </div>
                            <div class="u-input-row">
                                <input id="field-f5a8" data-calc="12" type="checkbox" name="colours[]" value="12"
                                    class="u-active-palette-2-base u-field-input u-grey-25">
                                <label class="u-field-label" for="field-f5a8">черный</label>
                            </div>
                        </div>
                    </div>
                    <div
                        class="u-form-checkbox-group u-form-group u-form-input-layout-horizontal u-label-top u-form-group-2">
                        <label class="u-label u-label-2">Продолжительность жизни</label>
                        <div class="u-form-checkbox-group-wrapper">
                            <div class="u-input-row">
                                <input id="field-99ec" type="checkbox" name="longevities[]" value="высокая"
                                    class="u-active-palette-2-base u-field-input u-grey-25" data-calc="высокая">
                                <label class="u-field-label" for="field-99ec">высокая</label>
                            </div>
                            <div class="u-input-row">
                                <input id="field-264b" type="checkbox" name="longevities[]" value="средняя"
                                    class="u-active-palette-2-base u-field-input u-grey-25" data-calc="средняя">
                                <label class="u-field-label" for="field-264b">средняя</label>
                            </div>
                            <div class="u-input-row">
                                <input id="field-c807" type="checkbox" name="longevities[]" value="низкая"
                                    class="u-active-palette-2-base u-field-input u-grey-25" data-calc="низкая">
                                <label class="u-field-label" for="field-c807">низкая</label>
                            </div>
                        </div>
                    </div>
                    <div class="u-form-email u-form-group u-label-top">
                        <label for="email-ef64" class="u-label u-label-3">Название цветка</label>
                        <input type="text" placeholder="например, астра" id="email-ef64" name="name"
                            class="u-input u-input-rectangle">
                    </div>
                    <div id="submit" class="u-form-group u-form-submit u-label-top">
                        <input type="submit" value="submit" class="u-form-control-hidden">
                        <a href="#" class="u-btn u-btn-submit u-button-style u-palette-2-base u-btn-1">поиск</a>
                    </div>
                </form>
            </div>
            <a id="clearButton" class="u-btn u-button-style u-btn-2">очистить</a>
        </div>
    </section>
    <section
        class="u-clearfix u-container-align-left-md u-container-align-left-sm u-container-align-left-xs u-palette-5-light-1 u-section-5"
        id="carousel_8f5e">
        <div class="u-clearfix u-sheet u-valign-top u-sheet-1">
            <div class="u-container-style u-expanded-width u-grey-5 u-group u-group-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <div id="yes">
                        <h5 class="u-text u-text-default u-text-1">Здесь пока ничего нет...</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="text/javascript">

        $('#clearButton').on("click", function () {
            $('input[type="checkbox"]:checked').prop('checked', false);
            document.getElementById('form').reset();
        });

        $(document).ready(function () {
            $("#submit").on("click", function () {
                var $this = $(this);
                var $caption = $this.html();
                var form = "#form";
                var formData = $(form).serializeArray();
                var route = $(form).attr('action');

                $.ajax({
                    type: "POST",
                    url: route,
                    data: formData,
                    beforeSend: function () {
                        $this.attr('disabled', true);
                    },
                    success: function (response) {
                        $("#yes").html(response);
                    },
                    complete: function () {
                        $this.attr('disabled', false).html($caption);
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                    }
                });
            });
        });
    </script>
</body>

</html>