<?php
    ob_start();
    session_start();
    require '../classes/DB.class.php';
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <title>Регистрация</title>
    <link rel="icon" href="../images/logo2.png">
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/Страница-1.css" media="screen">
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
    <meta property="og:title" content="Страница 1">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="ru">
    <header class="u-clearfix u-header u-header" id="sec-f58a">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="main.php" class="u-image u-logo u-image-1" data-image-width="808"
                data-image-height="720">
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
        class="u-clearfix u-container-align-left-md u-container-align-left-sm u-container-align-left-xs u-palette-5-light-1 u-section-2"
        id="sec-b606">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img src="../images/imgonline-com.jpg" alt="" class="u-image u-image-default u-image-1"
                data-image-width="564" data-image-height="1002">
            <div class="u-container-style u-group u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <h2 class="u-text u-text-1">Регистрация</h2>
                </div>
            </div>
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <button onclick="location.href='https://localhost/flowbase/pages/login.php'">
                        <div class="u-container-layout u-similar-container u-container-layout-2"><span
                                class="u-align-center u-icon u-text-palette-2-base u-icon-1"><svg class="u-svg-link"
                                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 44 44" style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-841c"></use>
                                </svg><svg class="u-svg-content" viewBox="0 0 44 44" x="0px" y="0px" id="svg-841c"
                                    style="enable-background:new 0 0 44 44;">
                                    <path d="M22,44c-3.309,0-6-2.665-6-5.941V28H5.941C2.665,28,0,25.309,0,22s2.665-6,5.941-6H16V5.941C16,2.665,18.691,0,22,0
    s6,2.665,6,5.941V16h10.059C41.335,16,44,18.691,44,22s-2.665,6-5.941,6H28v10.059C28,41.335,25.309,44,22,44z M5.941,18
    C3.805,18,2,19.832,2,22s1.805,4,3.941,4H18v12.059C18,40.195,19.832,42,22,42s4-1.805,4-3.941V26h12.059C40.195,26,42,24.168,42,22
    s-1.805-4-3.941-4H26V5.941C26,3.805,24.168,2,22,2s-4,1.805-4,3.941V18H5.941z"></path>
                                </svg></span>
                            <h5 class="u-align-center u-text u-text-default u-text-palette-1-dark-3 u-text-2">
                                авторизация</h5>
                        </div>
                    </button>
                </div>
            </div>
            <div class="u-form u-form-1 form-group">
                <form method="post">
                    <div class="form-group form-control u-clearfix u-form-spacing-15 u-form-vertical u-inner-form">
                        <label for="name" class="u-label">Ваш логин:</label>
                        <input type="text" class="form-control u-input u-input-rectangle" id="login" placeholder="логин"
                            name="login">
                    </div>

                    <div class="form-group form-control u-clearfix u-form-spacing-15 u-form-vertical u-inner-form">
                        <label for="pass" class="u-label">Ваш пароль:</label>
                        <input type="password" class="form-control u-input u-input-rectangle" id="password"
                            placeholder="пароль" name="password">
                    </div>

                    <input type="submit" name="submit"
                        class="btn btn-primary u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1"
                        value="зарегистрироваться">
                </form>
                
                <?php 
                    if ((isset($_POST['submit'])) && (!empty($_POST['submit']))) {
                        $db = new DB;
                        $hashpassword = trim(md5($_POST['password']));
                        $name = trim($_POST['login']);

                        $check = $db->dbCheckLogin($name) -> fetch();
                        if ($check > 0) {
                            echo 'Этот логин занят!';
                        } else {
                            $res = $db -> dbRegis($name, $hashpassword);
                            $res = $db -> dbLogin($name, $hashpassword);
                            $login_check = $res -> fetchColumn(3);
    
                            if ($login_check > 0) {
                                $_SESSION['user_id'] = $login_check;
                                header('location:main.php');
                            } 
                        }
                    }
                ?>
            </div>
        </div>
    </section>
</body>

</html>