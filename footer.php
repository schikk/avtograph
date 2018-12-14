<?php
    if ( strpos( $currentpage, 'page-contacts.php' ) != true && 
         strpos( $currentpage, 'page-floors.php' ) != true && 
         strpos( $currentpage, 'page-progress.php' ) != true && 
         strpos( $currentpage, 'category-blog.php' ) != true && 
         strpos( $currentpage, 'page-documents.php' ) != true && 
         strpos( $currentpage, 'page-floor-slice.php' ) != true && 
         strpos( $currentpage, 'page-filter.php' ) != true ) { ?>
        <footer class="main-footer clearfix">
            <div class="main-footer-left">
                <div class="main-footer-left-map" id="footer_map"></div>
            </div>
            <div class="main-footer-right">
                <div class="main-footer-right-content">
                    <h6>Зв'яжіться <br>з нами</h6>
                    <ul class="main-footer-contacts-list">
                        <li>
                            <span>Адреса</span>
                            <address>Київ, вул. Генерала Жмаченка 26</address>
                        </li>
                        <li>
                            <span>Телефон</span>
                            <a href="tel:+380444902626">(044) 490 26 26</a>
                        </li>
                        <li>
                            <span>E-Mail</span>
                            <a href="mailto:newavtograf@gmail.com">newavtograf@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="main-footer-cta">
                    <span>+  Організувати перегляд</span>
                </a>
            </div>
        </footer>
    <?php }
?>
    <!-- GO UP ANCHOR -->
    <a href="#" class="up-anchor">
        <img src="statics/img/ui/arrow_right_blue.svg" alt="Right arrow icon">
    </a>
    <!-- POP-UP FORM FEEDBACK -->
    <div class="form-feedback-container">
        <span class="form-feedback-close-btn"></span>
        <div class="form-feedback-wrapper">
            <h3 class="form-feedback-title">Організувати перегляд</h3>
            <form action="mails/form-feedback.php" class="form-feedback" id="form-feedback" method="post">
                <div class="form-feedback-col-wrapper">
                    <div class="form-feedback-left-col">
                        <div class="input-wrapper">
                            <input class="forms-input" type="text" id="client-name" name="client-name" placeholder="Имя" title="Формат: буквы только русского и латинского алфавита (не меньше 2х букв)" autocomplete="off">
                        </div>    
                        <div class="input-wrapper">
                            <input class="forms-input" type="tel" id="client-phone" name="client-phone" placeholder="Ваш номер телефона" autocomplete="off">                           
                        </div>
                    </div>
                    <div class="form-feedback-right-col">
                        <textarea class="client-mssg" id="client-mssg" name="client-mssg" placeholder="Текст вашего сообщения"></textarea>
                    </div>                    
                </div>
                <span class="phone-number-example">Пример: 095 123 45 67</span>
                <input type="text" name="required" class="req-input">
                <button class="button button-skew button-red form-feedback-order-button" id="order-button" type="submit">
                    <span>Отправить</span>
                </button>
            </form>
            <p class="form-feedback-info-text">Отправляя сообщение вы даете согласие на обработку своих</p>           
        </div>
        <div class="form-feedback-success-container">
            <h3>Спасибо!<br> Ваш запрос отправлен</h3>
            <p>Наши консультанты свяжуться с вами в ближайшее время</p>
            <a href="#" class="button button-skew button-red close-form-feedback-success">
                <span>Закрыть</span>
            </a>
        </div>
    </div>
    <?php include('gallery.php'); ?>
    <?php if (is_null($_COOKIE['preloaderShown'])) { include('preloader.php'); } ?>
    <div class="cursor-follower" id="cursor-follower"></div>
    <!-- SCRIPTS -->
    <script src="js/libs/jquery-3.3.1.min.js"></script>
    <script src="js/libs/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/libs/jquery.mobile.custom.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFJl-oqf0NECka4ZBhXlOVfeUnLvAa-Yw"></script>
    <script src="js/main.js?ver=1.01"></script>
    <!-- Specific scripts -->
    <?php
        if ( $currentpage == '/' || $currentpage == '/projects/avtograf.front/' || strpos( $currentpage, 'index.php' ) == true ) { ?>
            <script src="js/libs/nextparticle.min.js"></script>
            <script src="js/templates/page-home.js?ver=1.02"></script>
        <?php }
        if ( strpos( $currentpage, 'page-about-complex.php' ) == true ) { ?>
            <script src="js/templates/page-about-complex.js?ver=1.02"></script>
        <?php }
        if ( strpos( $currentpage, 'page-about-developer.php' ) == true ) { ?>
            <script src="js/templates/page-about-developer.js?ver=1.02"></script>
        <?php }
        if ( strpos( $currentpage, 'page-contacts.php' ) == true ) { ?>
            <script src="js/templates/page-contacts.js?ver=1.02"></script>
        <?php }
        if ( strpos( $currentpage, 'page-progress.php' ) == true ) { ?>
            <script src="js/templates/page-progress.js?ver=1.02"></script>
        <?php }
        if ( strpos( $currentpage, 'single-blog.php' ) == true || strpos( $currentpage, 'white-box.php' ) == true ) { ?>
            <script src="js/templates/single-blog.js?ver=1.02"></script>
        <?php }
        if ( strpos( $currentpage, 'page-filter.php' ) == true ) { ?>
            <script src="js/libs/rSlider.js?ver=1.02"></script>
            <script src="js/libs/selectize.js"></script>
            <script src="js/templates/page-filter.js?ver=1.02"></script>
        <?php }
        if ( strpos( $currentpage, 'single-app.php' ) == true ) { ?>
            <script src="js/templates/single-app.js?ver=1.02"></script>
        <?php }
        if ( strpos( $currentpage, 'page-floor-slice.php' ) == true ) { ?>
            <script src="js/templates/page-floor-slice.js?ver=1.02"></script>
        <?php }
    ?>
</body>
</html>