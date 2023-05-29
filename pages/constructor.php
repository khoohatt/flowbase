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
    <title>Конструктор</title>
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
        class="u-clearfix u-container-align-left-md u-container-align-left-sm u-container-align-left-xs u-palette-5-light-1 u-section-1"
        id="sec-a1db">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-group u-group-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                    <h2 class="u-text u-text-1"><b>
                            <span style="font-weight: 400;"> Конструктор</span></b>
                    </h2>
                    <p class="u-align-left u-text u-text-default u-text-2">Дайте волю фантазии и соберите свой
                        собственный букет, не забыв вложить в него особый смысл, скрытый в оттенках лепестков,
                        количестве цветков или их типе.</p>
                </div>
            </div>
            <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div>
                        <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                            <button <?php
                                if (!isset($_SESSION['user_id'])) {
                                    echo 'onclick="location.href=\'https://localhost/flowbase/pages/login.php\'"';
                                } else {
                                    echo 'id="save"';
                                }
                                ?> class="u-container-layout " >
                                <div class="u-container-layout u-similar-container u-container-layout-2"><span
                                        class="u-align-center u-icon u-text-palette-2-base u-icon-1"><svg
                                            class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55 55"
                                            style="">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5a2c">
                                            </use>
                                        </svg><svg class="u-svg-content" viewBox="0 0 55 55" x="0px" y="0px"
                                            id="svg-5a2c" style="enable-background:new 0 0 55 55;">
                                            <path
                                                d="M52.354,8.51C51.196,4.22,42.577,0,27.5,0C12.423,0,3.803,4.22,2.646,8.51C2.562,8.657,2.5,8.818,2.5,9v0.5V21v0.5V22v11
    v0.5V34v12c0,0.162,0.043,0.315,0.117,0.451C3.798,51.346,14.364,55,27.5,55c13.106,0,23.655-3.639,24.875-8.516
    C52.455,46.341,52.5,46.176,52.5,46V34v-0.5V33V22v-0.5V21V9.5V9C52.5,8.818,52.438,8.657,52.354,8.51z M50.421,33.985
    c-0.028,0.121-0.067,0.241-0.116,0.363c-0.04,0.099-0.089,0.198-0.143,0.297c-0.067,0.123-0.142,0.246-0.231,0.369
    c-0.066,0.093-0.141,0.185-0.219,0.277c-0.111,0.131-0.229,0.262-0.363,0.392c-0.081,0.079-0.17,0.157-0.26,0.236
    c-0.164,0.143-0.335,0.285-0.526,0.426c-0.082,0.061-0.17,0.12-0.257,0.18c-0.226,0.156-0.462,0.311-0.721,0.463
    c-0.068,0.041-0.141,0.08-0.212,0.12c-0.298,0.168-0.609,0.335-0.945,0.497c-0.043,0.021-0.088,0.041-0.132,0.061
    c-0.375,0.177-0.767,0.351-1.186,0.519c-0.012,0.005-0.024,0.009-0.036,0.014c-2.271,0.907-5.176,1.67-8.561,2.17
    c-0.017,0.002-0.034,0.004-0.051,0.007c-0.658,0.097-1.333,0.183-2.026,0.259c-0.113,0.012-0.232,0.02-0.346,0.032
    c-0.605,0.063-1.217,0.121-1.847,0.167c-0.288,0.021-0.59,0.031-0.883,0.049c-0.474,0.028-0.943,0.059-1.429,0.076
    C29.137,40.984,28.327,41,27.5,41s-1.637-0.016-2.432-0.044c-0.486-0.017-0.955-0.049-1.429-0.076
    c-0.293-0.017-0.595-0.028-0.883-0.049c-0.63-0.046-1.242-0.104-1.847-0.167c-0.114-0.012-0.233-0.02-0.346-0.032
    c-0.693-0.076-1.368-0.163-2.026-0.259c-0.017-0.002-0.034-0.004-0.051-0.007c-3.385-0.5-6.29-1.263-8.561-2.17
    c-0.012-0.004-0.024-0.009-0.036-0.014c-0.419-0.168-0.812-0.342-1.186-0.519c-0.043-0.021-0.089-0.041-0.132-0.061
    c-0.336-0.162-0.647-0.328-0.945-0.497c-0.07-0.04-0.144-0.079-0.212-0.12c-0.259-0.152-0.495-0.307-0.721-0.463
    c-0.086-0.06-0.175-0.119-0.257-0.18c-0.191-0.141-0.362-0.283-0.526-0.426c-0.089-0.078-0.179-0.156-0.26-0.236
    c-0.134-0.13-0.252-0.26-0.363-0.392c-0.078-0.092-0.153-0.184-0.219-0.277c-0.088-0.123-0.163-0.246-0.231-0.369
    c-0.054-0.099-0.102-0.198-0.143-0.297c-0.049-0.121-0.088-0.242-0.116-0.363C4.541,33.823,4.5,33.661,4.5,33.5
    c0-0.113,0.013-0.226,0.031-0.338c0.025-0.151,0.011-0.302-0.031-0.445v-7.424c0.028,0.026,0.063,0.051,0.092,0.077
    c0.218,0.192,0.44,0.383,0.69,0.567C9.049,28.786,16.582,31,27.5,31c10.872,0,18.386-2.196,22.169-5.028
    c0.302-0.22,0.574-0.447,0.83-0.678l0.001-0.001v7.424c-0.042,0.143-0.056,0.294-0.031,0.445c0.019,0.112,0.031,0.225,0.031,0.338
    C50.5,33.661,50.459,33.823,50.421,33.985z M50.5,13.293v7.424c-0.042,0.143-0.056,0.294-0.031,0.445
    c0.019,0.112,0.031,0.225,0.031,0.338c0,0.161-0.041,0.323-0.079,0.485c-0.028,0.121-0.067,0.241-0.116,0.363
    c-0.04,0.099-0.089,0.198-0.143,0.297c-0.067,0.123-0.142,0.246-0.231,0.369c-0.066,0.093-0.141,0.185-0.219,0.277
    c-0.111,0.131-0.229,0.262-0.363,0.392c-0.081,0.079-0.17,0.157-0.26,0.236c-0.164,0.143-0.335,0.285-0.526,0.426
    c-0.082,0.061-0.17,0.12-0.257,0.18c-0.226,0.156-0.462,0.311-0.721,0.463c-0.068,0.041-0.141,0.08-0.212,0.12
    c-0.298,0.168-0.609,0.335-0.945,0.497c-0.043,0.021-0.088,0.041-0.132,0.061c-0.375,0.177-0.767,0.351-1.186,0.519
    c-0.012,0.005-0.024,0.009-0.036,0.014c-2.271,0.907-5.176,1.67-8.561,2.17c-0.017,0.002-0.034,0.004-0.051,0.007
    c-0.658,0.097-1.333,0.183-2.026,0.259c-0.113,0.012-0.232,0.02-0.346,0.032c-0.605,0.063-1.217,0.121-1.847,0.167
    c-0.288,0.021-0.59,0.031-0.883,0.049c-0.474,0.028-0.943,0.059-1.429,0.076C29.137,28.984,28.327,29,27.5,29
    s-1.637-0.016-2.432-0.044c-0.486-0.017-0.955-0.049-1.429-0.076c-0.293-0.017-0.595-0.028-0.883-0.049
    c-0.63-0.046-1.242-0.104-1.847-0.167c-0.114-0.012-0.233-0.02-0.346-0.032c-0.693-0.076-1.368-0.163-2.026-0.259
    c-0.017-0.002-0.034-0.004-0.051-0.007c-3.385-0.5-6.29-1.263-8.561-2.17c-0.012-0.004-0.024-0.009-0.036-0.014
    c-0.419-0.168-0.812-0.342-1.186-0.519c-0.043-0.021-0.089-0.041-0.132-0.061c-0.336-0.162-0.647-0.328-0.945-0.497
    c-0.07-0.04-0.144-0.079-0.212-0.12c-0.259-0.152-0.495-0.307-0.721-0.463c-0.086-0.06-0.175-0.119-0.257-0.18
    c-0.191-0.141-0.362-0.283-0.526-0.426c-0.089-0.078-0.179-0.156-0.26-0.236c-0.134-0.13-0.252-0.26-0.363-0.392
    c-0.078-0.092-0.153-0.184-0.219-0.277c-0.088-0.123-0.163-0.246-0.231-0.369c-0.054-0.099-0.102-0.198-0.143-0.297
    c-0.049-0.121-0.088-0.242-0.116-0.363C4.541,21.823,4.5,21.661,4.5,21.5c0-0.113,0.013-0.226,0.031-0.338
    c0.025-0.151,0.011-0.302-0.031-0.445v-7.424c0.12,0.109,0.257,0.216,0.387,0.324c0.072,0.06,0.139,0.12,0.215,0.18
    c0.3,0.236,0.624,0.469,0.975,0.696c0.073,0.047,0.155,0.093,0.231,0.14c0.294,0.183,0.605,0.362,0.932,0.538
    c0.121,0.065,0.242,0.129,0.367,0.193c0.365,0.186,0.748,0.367,1.151,0.542c0.066,0.029,0.126,0.059,0.193,0.087
    c0.469,0.199,0.967,0.389,1.485,0.573c0.143,0.051,0.293,0.099,0.44,0.149c0.412,0.139,0.838,0.272,1.279,0.401
    c0.159,0.046,0.315,0.094,0.478,0.138c0.585,0.162,1.189,0.316,1.823,0.458c0.087,0.02,0.181,0.036,0.269,0.055
    c0.559,0.122,1.139,0.235,1.735,0.341c0.202,0.036,0.407,0.07,0.613,0.104c0.567,0.093,1.151,0.178,1.75,0.256
    c0.154,0.02,0.301,0.043,0.457,0.062c0.744,0.09,1.514,0.167,2.305,0.233c0.195,0.016,0.398,0.028,0.596,0.042
    c0.633,0.046,1.28,0.084,1.942,0.114c0.241,0.011,0.481,0.022,0.727,0.031C25.712,18.979,26.59,19,27.5,19s1.788-0.021,2.65-0.05
    c0.245-0.009,0.485-0.02,0.727-0.031c0.662-0.03,1.309-0.068,1.942-0.114c0.198-0.015,0.4-0.026,0.596-0.042
    c0.791-0.065,1.561-0.143,2.305-0.233c0.156-0.019,0.303-0.042,0.457-0.062c0.599-0.078,1.182-0.163,1.75-0.256
    c0.206-0.034,0.411-0.068,0.613-0.104c0.596-0.106,1.176-0.219,1.735-0.341c0.088-0.019,0.182-0.036,0.269-0.055
    c0.634-0.142,1.238-0.297,1.823-0.458c0.163-0.045,0.319-0.092,0.478-0.138c0.441-0.129,0.867-0.262,1.279-0.401
    c0.147-0.05,0.297-0.098,0.44-0.149c0.518-0.184,1.017-0.374,1.485-0.573c0.067-0.028,0.127-0.058,0.193-0.087
    c0.403-0.176,0.786-0.356,1.151-0.542c0.125-0.064,0.247-0.128,0.367-0.193c0.327-0.175,0.638-0.354,0.932-0.538
    c0.076-0.047,0.158-0.093,0.231-0.14c0.351-0.227,0.675-0.459,0.975-0.696c0.075-0.06,0.142-0.12,0.215-0.18
    C50.243,13.509,50.38,13.402,50.5,13.293z M27.5,2c13.555,0,23,3.952,23,7.5s-9.445,7.5-23,7.5s-23-3.952-23-7.5S13.945,2,27.5,2z
     M50.5,45.703c-0.014,0.044-0.024,0.089-0.032,0.135C49.901,49.297,40.536,53,27.5,53S5.099,49.297,4.532,45.838
    c-0.008-0.045-0.019-0.089-0.032-0.131v-8.414c0.028,0.026,0.063,0.051,0.092,0.077c0.218,0.192,0.44,0.383,0.69,0.567
    C9.049,40.786,16.582,43,27.5,43c10.872,0,18.386-2.196,22.169-5.028c0.302-0.22,0.574-0.447,0.83-0.678l0.001-0.001V45.703z">
                                            </path>
                                        </svg></span>
                                    <h5 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-3">
                                        Сохранить</h5>
                                        <a id="saved" visibility: hidden>Сохранено!</a>
                                </div>
                            </button>
                        </div>
                        <input type="text" id="boq_name" placeholder="название" id="email-ef64" name="name"
                            class="u-input u-input-rectangle">
                    </div>
                    
                    <button class="u-container-layout" <?php
                                if (!isset($_SESSION['user_id'])) {
                                    echo 'onclick="location.href=\'https://localhost/flowbase/pages/login.php\'"';
                                } else {
                                    echo 'onclick="location.href=\'https://localhost/flowbase/pages/profile.php\'"';
                                }
                                ?>>
                        <div class="u-container-layout u-similar-container u-container-layout-3"><span
                                class="u-align-center u-file-icon u-icon u-text-palette-2-base u-icon-2"><img
                                    src="../images/6333234-9625eddd.png" alt=""></span>
                            <h5 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-4">кабинет
                            </h5>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-palette-5-light-1 u-section-2" id="carousel_c37e">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h3 class="u-text u-text-default u-text-1">Выбранные цветы</h3>
            <div class="u-container-style u-expanded-width u-grey-5 u-group u-group-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <div id="yes2">
                        <?php
                        if ($_GET != null) {
                            $db = new DB;
                            $boq_id = $_GET['boq_id'];
                            $res = $db->dbGetBoqFlowers($boq_id);
                            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                                echo '<form style="width:260px; float: left; padding: 10px;" method="$_GET" id="';
                                echo $row["flower_id"];
                                echo '" colour_id="';
                                echo $row["colour_id"];
                                echo '" flower_amount="';
                                echo $row["number_of_flowers"];
                                echo '" action="../funcs/add_fav.php">
                <section class="u-clearfix u-grey-5 u-section-6" id="sec-216c">
                <div class="u-clearfix u-sheet u-sheet-1">
                  <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                      <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                            <img class="u-image u-image-default u-preserve-proportions u-image-1" src="../images/cc2a2cb0-db61-00e7-122b-c9fd9dfcd8b3.jpg" alt="" data-image-width="1117" data-image-height="1117">
                            <h6 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-1">';
                                echo $row["flower_name"];
                                echo '</h6>
                            <h6 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-1">';
                                echo $row["number_of_flowers"];
                                echo ' шт.<br> ';
                                echo $row["colour_name"];
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
                        } else {
                            //echo '<h5 class="u-text u-text-default u-text-2">Здесь пока ничего нет...</h5>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

                </div>
            </div>
        </div>
    </section>
    <section
        class="u-clearfix u-container-align-left-md u-container-align-left-sm u-container-align-left-xs u-palette-5-light-1 u-section-4"
        id="carousel_98e7">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-form u-palette-5-light-2 u-form-1">
                <form method="$_GET" id="form" action="../funcs/find_flowers_constructor.php"
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

            $("#save").on("click", function () {
                var map = [];
                let formData = new FormData();
                if (document.getElementById('boq_name').value != "") {
                    formData.append("boq_name", document.getElementById('boq_name').value);
                } else {
                    formData.append("boq_name", "букет");
                }

                let n = 1;
                $('#yes2 form').each(function () {
                    formData.append(n, [$(this).attr('id'), $(this).attr('colour_id'), $(this).attr('flower_amount')]);
                    ++n;
                });

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "../funcs/save_boq.php");
                xhr.onload = function () {
                    console.log(this.response);
                    document.getElementById("saved").style.visibility = "visible"; 
                };
                xhr.send(formData);
            });
        });
        function delEl(Element) {
        var par = Element.closest('form');
        var parent = par.parentElement;
        parent.removeChild(par);
    }
    </script>
</body>

</html>