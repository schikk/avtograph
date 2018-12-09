<?php $currentpage = $_SERVER['REQUEST_URI']; ?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Avtograf</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/rSlider.min.css">
    <link rel="stylesheet" href="css/selectize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mediaq.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
    <header class="main-header">
        <div class="sidebar">
            <a href="index.php" class="header-logo">
                <img src="statics/img/main_logo.svg" alt="Avtograf">
            </a>
            <div class="header-menu-btn" role="button" id="sidebar_menu_button">
                <img src="statics/img/ui/menu.svg" alt="Menu icon">
            </div>
            <div class="sidebar-footer">
                <ul class="sidebar-footer-socials-list">
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
                <ul class="sidebar-footer-lang">
                    <li>
                        <a href="#">En</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-menu">
            <div class="header-menu-inner">
                <div class="header-menu-inner-top">
                    <address>Київ, вул. Генерала Жмаченка 26</address>
                    <a href="tel:+380445002323">+38 044 500 23 23</a>
                </div>
                <div class="header-menu-inner-columns-container">
                    <div class="header-menu-inner-column">
                        <nav>
                            <ul class="header-menu-left-list">
                                <li>
                                    <a href="page-about-complex.php">О комплексе</a>
                                </li>
                                <li>
                                    <a href="page-floors.php">Планировки</a>
                                </li>
                                <li>
                                    <a href="page-progress.php">Ход строительства</a>
                                </li>
                                <li>
                                    <a href="#" id="gallery-menu">Галерея</a>
                                </li>
                                <li>
                                    <a href="page-floor-slice.php">Квартиры с ремонтом</a>
                                </li>
                                <li>
                                    <a href="white-box.php">White Box</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-menu-inner-column">
                        <nav>
                            <ul class="header-menu-right-list">
                                <li>
                                    <a href="category-blog.php">Новости</a>
                                </li>
                                <li>
                                    <a href="page-about-developer.php">Застройщик</a>
                                </li>
                                <li>
                                    <a href="page-documents.php">Документация</a>
                                </li>
                                <li>
                                    <a href="page-contacts.php">Контакты</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="vr-btn vr-btn-header-menu" role="button">
                    <img src="statics/img/ui/vr.svg" alt="VR icon">
                </div>
            </div>
        </div>
        <div class="mobile-header">
            <div class="mobile-header-burger-button">
                <img src="statics/img/ui/menu_horizonta.svg" alt="burger">
            </div>
            <a href="index.php" class="mobile-header-logo">
                <img src="statics/img/main_logo.svg" alt="avtograph logo">
            </a>
            <div class="mobile-header-call-button">
                <img src="statics/img/ui/call_white.svg" alt="phone icon">
            </div>
        </div>
        <?php
            if ( strpos( $currentpage, 'page-filter.php' ) != true ) { ?>
                <ul class="header-btns">
                    <li class="camera-btn">
                        <img src="statics/img/ui/CCTV_mini.svg" alt="CCTV icon">
                    </li>
                    <li class="call-btn">
                        <img src="statics/img/ui/call_blue.svg" alt="Phone icon">
                    </li>
                </ul>
            <?php }
        ?>
    </header>