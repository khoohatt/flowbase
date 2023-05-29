<?php
    session_start();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​​Флориография&nbsp;–язык цветов">
    <meta name="description" content="">
    <title>Главная</title>
    <link rel="icon" href="../images/logo2.png">
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/Главная.css" media="screen">
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
    <meta property="og:title" content="Главная">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="/intlTelInput/">
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
        class="u-clearfix u-container-align-left-md u-container-align-left-sm u-container-align-left-xs u-palette-5-light-1 u-section-1"
        id="sec-1b66">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img src="../images/welcome_page_bouquet.jpg" alt=""
                class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-1"
                data-image-width="600" data-image-height="900">
            <div
                class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
                <div
                    class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-valign-top-lg u-valign-top-xl u-container-layout-1">
                    <h2 class="u-text u-text-1"> Флориография – язык цветов&nbsp;</h2>
                    <p class="u-align-left u-text u-text-default u-text-2"> Это понятие включает
                        особые значения и тайные смыслы, придаваемые&nbsp;цветам&nbsp;для выражения тех или
                        иных&nbsp;настроений,&nbsp;чувств&nbsp;и&nbsp;идей. На данном сайте вы сможете узнать об этом больше.</p>
                </div>
            </div>
            <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <button onclick="location.href='https://localhost/flowbase/pages/catalog.php'">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2"><span
                                class="u-align-center u-file-icon u-icon u-text-palette-2-base u-icon-1"><img
                                    src="../images/1606186-bf1ea94b.png" alt=""></span>
                            <h5 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-3">каталог
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
                    <button <?php
                                if (!isset($_SESSION['user_id'])) {
                                    echo 'onclick="location.href=\'https://localhost/flowbase/pages/login.php\'"';
                                } else {
                                    echo 'onclick="location.href=\'https://localhost/flowbase/pages/profile.php\'"';
                                }
                                ?>>
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4"><span
                                class="u-align-center u-file-icon u-icon u-text-palette-2-base u-icon-3"><img
                                    src="../images/6333234-9625eddd.png" alt=""></span>
                            <h5 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-5">кабинет
                            </h5>
                        </div>
                    </button>
                    <button onclick="location.href='https://localhost/flowbase/pages/symbols.php'">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-5"><span
                                class="u-align-center u-icon u-text-palette-2-base u-icon-4"><svg class="u-svg-link"
                                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5934"></use>
                                </svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-5934"
                                    style="enable-background:new 0 0 60 60;">
                                    <g>
                                        <path d="M57.49,27H54v-6.268C54,19.226,52.774,18,51.268,18H50V0H10v2H7v2H4v7H2.732C1.226,11,0,12.226,0,13.732v43.687l0.006,0c-0.005,0.563,0.17,1.114,0.522,1.575C1.018,59.634,1.76,60,2.565,60h44.759c1.157,0,2.175-0.78,2.449-1.813L60,30.149v-0.177C60,28.25,58.944,27,57.49,27z M51.268,20C51.672,20,52,20.328,52,20.732V27h-2v-7H51.268z M48,2v16v9H12.731c-0.233,0-0.457,0.039-0.674,0.098c-0.018,0.005-0.039,0.003-0.057,0.008V2H48z M10,4v25.585l-0.063,0.173L9,32.326V4H10z M6,6h1
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
                            <h5 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-6">символика
                            </h5>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>