<?php
    session_start();
    ini_set('display_errors', 'Off');
    require '../classes/DB.class.php';

    $db = new DB;
    $res = $db->dbGetUserById($_SESSION['user_id'])->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​​Личный кабинет">
    <meta name="description" content="">
    <title>Кабинет</title>
    <link rel="icon" href="../images/logo2.png">
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/О-нас.css" media="screen">
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
    <meta property="og:title" content="О нас">
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
        id="sec-c7b2">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <img src="../images/Autumn-wedding-bouquet-The-Wild-Bunch.jpg" alt=""
                class="u-image u-image-default u-image-1" data-image-width="1024" data-image-height="1536">
            <div class="u-container-style u-group u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <h2 class="u-text u-text-1"> Личный кабинет</h2>
                </div>
            </div>
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">

                    <form method="$_GET" id="show_fav" action="../funcs/show_fav.php">
                        <div
                            class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                            <button class="u-container-layout ">
                                <div
                                    class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                                    <span class="u-align-center u-icon u-text-palette-2-base u-icon-1"><svg
                                            class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                            viewBox="0 0 51.997 51.997" style="">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-556b">
                                            </use>
                                        </svg><svg class="u-svg-content" viewBox="0 0 51.997 51.997" x="0px" y="0px"
                                            id="svg-556b" style="enable-background:new 0 0 51.997 51.997;">
                                            <g>
                                                <path d="M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905
        c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478
        c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014
        C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25
        c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826
        c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514
        c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z"></path>
                                                <path d="M15.999,7.904c-5.514,0-10,4.486-10,10c0,0.553,0.447,1,1,1s1-0.447,1-1c0-4.411,3.589-8,8-8c0.553,0,1-0.447,1-1
        S16.551,7.904,15.999,7.904z"></path>
                                            </g>
                                        </svg></span>
                                    <h5 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-2">
                                        избранное</h5>
                                </div>
                            </button>
                        </div>
                    </form>

                    <form method="$_GET" id="show_boq" action="../funcs/show_boq.php">
                        <div
                            class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-2">
                            <button class="u-container-layout ">
                                <div
                                    class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                                    <span class="u-align-center u-icon u-text-palette-2-base u-icon-2"><svg
                                            class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55 55"
                                            style="">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ac0e">
                                            </use>
                                        </svg><svg class="u-svg-content" viewBox="0 0 55 55" x="0px" y="0px"
                                            id="svg-ac0e" style="enable-background:new 0 0 55 55;">
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
                                        букеты<br>
                                    </h5>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="u-form u-form-1">
                <form method="$_GET" id="form" action="../funcs/change_data.php"
                    class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;"
                    source="email" name="form">
                    <div class="u-form-group u-form-name u-label-top">
                        <label for="name-6797" class="u-label">Ваш логин:</label>
                        <input type="text" value="<?php echo $res['user_login']; ?>" placeholder="логин" id="name-6797"
                            name="name" class="u-input u-input-rectangle" required="">
                    </div>
                    <div class="u-form-email u-form-group u-label-top">
                        <label for="email-6797" class="u-label">Ваш пароль:</label>
                        <input type="text" value="<?php /* echo $res['user_password']; */ ?>" placeholder="пароль"
                            id="email-6797" name="email" class="u-input u-input-rectangle" required="">
                    </div>
                    <div class="u-align-left u-form-group u-form-submit u-label-top">
                        <a href="#" class="u-btn u-btn-submit u-button-style u-btn-1">подтвердить<br>
                        </a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                </form>
            </div>

            <?php
            $db = new DB;
            $res = $db->dbGetRole($_SESSION['user_id'])->fetch();

            if ($res['user_role_id'] > 0) {
                echo '<div class="u-form u-form-2">
            <form method="$_GET" id="show_users" action="../funcs/show_users.php" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 10px;" source="email" name="form">
              <div class="u-form-group u-form-name u-label-top">
                <label for="name-6797" class="u-label">Логин или айди пользователя, которого необходимо забанить:</label>
                <input type="text" placeholder="логин или айди" id="name-6797" name="name" class="u-input u-input-rectangle" required="">
              </div>
              <div id="show_user" class="u-align-left u-form-group u-form-submit u-label-top">
                <a href="#" class="u-btn u-btn-submit u-button-style u-btn-2">найти</a>
                <input type="submit" value="submit" class="u-form-control-hidden">
              </div>
            </form>
          </div>';
            } else {
                echo '<div class="u-form u-form-2" style="padding: 75px;"></div>';
            }
            ?>

        </div>
    </section>
    <section
        class="u-clearfix u-container-align-left-md u-container-align-left-sm u-container-align-left-xs u-palette-5-light-1 u-section-2"
        id="sec-e269">
        <div class="u-clearfix u-sheet u-valign-top u-sheet-1">
            <div class="u-container-style u-expanded-width u-grey-5 u-group u-group-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <div id="yes">
                        <h5 class="u-text u-text-default u-text-1">Здесь пока ничего нет...</h5>
                        </>
                    </div>
                </div>
            </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $("#show_user").on("click", function () {
                var $this = $(this); 
                var $caption = $this.html();
                var form = "#show_users";
                var formData = $(form).serializeArray(); 
                var route = $(form).attr('action'); 

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
            });

            $("#show_fav").on("click", function () {
                var $this = $(this); 
                var $caption = $this.html();
                var form = "#show_fav"; 
                var formData = ''; 
                var route = $(form).attr('action'); 

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
            });

            $("#show_boq").on("click", function () {
                var $this = $(this); 
                var $caption = $this.html();
                var form = "#show_boq"; 
                var formData = '';
                var route = $(form).attr('action'); 

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
            });

            $("#change_data").on("click", function () {
                if ((document.getElementById('login').value != "") && (document.getElementById('password').value != "")) {

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
            });
        });
    </script>
</body>

</html>