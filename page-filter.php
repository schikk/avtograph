<?php require('header.php'); ?>
    <div class="page-wrapper">
        <main class="overflow-hidden">
            <div class="filter-page-container">
                <div class="filter-page-container-flex">
                    <div class="filter-page-container-left">
                        <h1>Подобрать <br>квартиру</h1>
                        <div class="filter-page-container-left-form-container">
                            <div class="filter-page-container-left-form-container-inner">
                                <form action="#" method="POST">
                                    <div class="filter-section-ranges">
                                        <div class="filter-section-range-block">
                                            <span>Этаж</span>
                                            <input type="text" id="slider_floor" class="slider" name="floor">
                                        </div>
                                        <div class="filter-section-range-block">
                                            <span>Секция</span>
                                            <input type="text" id="slider_section" class="slider" name="section">
                                        </div>
                                        <div class="filter-section-range-block">
                                            <span>Площадь м²</span>
                                            <input type="text" id="slider_space" class="slider" name="space">
                                        </div>
                                        <div class="filter-section-range-block">
                                            <span>Количество комнат</span>
                                            <input type="text" id="slider_rooms" class="slider" name="rooms">
                                        </div>
                                    </div>
                                    <div class="filter-section-ranges-checkboxes">
                                        <ul class="filter-checkboxes-list">
                                            <li>
                                                <input type="checkbox" name="penthouse" id="penthouse">
                                                <label for="penthouse">Пентхаус</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="park_view" id="park_view">
                                                <label for="park_view">С видом на парк</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="terrace" id="terrace">
                                                <label for="terrace">С террасой</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-section-ranges-checkboxes">
                                        <ul class="filter-checkboxes-list">
                                            <li>
                                                <input type="checkbox" name="parking" id="parking">
                                                <label for="parking">Паркинги</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="storeroom" id="storeroom">
                                                <label for="storeroom">Кладовые</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="commerce" id="commerce">
                                                <label for="commerce">Коммерческие помещения</label>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="filter-page-container-right">
                        <ul class="filter-categories-list">
                            <li class="active">
                                <a href="page-filter.php">Все квартиры</a>
                            </li>
                            <li>
                                <a href="page-filter.php">Акционные</a>
                            </li>
                        </ul>
                        <div class="filter-page-container-right-header-meta">
                            <div class="filter-page-container-right-header-meta-left">
                                <span>Показано <span id="showed_items">32</span> квартиры из <span id="total_items">80</span></span>
                            </div>
                            <div class="filter-page-container-right-header-meta-right">
                                <span>Сортировать по</span>
                                <select name="sort" id="sort_select">
                                    <option value="floor">Этажам</option>
                                    <option value="rooms">Количеству комнат</option>
                                    <option value="space">Площади</option>
                                </select>
                            </div>
                        </div>
                        <div class="filter-page-container-right-result-outer">
                            <div class="filter-page-container-right-result">
                                <ul class="filter-page-container-right-result-list">
                                    <li>
                                        <a href="single-app.php">
                                            <span>03-02</span>
                                            <div class="filter-page-container-right-result-list-img">
                                                <img src="statics/img/filter/plane_preview.png" alt="title">
                                            </div>
                                            <ul class="filter-page-container-right-result-list-item-meta">
                                                <li>38 м²</li>
                                                <li>4 этаж</li>
                                                <li>3 комнаты</li>
                                                <li>1 очередь, 2 секции</li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-app.php">
                                            <span>03-02</span>
                                            <div class="filter-page-container-right-result-list-img">
                                                <img src="statics/img/filter/plane_preview.png" alt="title">
                                            </div>
                                            <ul class="filter-page-container-right-result-list-item-meta">
                                                <li>38 м²</li>
                                                <li>4 этаж</li>
                                                <li>3 комнаты</li>
                                                <li>1 очередь, 2 секции</li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-app.php">
                                            <span>03-02</span>
                                            <div class="filter-page-container-right-result-list-img">
                                                <img src="statics/img/filter/plane_preview.png" alt="title">
                                            </div>
                                            <ul class="filter-page-container-right-result-list-item-meta">
                                                <li>38 м²</li>
                                                <li>4 этаж</li>
                                                <li>3 комнаты</li>
                                                <li>1 очередь, 2 секции</li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-app.php">
                                            <span>03-02</span>
                                            <div class="filter-page-container-right-result-list-img">
                                                <img src="statics/img/filter/plane_preview.png" alt="title">
                                            </div>
                                            <ul class="filter-page-container-right-result-list-item-meta">
                                                <li>38 м²</li>
                                                <li>4 этаж</li>
                                                <li>3 комнаты</li>
                                                <li>1 очередь, 2 секции</li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-app.php">
                                            <span>03-02</span>
                                            <div class="filter-page-container-right-result-list-img">
                                                <img src="statics/img/filter/plane_preview.png" alt="title">
                                            </div>
                                            <ul class="filter-page-container-right-result-list-item-meta">
                                                <li>38 м²</li>
                                                <li>4 этаж</li>
                                                <li>3 комнаты</li>
                                                <li>1 очередь, 2 секции</li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-app.php">
                                            <span>03-02</span>
                                            <div class="filter-page-container-right-result-list-img">
                                                <img src="statics/img/filter/plane_preview.png" alt="title">
                                            </div>
                                            <ul class="filter-page-container-right-result-list-item-meta">
                                                <li>38 м²</li>
                                                <li>4 этаж</li>
                                                <li>3 комнаты</li>
                                                <li>1 очередь, 2 секции</li>
                                            </ul>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>" class="close-filter"></a>
            </div>
        </main>
    </div>
<?php require('footer.php'); ?>