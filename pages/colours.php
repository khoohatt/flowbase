<?php
    session_start();
    ini_set('display_errors', 'Off');
    require '../classes/DB.class.php';
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords"
        content="The full-service interior design studio, ​We believe the most beautiful spaces are those with soul., ​​Complete Interior Design Service, Extraordinary rooms with elegant, yet a rustic atmosphere, ​Company, Portfolio, Contacts">
    <meta name="description" content="">
    <title>Оттенки</title>
    <link rel="icon" href="../images/logo2.png">
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/Страница-2.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.8.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Site1",
        "logo": "../images/logo2.png"
    }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Страница 2">
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
    <section class="u-align-center u-clearfix u-container-align-center u-palette-5-light-1 u-section-1"
        id="carousel_cecf">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-align-center u-text u-text-1">Оттенки лепестков</h2>
            <div class="u-align-center u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
            <div class="u-expanded-width u-list u-list-1">

                <form method="$_GET" id="form" action="../funcs/get_colour_symbols.php">
                    <div class="u-repeater u-repeater-1">
                        <div id="1" onclick="addElement(this)"
                            class="u-container-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                                <a
                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">красный<br>
                                </a>
                            </div>
                        </div>
                        <div id="2" onclick="addElement(this)"
                            class="u-container-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-2">
                                <a
                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2">розовый<br>
                                </a>
                            </div>
                        </div>
                        <div id="3" onclick="addElement(this)" class="u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
                                <a
                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-3">синий</a>
                            </div>
                        </div>
                        <div id="4" onclick="addElement(this)"
                            class="u-container-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-4">
                                <a
                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-4">голубой</a>
                            </div>
                        </div>
                        <div id="5" onclick="addElement(this)"
                            class="u-container-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-5">
                                <a
                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-5">желтый</a>
                            </div>
                        </div>
                        <div id="6" onclick="addElement(this)"
                            class="u-container-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-6">
                                <a
                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-6">рыжий</a>
                            </div>
                        </div>
                        <div id="7" onclick="addElement(this)"
                            class="u-container-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-7">
                                <a
                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-7">фиолетовый</a>
                            </div>
                        </div>
                        <div id="8" onclick="addElement(this)"
                            class="u-container-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-8">
                                <a
                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-8">белый</a>
                            </div>
                        </div>
                        <div id="9" onclick="addElement(this)"
                            class="u-container-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-9">
                                <a
                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-9">персиковый</a>
                            </div>
                        </div>
                        <div id="10" onclick="addElement(this)"
                            class="u-container-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-10">
                                <a
                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-10">сиреневый</a>
                            </div>
                        </div>
                        <div id="11" onclick="addElement(this)"
                            class="u-container-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-11">
                                <a
                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-11">зеленый</a>
                            </div>
                        </div>
                        <div id="12" onclick="addElement(this)"
                            class="u-container-align-center u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-12">
                                <a
                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-12">черный</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <p class="u-align-center u-text u-text-2" style="line-height: 35px;">Каждый подаренный букет таит в себе определенный смысл. С помощью
                особых комбинаций цветов можно поведать о своем отношении к человеку. В Викторианскую эпоху язык
                цветов&nbsp;использовали для тайного выражения чувств, в тех случаях, когда о них нельзя было говорить
                открыто, или для назначения тайных встреч: так, например, количество бутонов гиацинта означало день, а
                цветки колокольчика – час свидания.&nbsp;<br>Язык цветов может быть реализован как с помощью
                использования разноцветных предметов, раскраски объектов, так и путем создания цветочных&nbsp;композиций
                из живых растений. Наиболее важным фактором считается именно цвет лепестков.
            </p>
        </div>
    </section>
    <section class="u-align-left u-clearfix u-palette-5-light-1 u-section-2" id="carousel_b2ed">
        <div id="yes"></div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="text/javascript">
        
        function addElement(Element) {
            var formm = $(Element).parents('form');
            var formid = formm.attr('id');
            var string = "colour=" + $(Element).attr("id");

            var $this = $(this); 
            var $caption = Element;
            var form = formm; 
            var formData = string;
            var route = $(form).attr('action'); 
            console.log(formData);
            $.ajax({
                type: "POST", 
                url: route, 
                data: formData, 
                beforeSend: function () {
                    $this.attr('disabled', true).html("");
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
        }
    </script>
</body>
</html>