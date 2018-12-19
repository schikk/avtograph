<?php require('header.php'); ?>
    <div class="page-wrapper">
        <main class="overflow-hidden">
            <div class="filter-page-container">
                <div class="filter-page-container-flex">
                    <div class="filter-page-container-left animation-element-default">
                        <h1>Обрати <br>квартиру<span class="mobile-filter-close-btn" id="mobile-filter-close-btn"></span></h1>
                        <div class="filter-page-container-left-form-container">
                            <div class="filter-page-container-left-form-container-inner">
                                <form action="#" method="POST">
                                    <div class="filter-section-ranges">
                                        <div class="filter-section-range-block">
                                            <span>Секція</span>
                                            <div class="floor-slice-page-form-section-radios-container" id="select_section">
                                                <div class="floor-slice-page-form-section-radio">
                                                    <input type="radio" name="order" value="1" checked="true">
                                                    <span>1</span>
                                                </div>
                                                <div class="floor-slice-page-form-section-radio">
                                                    <input type="radio" name="order" value="2">
                                                    <span>2</span>
                                                </div>
                                                <div class="floor-slice-page-form-section-radio">
                                                    <input type="radio" name="order" value="3">
                                                    <span>3</span>
                                                </div>                                                
                                            </div>
                                        </div>                                        
                                        <div class="filter-section-range-block">
                                            <span>Поверх</span>
                                            <input type="text" id="slider_floor" class="slider" name="floor">
                                        </div>
                                        <div class="filter-section-range-block">
                                            <span>Площа м²</span>
                                            <input type="text" id="slider_space" class="slider" name="space">
                                        </div>
                                        <div class="filter-section-range-block">
                                            <span>Кількість кімнат</span>
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
                                                <label for="park_view">З видом на парк</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="terrace" id="terrace">
                                                <label for="terrace">З терасою</label>
                                            </li>
                                        </ul>
                                    </div>
<!--                                     <div class="filter-section-ranges-checkboxes">
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
                                    </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="filter-page-container-right animation-element-default">
                        <ul class="filter-categories-list">
                            <li class="active">
                                <a href="page-filter.php">Всі квартири</a>
                            </li>
                            <li>
                                <a href="page-filter.php">Акційні</a>
                            </li>
                        </ul>
                        <div class="filter-page-container-right-header-meta">
                            <div class="filter-page-container-right-header-meta-left">
                                <span>Показано <span id="showed_items">32</span> квартири</span>
                            </div>
                            <div class="filter-page-container-right-header-meta-right">
                                <span>Сортувати по</span>
                                <select name="sort" id="sort_select">
                                    <option value="floor">Поверхам</option>
                                    <option value="rooms">Кількістю кімнат</option>
                                    <option value="space">Площі</option>
                                </select>
                            </div>
                        </div>
                        <div class="filter-page-container-right-result-outer">
                            <div class="filter-page-container-right-result">
                                <ul class="filter-page-container-right-result-list">
                                    <li>
                                        <a href="single-app.php">
                                            <span>1A-1</span>
                                            <div class="filter-page-container-right-result-list-img">
                                                <!-- <img src="statics/img/filter/plane_preview.png" alt="title"> -->
                                                <svg width="195" height="267" viewBox="0 0 195 267" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="1&#208;&#144;-1 &#208;&#186;&#208;&#178;&#208;&#176;&#209;&#128;&#209;&#130;&#208;&#184;&#209;&#128;&#208;&#176;" clip-path="url(#clip0)">
                            <rect width="195" height="267" fill="white" />
                            <g id="Group 5182">
                                <path id="Fill 2" fill-rule="evenodd" clip-rule="evenodd" d="M10.7463 85.4998H93.5181V137.833L93.5237 211.52H93.5209V254.04L8.4814 254.042L8.4729 137.833H8.47574L8.47857 137.861V103.817L10.7435 103.82L10.7463 85.4998Z" fill="white" />
                                <path id="Fill 6" fill-rule="evenodd" clip-rule="evenodd" d="M136.746 87.7647L136.758 7.41937H187.77L187.779 79.8277H144.961V87.7647H136.746Z" fill="white" />
                                <path id="Fill 14" fill-rule="evenodd" clip-rule="evenodd" d="M8.42456 82.685V41.8377V40.1454V37.6849H55.6101V40.1454H62.9434V48.7089H133.342V82.6652H93.5151V82.685H8.42456Z" fill="white" />
                                <path id="Fill 16" fill-rule="evenodd" clip-rule="evenodd" d="M64.9814 45.8147V6.8808H128.239V38.9123V45.8147H116.768H64.9814Z" fill="white" />
                                <path id="Fill 22" fill-rule="evenodd" clip-rule="evenodd" d="M26.4729 40.1454V37.6849H55.6103V40.1454H26.4729Z" fill="white" />
                                <path id="Fill 28" fill-rule="evenodd" clip-rule="evenodd" d="M142.75 241.661L142.254 242.435L142.013 242.763L141.599 243.282L141.095 243.852L140.718 244.266L140.035 244.957L139.694 245.261L139.196 245.68L138.64 246.148L138.277 246.417L137.597 246.913L137.265 247.123L136.556 247.562L136.162 247.772L135.525 248.101L134.632 248.487L133.745 248.64L132.88 248.56L132.472 248.421L131.519 248.044L131.077 247.835L130.502 247.543L129.586 247.004L128.588 246.29L127.769 245.587L127.367 245.195L126.978 244.796L126.275 243.977L125.561 242.976L125.022 242.063L124.73 241.488L124.518 241.046L124.144 240.093L124.005 239.685L123.925 238.82L124.076 237.933L124.464 237.04L124.793 236.402L125.002 236.008L125.442 235.3L125.652 234.968L126.148 234.288L126.414 233.925L126.882 233.366L127.304 232.87L127.608 232.53L128.299 231.847L128.713 231.47L129.283 230.963L129.802 230.552L130.13 230.311L130.904 229.815L131.23 229.636L131.619 229.469L132.305 229.239L132.812 229.106L133.555 229.188L133.926 229.279L134.269 229.418L135.006 229.778L135.394 229.988L136.466 230.702L137.498 231.473L138.481 232.306L139.394 233.171L140.259 234.084L141.089 235.067L141.863 236.096L142.577 237.171L142.787 237.559L143.144 238.296L143.286 238.639L143.377 239.01L143.459 239.75L143.326 240.26L143.093 240.946L142.929 241.335L142.75 241.661ZM133.203 242.959L132.236 242.131L131.814 241.732L131.31 241.255L130.833 240.751L130.434 240.328L129.606 239.362L128.824 238.338L128.24 237.488L127.82 236.887L127.463 236.507L127.437 236.487L127.043 236.19L126.564 236.025L126.584 236.496L126.726 237.264L127.296 238.418L127.84 239.359L128.449 240.266L129.116 241.131L129.836 241.953L130.224 242.341L130.612 242.727L131.434 243.449L132.299 244.115L133.206 244.722L134.147 245.269L135.301 245.839L136.069 245.981L136.539 246.001L136.375 245.519L136.077 245.127L136.058 245.102L135.678 244.745L135.077 244.325L134.226 243.741L133.203 242.959Z" fill="white" />
                                <path id="Stroke 30" d="M142.75 241.661L142.254 242.435" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 32" d="M142.254 242.435L142.013 242.763" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 34" d="M142.013 242.763L141.599 243.282" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 36" d="M141.599 243.282L141.095 243.852" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 38" d="M141.095 243.852L140.718 244.266" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 40" d="M140.718 244.266L140.035 244.957" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 42" d="M140.034 244.957L139.694 245.261" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 44" d="M139.694 245.261L139.196 245.68" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 46" d="M139.195 245.68L138.64 246.148" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 48" d="M138.64 246.148L138.277 246.417" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 50" d="M138.277 246.417L137.597 246.913" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 52" d="M137.597 246.913L137.265 247.123" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 54" d="M137.265 247.123L136.556 247.562" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 56" d="M136.556 247.562L136.162 247.772" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 58" d="M136.162 247.772L135.525 248.101" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 60" d="M135.525 248.101L134.632 248.487" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 62" d="M134.632 248.487L133.744 248.64" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 64" d="M133.744 248.64L132.88 248.56" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 66" d="M132.88 248.56L132.472 248.421" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 68" d="M132.472 248.421L131.519 248.044" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 70" d="M131.519 248.044L131.077 247.835" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 72" d="M131.077 247.835L130.502 247.543" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 74" d="M130.502 247.543L129.586 247.004" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 76" d="M129.586 247.004L128.588 246.29" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 78" d="M128.588 246.29L127.769 245.587" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 80" d="M127.769 245.587L127.366 245.195" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 82" d="M127.367 245.196L126.978 244.796" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 84" d="M126.978 244.796L126.275 243.977" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 86" d="M126.275 243.977L125.561 242.976" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 88" d="M125.561 242.976L125.022 242.063" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 90" d="M125.022 242.063L124.73 241.488" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 92" d="M124.73 241.488L124.518 241.046" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 94" d="M124.518 241.046L124.144 240.093" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 96" d="M124.144 240.093L124.005 239.685" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 98" d="M124.005 239.685L123.925 238.82" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 100" d="M123.925 238.82L124.078 237.933" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 102" d="M124.078 237.933L124.464 237.04" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 104" d="M124.464 237.04L124.793 236.402" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 106" d="M124.793 236.402L125.002 236.008" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 108" d="M125.002 236.008L125.442 235.3" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 110" d="M125.442 235.3L125.652 234.968" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 112" d="M125.652 234.968L126.148 234.288" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 114" d="M126.148 234.288L126.414 233.925" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 116" d="M126.414 233.925L126.882 233.367" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 118" d="M126.882 233.366L127.304 232.87" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 120" d="M127.304 232.87L127.608 232.53" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 122" d="M127.607 232.53L128.299 231.847" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 124" d="M128.299 231.847L128.713 231.47" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 126" d="M128.713 231.47L129.283 230.963" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 128" d="M129.283 230.963L129.801 230.552" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 130" d="M129.802 230.552L130.13 230.311" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 132" d="M130.13 230.311L130.904 229.815" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 134" d="M130.904 229.815L131.23 229.636" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 136" d="M131.23 229.636L131.619 229.469" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 138" d="M131.618 229.469L132.304 229.239" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 140" d="M132.304 229.239L132.812 229.106" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 142" d="M132.812 229.106L133.554 229.188" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 144" d="M133.554 229.188L133.926 229.279" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 146" d="M133.926 229.279L134.269 229.418" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 148" d="M134.269 229.418L135.006 229.778" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 150" d="M135.006 229.778L135.394 229.988" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 152" d="M135.394 229.988L136.466 230.702" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 154" d="M136.466 230.702L137.498 231.473" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 156" d="M137.498 231.473L138.481 232.306" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 158" d="M138.481 232.306L139.394 233.171" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 160" d="M139.394 233.171L140.259 234.084" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 162" d="M140.259 234.084L141.089 235.067" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 164" d="M141.089 235.067L141.863 236.096" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 166" d="M141.863 236.096L142.577 237.171" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 168" d="M142.577 237.171L142.787 237.559" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 170" d="M142.787 237.559L143.144 238.296" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 172" d="M143.144 238.296L143.286 238.639" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 174" d="M143.286 238.639L143.377 239.01" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 176" d="M143.377 239.01L143.459 239.75" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 178" d="M143.459 239.75L143.326 240.26" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 180" d="M143.326 240.26L143.093 240.946" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 182" d="M143.093 240.946L142.929 241.335" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 184" d="M142.929 241.335L142.75 241.661" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 186" d="M133.203 242.959L132.236 242.131" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 188" d="M132.236 242.131L131.814 241.732" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 190" d="M131.814 241.732L131.31 241.255" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 192" d="M131.309 241.255L130.833 240.751" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 194" d="M130.833 240.751L130.434 240.328" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 196" d="M130.434 240.328L129.606 239.362" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 198" d="M129.606 239.362L128.823 238.339" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 200" d="M128.823 238.338L128.24 237.488" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 202" d="M128.24 237.488L127.82 236.887" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 204" d="M127.82 236.887L127.463 236.507" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 206" d="M127.463 236.507L127.438 236.487" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 208" d="M127.437 236.487L127.043 236.19" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 210" d="M127.043 236.19L126.564 236.025" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 212" d="M126.564 236.025L126.584 236.496" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 214" d="M126.584 236.496L126.726 237.264" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 216" d="M126.726 237.264L127.296 238.418" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 218" d="M127.296 238.418L127.84 239.359" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 220" d="M127.84 239.359L128.449 240.266" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 222" d="M128.449 240.266L129.116 241.131" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 224" d="M129.115 241.131L129.835 241.953" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 226" d="M129.835 241.953L130.224 242.341" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 228" d="M130.224 242.341L130.612 242.727" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 230" d="M130.612 242.727L131.434 243.449" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 232" d="M131.434 243.449L132.299 244.115" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 234" d="M132.299 244.115L133.206 244.722" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 236" d="M133.206 244.722L134.147 245.269" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 238" d="M134.147 245.269L135.301 245.839" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 240" d="M135.301 245.839L136.069 245.981" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 242" d="M136.069 245.981L136.539 246.001" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 244" d="M136.539 246.001L136.375 245.519" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 246" d="M136.375 245.519L136.077 245.127" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 248" d="M136.077 245.127L136.058 245.102" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 250" d="M136.058 245.102L135.678 244.745" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 252" d="M135.678 244.745L135.077 244.325" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 254" d="M135.077 244.325L134.226 243.741" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 256" d="M134.226 243.741L133.203 242.959" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 258" d="M137.251 245.924L136.695 246.006" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 260" d="M137.897 245.765L137.251 245.924" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 262" d="M138.498 245.544L137.897 245.765" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 264" d="M139.054 245.258L138.498 245.544" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 266" d="M139.794 244.719L139.054 245.258" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 268" d="M136.695 246.006L136.54 246.001" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 270" d="M139.794 244.719L140.035 244.957" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 272" d="M126.641 235.314L126.559 235.869" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 274" d="M126.8 234.668L126.641 235.314" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 276" d="M127.021 234.067L126.8 234.668" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 278" d="M127.304 233.511L127.021 234.067" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 280" d="M127.846 232.771L127.304 233.511" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 282" d="M126.559 235.87L126.564 236.025" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 284" d="M127.846 232.771L127.607 232.53" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 286" fill-rule="evenodd" clip-rule="evenodd" d="M32.2046 240.447L31.9268 240.691L31.5809 240.935L30.963 241.309L30.4924 241.547L29.7498 241.63L29.3699 241.618L29.0042 241.556L28.2077 241.363L27.7825 241.244L26.5806 240.776L25.4099 240.243L24.2704 239.645L23.1932 238.996L22.1501 238.29L21.1267 237.508L20.1516 236.669L19.2247 235.776L18.9356 235.439L18.4253 234.798L18.2156 234.495L18.0455 234.152L17.8074 233.443L17.8272 232.919L17.9066 232.199L17.9831 231.785L18.088 231.428L18.4055 230.563L18.5699 230.192L18.8619 229.596L19.2332 228.93L19.511 228.446L20.0326 227.621L20.299 227.252L20.693 226.736L21.1381 226.158L21.4329 225.818L21.9913 225.189L22.2691 224.911L22.8672 224.33L23.2045 224.041L23.7573 223.584L24.5482 223.012L25.3787 222.674L26.2433 222.564L26.6713 222.612L27.6805 222.773L28.1595 222.887L28.7831 223.046L29.7923 223.377L30.9233 223.859L31.8729 224.369L32.3491 224.664L32.8168 224.97L33.6786 225.619L34.5913 226.441L35.3142 227.218L35.7224 227.72L36.0257 228.105L36.5954 228.953L36.8194 229.321L37.083 230.152L37.1255 231.048L36.9384 232.006L36.757 232.7L36.6351 233.128L36.3602 233.914L36.2269 234.285L35.8896 235.053L35.7054 235.464L35.368 236.11L35.0619 236.686L34.8408 237.083L34.3135 237.902L33.9904 238.358L33.5425 238.976L33.123 239.489L32.8565 239.795L32.2046 240.447ZM31.4194 230.844L32.403 231.674L33.157 232.38L33.6956 232.876L34.1236 233.171L34.1548 233.185L34.6027 233.389L35.1072 233.449L34.9882 232.992L34.6849 232.272L33.8798 231.269L33.1428 230.467L32.3548 229.713L31.5186 229.01L30.6342 228.363L30.175 228.069L29.7129 227.774L28.7548 227.244L27.7655 226.782L26.7507 226.382L25.7132 226.05L24.4631 225.741L23.6836 225.77L23.2187 225.852L23.4823 226.286L23.8565 226.606L23.8849 226.626L24.3327 226.892L25.0074 227.173L25.9655 227.561L27.1305 228.105L28.2559 228.704L28.7548 229.004L29.3472 229.361L29.9198 229.749L30.4046 230.075L31.4194 230.844Z" fill="white" />
                                <path id="Stroke 288" d="M31.9268 240.691L32.2046 240.447" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 290" d="M31.5808 240.935L31.9266 240.691" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 292" d="M30.9629 241.309L31.5808 240.935" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 294" d="M30.4924 241.547L30.963 241.309" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 296" d="M29.7498 241.63L30.4924 241.547" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 298" d="M29.3699 241.618L29.7497 241.63" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 300" d="M29.0042 241.556L29.3698 241.618" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 302" d="M28.2075 241.363L29.0041 241.556" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 304" d="M27.7825 241.244L28.2077 241.363" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 306" d="M26.5806 240.776L27.7825 241.244" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 308" d="M25.4099 240.243L26.5806 240.776" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 310" d="M24.2703 239.645L25.4098 240.243" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 312" d="M23.1931 238.996L24.2703 239.645" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 314" d="M22.1499 238.29L23.1931 238.996" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 316" d="M21.1267 237.508L22.15 238.29" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 318" d="M20.1516 236.669L21.1267 237.508" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 320" d="M19.2246 235.776L20.1515 236.669" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 322" d="M18.9355 235.439L19.2247 235.776" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 324" d="M18.4253 234.798L18.9355 235.439" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 326" d="M18.2156 234.495L18.4253 234.798" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 328" d="M18.0454 234.152L18.2155 234.495" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 330" d="M17.8074 233.443L18.0455 234.152" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 332" d="M17.8272 232.919L17.8074 233.443" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 334" d="M17.9065 232.199L17.8271 232.919" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 336" d="M17.983 231.785L17.9065 232.199" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 338" d="M18.088 231.428L17.9832 231.785" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 340" d="M18.4054 230.563L18.0879 231.428" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 342" d="M18.5699 230.192L18.4055 230.563" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 344" d="M18.8618 229.596L18.5698 230.192" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 346" d="M19.2332 228.93L18.8618 229.596" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 348" d="M19.5109 228.446L19.2332 228.93" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 350" d="M20.0326 227.621L19.511 228.446" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 352" d="M20.2989 227.252L20.0325 227.621" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 354" d="M20.6931 226.736L20.2991 227.252" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 356" d="M21.1379 226.158L20.6929 226.736" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 358" d="M21.4327 225.818L21.1379 226.158" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 360" d="M21.9913 225.189L21.4329 225.818" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 362" d="M22.269 224.911L21.9912 225.189" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 364" d="M22.8672 224.33L22.269 224.911" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 366" d="M23.2045 224.041L22.8672 224.33" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 368" d="M23.7573 223.584L23.2046 224.04" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 370" d="M24.5482 223.012L23.7573 223.584" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 372" d="M25.3786 222.674L24.5481 223.012" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 374" d="M26.2432 222.564L25.3787 222.674" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 376" d="M26.6712 222.612L26.2432 222.564" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 378" d="M27.6803 222.773L26.6711 222.612" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 380" d="M28.1595 222.887L27.6804 222.773" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 382" d="M28.783 223.046L28.1594 222.887" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 384" d="M29.7921 223.374L28.783 223.046" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 386" d="M30.9233 223.859L29.7922 223.374" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 388" d="M31.8729 224.369L30.9233 223.859" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 390" d="M32.349 224.664L31.8728 224.369" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 392" d="M32.8168 224.97L32.3491 224.664" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 394" d="M33.6784 225.619L32.8167 224.97" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 396" d="M34.5912 226.441L33.6785 225.619" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 398" d="M35.3141 227.218L34.5913 226.441" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 400" d="M35.7224 227.72L35.3142 227.218" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 402" d="M36.0255 228.105L35.7222 227.72" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 404" d="M36.5954 228.953L36.0256 228.105" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 406" d="M36.8194 229.321L36.5955 228.953" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 408" d="M37.083 230.152L36.8193 229.321" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 410" d="M37.1255 231.048L37.083 230.152" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 412" d="M36.9382 232.006L37.1253 231.048" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 414" d="M36.7568 232.7L36.9383 232.006" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 416" d="M36.635 233.128L36.7569 232.7" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 418" d="M36.3601 233.914L36.6351 233.128" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 420" d="M36.2268 234.285L36.36 233.914" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 422" d="M35.8896 235.053L36.227 234.285" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 424" d="M35.7053 235.464L35.8896 235.053" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 426" d="M35.3679 236.11L35.7052 235.464" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 428" d="M35.0618 236.686L35.3679 236.11" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 430" d="M34.8408 237.083L35.0619 236.686" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 432" d="M34.3135 237.902L34.8407 237.083" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 434" d="M33.9902 238.358L34.3134 237.902" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 436" d="M33.5425 238.976L33.9904 238.358" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 438" d="M33.1228 239.489L33.5423 238.976" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 440" d="M32.8564 239.795L33.1229 239.489" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 442" d="M32.2046 240.447L32.8566 239.795" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 444" d="M32.4028 231.674L31.4192 230.844" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 446" d="M33.1568 232.38L32.4028 231.674" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 448" d="M33.6956 232.876L33.157 232.38" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 450" d="M34.1236 233.171L33.6956 232.876" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 452" d="M34.1547 233.185L34.1235 233.171" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 454" d="M34.6027 233.389L34.1548 233.185" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 456" d="M35.1071 233.449L34.6025 233.389" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 458" d="M34.988 232.992L35.1071 233.449" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 460" d="M34.6848 232.272L34.9881 232.992" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 462" d="M33.8796 231.269L34.6847 232.272" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 464" d="M33.1428 230.467L33.8798 231.269" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 466" d="M32.3547 229.713L33.1428 230.467" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 468" d="M31.5186 229.01L32.3548 229.713" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 470" d="M30.634 228.361L31.5184 229.01" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 472" d="M30.1748 228.069L30.634 228.361" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 474" d="M29.7129 227.774L30.1749 228.069" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 476" d="M28.7546 227.244L29.7128 227.774" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 478" d="M27.7654 226.782L28.7547 227.244" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 480" d="M26.7507 226.382L27.7655 226.782" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 482" d="M25.7131 226.05L26.7506 226.382" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 484" d="M24.4631 225.741L25.7132 226.05" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 486" d="M23.6836 225.77L24.4631 225.741" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 488" d="M23.2188 225.852L23.6836 225.77" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 490" d="M23.4824 226.286L23.2188 225.852" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 492" d="M23.8564 226.606L23.4822 226.286" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 494" d="M23.8848 226.626L23.8564 226.606" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 496" d="M24.3326 226.892L23.8848 226.626" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 498" d="M25.0074 227.173L24.3328 226.892" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 500" d="M25.9654 227.561L25.0073 227.173" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 502" d="M27.1304 228.105L25.9653 227.561" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 504" d="M28.2557 228.704L27.1304 228.105" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 506" d="M28.7548 229.004L28.2559 228.703" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 508" d="M29.3471 229.361L28.7546 229.004" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 510" d="M29.9198 229.749L29.3472 229.361" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 512" d="M30.4044 230.075L29.9197 229.75" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 514" d="M31.4193 230.844L30.4045 230.076" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 516" d="M35.1864 234.157L35.1467 233.599" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 518" d="M35.1694 234.823L35.1864 234.157" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 520" d="M35.0815 235.458L35.1694 234.823" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 522" d="M34.9258 236.062L35.0817 235.458" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 524" d="M34.5544 236.901L34.9258 236.062" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 526" d="M35.1469 233.599L35.1072 233.449" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 528" d="M34.5544 236.901L34.8407 237.083" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 530" d="M22.5413 226.079L23.0657 225.88" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 532" d="M21.9458 226.373L22.5411 226.079" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 534" d="M21.4045 226.719L21.946 226.373" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 536" d="M20.9226 227.116L21.4045 226.719" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 538" d="M20.3159 227.805L20.9225 227.116" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 540" d="M23.0657 225.88L23.2187 225.852" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 542" d="M20.3159 227.805L20.0325 227.621" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 544" fill-rule="evenodd" clip-rule="evenodd" d="M142.75 189.112L142.929 189.438L143.093 189.826L143.326 190.509L143.459 191.02L143.377 191.762L143.286 192.134L143.144 192.477L142.787 193.211L142.577 193.602L141.863 194.674L141.089 195.702L140.259 196.689L139.394 197.602L138.481 198.466L137.498 199.297L136.469 200.071L135.394 200.782L135.006 200.992L134.269 201.352L133.926 201.491L133.555 201.584L132.815 201.664L132.305 201.533L131.619 201.301L131.23 201.134L130.904 200.955L130.13 200.462L129.802 200.221L129.283 199.807L128.713 199.302L128.299 198.925L127.608 198.24L127.304 197.899L126.882 197.403L126.414 196.845L126.148 196.482L125.652 195.805L125.442 195.47L125.002 194.764L124.793 194.37L124.464 193.732L124.078 192.837L123.925 191.952L124.005 191.088L124.144 190.679L124.518 189.727L124.73 189.285L125.022 188.709L125.561 187.794L126.275 186.793L126.978 185.974L127.367 185.574L127.769 185.183L128.588 184.483L129.586 183.766L130.502 183.227L131.077 182.938L131.519 182.725L132.472 182.351L132.88 182.21L133.745 182.13L134.632 182.283L135.525 182.672L136.162 183L136.556 183.21L137.265 183.647L137.597 183.859L138.277 184.353L138.64 184.622L139.196 185.09L139.694 185.512L140.035 185.812L140.718 186.504L141.095 186.918L141.599 187.491L142.013 188.009L142.254 188.335L142.75 189.112ZM133.203 187.811L134.226 187.028L135.077 186.445L135.678 186.028L136.058 185.671L136.077 185.645L136.375 185.251L136.539 184.769L136.069 184.789L135.301 184.931L134.147 185.501L133.206 186.048L132.299 186.654L131.434 187.32L130.612 188.043L130.224 188.432L129.836 188.817L129.116 189.639L128.449 190.507L127.84 191.414L127.296 192.355L126.726 193.508L126.584 194.277L126.564 194.747L127.043 194.583L127.437 194.285L127.463 194.262L127.82 193.883L128.24 193.285L128.824 192.431L129.606 191.411L130.434 190.441L130.833 190.019L131.31 189.517L131.814 189.041L132.236 188.639L133.203 187.811Z" fill="white" />
                                <path id="Stroke 546" d="M142.929 189.438L142.75 189.112" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 548" d="M143.093 189.826L142.929 189.438" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 550" d="M143.326 190.509L143.093 189.826" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 552" d="M143.459 191.02L143.326 190.509" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 554" d="M143.377 191.762L143.459 191.02" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 556" d="M143.286 192.134L143.377 191.762" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 558" d="M143.144 192.477L143.286 192.134" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 560" d="M142.787 193.211L143.144 192.477" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 562" d="M142.577 193.602L142.787 193.211" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 564" d="M141.863 194.674L142.577 193.602" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 566" d="M141.089 195.703L141.863 194.674" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 568" d="M140.259 196.689L141.089 195.703" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 570" d="M139.394 197.602L140.259 196.689" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 572" d="M138.481 198.466L139.394 197.602" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 574" d="M137.498 199.297L138.481 198.466" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 576" d="M136.466 200.071L137.498 199.297" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 578" d="M135.394 200.782L136.466 200.071" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 580" d="M135.006 200.992L135.394 200.782" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 582" d="M134.269 201.352L135.006 200.992" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 584" d="M133.926 201.491L134.269 201.352" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 586" d="M133.554 201.584L133.926 201.491" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 588" d="M132.812 201.664L133.554 201.584" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 590" d="M132.304 201.533L132.812 201.664" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 592" d="M131.618 201.301L132.304 201.533" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 594" d="M131.23 201.134L131.619 201.301" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 596" d="M130.904 200.955L131.23 201.134" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 598" d="M130.13 200.462L130.904 200.955" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 600" d="M129.802 200.221L130.13 200.462" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 602" d="M129.283 199.807L129.801 200.221" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 604" d="M128.713 199.302L129.283 199.807" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 606" d="M128.299 198.925L128.713 199.302" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 608" d="M127.607 198.24L128.299 198.925" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 610" d="M127.304 197.899L127.608 198.24" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 612" d="M126.882 197.403L127.304 197.899" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 614" d="M126.414 196.845L126.882 197.403" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 616" d="M126.148 196.482L126.414 196.845" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 618" d="M125.652 195.805L126.148 196.482" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 620" d="M125.442 195.47L125.652 195.805" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 622" d="M125.002 194.764L125.442 195.47" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 624" d="M124.793 194.37L125.002 194.764" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 626" d="M124.464 193.732L124.793 194.37" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 628" d="M124.078 192.837L124.464 193.732" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 630" d="M123.925 191.952L124.078 192.837" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 632" d="M124.005 191.088L123.925 191.952" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 634" d="M124.144 190.68L124.005 191.088" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 636" d="M124.518 189.727L124.144 190.679" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 638" d="M124.73 189.285L124.518 189.727" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 640" d="M125.022 188.709L124.73 189.285" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 642" d="M125.561 187.794L125.022 188.709" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 644" d="M126.275 186.793L125.561 187.794" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 646" d="M126.978 185.974L126.275 186.793" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 648" d="M127.367 185.574L126.978 185.974" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 650" d="M127.769 185.183L127.366 185.574" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 652" d="M128.588 184.483L127.769 185.183" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 654" d="M129.586 183.766L128.588 184.483" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 656" d="M130.502 183.227L129.586 183.766" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 658" d="M131.077 182.938L130.502 183.227" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 660" d="M131.519 182.725L131.077 182.938" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 662" d="M132.472 182.351L131.519 182.725" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 664" d="M132.88 182.21L132.472 182.351" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 666" d="M133.744 182.13L132.88 182.21" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 668" d="M134.632 182.283L133.744 182.13" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 670" d="M135.525 182.672L134.632 182.283" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 672" d="M136.162 183L135.525 182.672" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 674" d="M136.556 183.21L136.162 183" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 676" d="M137.265 183.647L136.556 183.21" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 678" d="M137.597 183.859L137.265 183.647" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 680" d="M138.277 184.353L137.597 183.859" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 682" d="M138.64 184.622L138.277 184.353" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 684" d="M139.195 185.09L138.64 184.622" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 686" d="M139.694 185.512L139.196 185.09" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 688" d="M140.034 185.812L139.694 185.512" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 690" d="M140.718 186.504L140.035 185.812" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 692" d="M141.095 186.918L140.718 186.504" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 694" d="M141.599 187.491L141.095 186.918" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 696" d="M142.013 188.009L141.599 187.491" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 698" d="M142.254 188.335L142.013 188.009" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 700" d="M142.75 189.112L142.254 188.335" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 702" d="M134.226 187.029L133.203 187.811" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 704" d="M135.077 186.445L134.226 187.028" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 706" d="M135.678 186.028L135.077 186.445" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 708" d="M136.058 185.671L135.678 186.028" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 710" d="M136.077 185.645L136.058 185.671" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 712" d="M136.375 185.251L136.077 185.645" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 714" d="M136.539 184.769L136.375 185.251" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 716" d="M136.069 184.789L136.539 184.769" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 718" d="M135.301 184.931L136.069 184.789" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 720" d="M134.147 185.501L135.301 184.931" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 722" d="M133.206 186.048L134.147 185.501" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 724" d="M132.299 186.654L133.206 186.048" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 726" d="M131.434 187.32L132.299 186.654" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 728" d="M130.612 188.043L131.434 187.32" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 730" d="M130.224 188.432L130.612 188.043" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 732" d="M129.835 188.817L130.224 188.432" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 734" d="M129.115 189.639L129.835 188.817" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 736" d="M128.449 190.507L129.116 189.639" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 738" d="M127.84 191.414L128.449 190.507" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 740" d="M127.296 192.355L127.84 191.414" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 742" d="M126.726 193.508L127.296 192.355" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 744" d="M126.584 194.277L126.726 193.508" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 746" d="M126.564 194.747L126.584 194.277" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 748" d="M127.043 194.583L126.564 194.747" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 750" d="M127.437 194.285L127.043 194.583" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 752" d="M127.463 194.263L127.438 194.285" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 754" d="M127.82 193.883L127.463 194.263" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 756" d="M128.24 193.285L127.82 193.883" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 758" d="M128.823 192.431L128.24 193.285" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 760" d="M129.606 191.411L128.823 192.431" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 762" d="M130.434 190.441L129.606 191.411" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 764" d="M130.833 190.019L130.434 190.441" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 766" d="M131.309 189.517L130.833 190.019" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 768" d="M131.814 189.041L131.31 189.517" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 770" d="M132.236 188.639L131.814 189.041" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 772" d="M133.203 187.811L132.236 188.639" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 774" d="M137.251 184.846L136.695 184.764" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 776" d="M137.897 185.005L137.251 184.846" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 778" d="M138.498 185.228L137.897 185.005" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 780" d="M139.054 185.512L138.498 185.228" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 782" d="M139.794 186.053L139.054 185.512" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 784" d="M136.695 184.764L136.54 184.769" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 786" d="M139.794 186.053L140.035 185.812" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 788" d="M126.641 195.459L126.559 194.903" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 790" d="M126.8 196.102L126.641 195.459" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 792" d="M127.021 196.706L126.8 196.102" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 794" d="M127.304 197.262L127.021 196.706" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 796" d="M127.846 198.001L127.304 197.262" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 798" d="M126.559 194.903L126.564 194.747" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 800" d="M127.846 198.001L127.607 198.24" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 802" fill-rule="evenodd" clip-rule="evenodd" d="M8.47837 254.042V253.476H15.0094V266.231H0.0197754V254.042H8.47837Z" fill="#E6E6E6" />
                                <path id="Fill 804" fill-rule="evenodd" clip-rule="evenodd" d="M46.1907 253.476H53.2575V266.231H46.1907V253.476Z" fill="#E6E6E6" />
                                <path id="Fill 806" fill-rule="evenodd" clip-rule="evenodd" d="M84.4385 266.231V253.476H93.5179V254.04L102.022 254.042V253.476H108.553V266.231H84.4385Z" fill="#E6E6E6" />
                                <path id="Fill 808" fill-rule="evenodd" clip-rule="evenodd" d="M139.734 266.231V253.476H146.801V266.231H139.734Z" fill="#E6E6E6" />
                                <path id="Fill 810" fill-rule="evenodd" clip-rule="evenodd" d="M187.77 253.476V254.042H194.857V253.476H194.905V266.231H177.982V253.476H187.77Z" fill="#E6E6E6" />
                                <path id="Fill 812" fill-rule="evenodd" clip-rule="evenodd" d="M46.1907 266.231H15.0095V253.476H46.1907V266.231Z" fill="white" />
                                <path id="Fill 814" fill-rule="evenodd" clip-rule="evenodd" d="M84.4385 266.231H53.2573V253.476H84.4385V266.231Z" fill="white" />
                                <path id="Fill 816" fill-rule="evenodd" clip-rule="evenodd" d="M139.734 266.231H108.553V253.476H139.734V266.231Z" fill="white" />
                                <path id="Fill 818" fill-rule="evenodd" clip-rule="evenodd" d="M177.982 266.231H146.801V253.476H177.982V266.231Z" fill="white" />
                                <path id="Stroke 820" d="M46.1907 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 822" d="M46.1907 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 824" d="M46.1907 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 826" d="M15.0095 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 828" d="M15.0095 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 830" d="M15.0095 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 832" d="M84.4385 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 834" d="M84.4385 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 836" d="M84.4385 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 838" d="M53.2573 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 840" d="M53.2573 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 842" d="M53.2573 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 844" d="M139.734 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 846" d="M139.734 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 848" d="M139.734 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 850" d="M108.553 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 852" d="M108.553 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 854" d="M108.553 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 856" d="M177.982 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 858" d="M177.982 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 860" d="M177.982 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 862" d="M146.801 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 864" d="M146.801 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 866" d="M146.801 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 868" d="M0.0197754 266.231H15.0094" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 870" d="M46.1907 266.231H53.2575" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 872" d="M84.4385 266.231H108.553" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 874" d="M139.734 266.231H146.801" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 876" d="M177.982 266.231H194.905" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 878" d="M194.905 266.231V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 880" d="M187.77 253.476H177.982" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 882" d="M146.801 253.476H139.734" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 884" d="M108.553 253.476H102.022" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 886" d="M93.5179 253.476H84.4385" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 888" d="M53.2575 253.476H46.1907" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 890" d="M15.0095 253.476H8.47852" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 892" d="M0.0197754 266.231V254.042" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 894" d="M15.0095 266.231H46.1907" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 896" d="M15.0095 253.476H46.1907" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 898" fill-rule="evenodd" clip-rule="evenodd" d="M46.1907 261.129H15.0095V256.594H46.1907V261.129Z" fill="white" />
                                <path id="Fill 900" fill-rule="evenodd" clip-rule="evenodd" d="M43.9229 261.129V256.594H46.1906V261.129H43.9229Z" fill="white" />
                                <g id="Group 909">
                                    <g id="Group 904">
                                        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="46" y="260" width="1" height="2">
                                            <path id="Clip 903" fill-rule="evenodd" clip-rule="evenodd" d="M46.0063 260.945H46.1906V261.129H46.0063V260.945Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0)">
                                            <path id="Stroke 902" d="M46.0063 261.129L46.1906 260.945" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                    <path id="Stroke 905" d="M44.0022 261.129L46.1905 258.941" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                    <path id="Stroke 907" d="M43.9229 259.204L46.1906 256.937" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <path id="Fill 910" fill-rule="evenodd" clip-rule="evenodd" d="M15.0095 261.129V256.594H17.2772V261.129H15.0095Z" fill="white" />
                                <g id="Group 918">
                                    <path id="Stroke 912" d="M15.9421 261.129L17.2773 259.791" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                    <path id="Stroke 914" d="M15.0095 260.055L17.2772 257.787" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                    <path id="Stroke 916" d="M15.0095 258.051L16.4694 256.594" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <path id="Stroke 919" d="M15.0095 261.129H46.1907" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 921" d="M15.0095 256.594H46.1907" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 923" d="M43.9229 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 925" d="M43.9229 256.594H46.1906" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 927" d="M46.1907 256.594V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 929" d="M46.1906 261.129H43.9229" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 931" d="M15.0095 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 933" d="M15.0095 256.594H17.2772" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 935" d="M17.2771 256.594V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 937" d="M17.2772 261.129H15.0095" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 939" d="M15.0095 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 941" d="M15.0095 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 943" d="M15.0095 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 945" d="M15.0095 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 947" d="M46.1907 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 949" d="M46.1907 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 951" d="M46.1907 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 953" d="M46.1907 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 955" d="M53.2573 266.231H84.4385" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 957" d="M53.2573 253.476H84.4385" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 959" fill-rule="evenodd" clip-rule="evenodd" d="M84.4385 261.129H53.2573V256.594H84.4385V261.129Z" fill="white" />
                                <path id="Fill 961" fill-rule="evenodd" clip-rule="evenodd" d="M82.1709 261.129V256.594H84.4386V261.129H82.1709Z" fill="white" />
                                <g id="Group 969">
                                    <g id="Group 965">
                                        <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="84" y="260" width="1" height="2">
                                            <path id="Clip 964" fill-rule="evenodd" clip-rule="evenodd" d="M84.0898 260.78H84.4385V261.129H84.0898V260.78Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask1)">
                                            <path id="Stroke 963" d="M84.0898 261.129L84.4385 260.78" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                    <g id="Group 968">
                                        <mask id="mask2" mask-type="alpha" maskUnits="userSpaceOnUse" x="82" y="258" width="3" height="4">
                                            <path id="Clip 967" fill-rule="evenodd" clip-rule="evenodd" d="M82.1709 258.776H84.4386V261.044H82.1709V258.776Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask2)">
                                            <path id="Stroke 966" d="M82.1709 261.044L84.4386 258.776" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                </g>
                                <path id="Fill 970" fill-rule="evenodd" clip-rule="evenodd" d="M53.2573 261.129V256.594H55.5222V261.129H53.2573Z" fill="white" />
                                <g id="Group 978">
                                    <g id="Group 974">
                                        <mask id="mask3" mask-type="alpha" maskUnits="userSpaceOnUse" x="54" y="259" width="2" height="3">
                                            <path id="Clip 973" fill-rule="evenodd" clip-rule="evenodd" d="M54.0256 259.63H55.5223V261.129H54.0256V259.63Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask3)">
                                            <path id="Stroke 972" d="M54.0256 261.129L55.5252 259.63" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                    <g id="Group 977">
                                        <mask id="mask4" mask-type="alpha" maskUnits="userSpaceOnUse" x="53" y="257" width="3" height="3">
                                            <path id="Clip 976" fill-rule="evenodd" clip-rule="evenodd" d="M53.2573 257.625H55.5222V259.893H53.2573V257.625Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask4)">
                                            <path id="Stroke 975" d="M53.2573 259.893L55.525 257.625" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                </g>
                                <path id="Stroke 979" d="M53.2573 261.129H84.4385" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 981" d="M53.2573 256.594H84.4385" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 983" d="M82.1709 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 985" d="M82.1709 256.594H84.4386" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 987" d="M84.4385 256.594V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 989" d="M84.4386 261.129H82.1709" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 991" d="M53.2573 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 993" d="M53.2573 256.594H55.525" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 995" d="M55.5251 256.594V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 997" d="M55.525 261.129H53.2573" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 999" d="M53.2573 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1001" d="M53.2573 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1003" d="M53.2573 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1005" d="M53.2573 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1007" d="M84.4385 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1009" d="M84.4385 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1011" d="M84.4385 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1013" d="M84.4385 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1015" d="M108.553 266.231H139.734" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1017" d="M108.553 253.476H139.734" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1019" fill-rule="evenodd" clip-rule="evenodd" d="M139.734 261.129H108.553V256.594H139.734V261.129Z" fill="white" />
                                <path id="Fill 1021" fill-rule="evenodd" clip-rule="evenodd" d="M137.466 261.129V256.594H139.734V261.129H137.466Z" fill="white" />
                                <g id="Group 1029">
                                    <g id="Group 1025">
                                        <mask id="mask5" mask-type="alpha" maskUnits="userSpaceOnUse" x="137" y="257" width="3" height="3">
                                            <path id="Clip 1024" fill-rule="evenodd" clip-rule="evenodd" d="M137.466 257.6H139.734V259.868H137.466V257.6Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask5)">
                                            <path id="Stroke 1023" d="M137.466 259.868L139.734 257.6" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                    <g id="Group 1028">
                                        <mask id="mask6" mask-type="alpha" maskUnits="userSpaceOnUse" x="137" y="256" width="2" height="2">
                                            <path id="Clip 1027" fill-rule="evenodd" clip-rule="evenodd" d="M137.466 256.594H138.736V257.864H137.466V256.594Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask6)">
                                            <path id="Stroke 1026" d="M137.466 257.864L138.736 256.594" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                </g>
                                <path id="Fill 1030" fill-rule="evenodd" clip-rule="evenodd" d="M108.553 261.129V256.594H110.821V261.129H108.553Z" fill="white" />
                                <g id="Group 1038">
                                    <g id="Group 1034">
                                        <mask id="mask7" mask-type="alpha" maskUnits="userSpaceOnUse" x="108" y="256" width="3" height="3">
                                            <path id="Clip 1033" fill-rule="evenodd" clip-rule="evenodd" d="M108.553 256.594H110.676V258.714H108.553V256.594Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask7)">
                                            <path id="Stroke 1032" d="M108.553 258.714L110.676 256.594" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                    <g id="Group 1037">
                                        <mask id="mask8" mask-type="alpha" maskUnits="userSpaceOnUse" x="108" y="256" width="2" height="2">
                                            <path id="Clip 1036" fill-rule="evenodd" clip-rule="evenodd" d="M108.553 256.594H109.553V257.594H108.553V256.594Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask8)">
                                            <path id="Stroke 1035" d="M108.553 256.71L108.669 256.594" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                </g>
                                <path id="Stroke 1039" d="M108.553 261.129H139.734" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1041" d="M108.553 256.594H139.734" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1043" d="M137.466 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1045" d="M137.466 256.594H139.734" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1047" d="M139.734 256.594V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1049" d="M139.734 261.129H137.466" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1051" d="M108.553 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1053" d="M108.553 256.594H110.821" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1055" d="M110.821 256.594V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1057" d="M110.821 261.129H108.553" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1059" d="M108.553 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1061" d="M108.553 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1063" d="M108.553 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1065" d="M108.553 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1067" d="M139.734 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1069" d="M139.734 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1071" d="M139.734 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1073" d="M139.734 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1075" d="M146.801 266.231H177.982" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1077" d="M146.801 253.476H177.982" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1079" fill-rule="evenodd" clip-rule="evenodd" d="M177.982 261.129H146.801V256.594H177.982V261.129Z" fill="white" />
                                <path id="Fill 1081" fill-rule="evenodd" clip-rule="evenodd" d="M175.714 261.129V256.594H177.982V261.129H175.714Z" fill="white" />
                                <g id="Group 1089">
                                    <path id="Stroke 1083" d="M176.293 261.129L177.982 259.44" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                    <path id="Stroke 1085" d="M175.714 259.703L177.982 257.436" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                    <path id="Stroke 1087" d="M175.714 257.699L176.82 256.594" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <path id="Fill 1090" fill-rule="evenodd" clip-rule="evenodd" d="M146.801 261.129V256.594H149.066V261.129H146.801Z" fill="white" />
                                <g id="Group 1097">
                                    <g id="Group 1094">
                                        <mask id="mask9" mask-type="alpha" maskUnits="userSpaceOnUse" x="146" y="258" width="4" height="3">
                                            <path id="Clip 1093" fill-rule="evenodd" clip-rule="evenodd" d="M146.801 258.289H149.066V260.556H146.801V258.289Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask9)">
                                            <path id="Stroke 1092" d="M146.801 260.556L149.069 258.289" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                    <path id="Stroke 1095" d="M146.801 258.552L148.76 256.594" stroke="#FFCC99" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <path id="Stroke 1098" d="M146.801 261.129H177.982" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1100" d="M146.801 256.594H177.982" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1102" d="M175.714 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1104" d="M175.714 256.594H177.982" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1106" d="M177.982 256.594V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1108" d="M177.982 261.129H175.714" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1110" d="M146.801 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1112" d="M146.801 256.594H149.069" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1114" d="M149.069 256.594V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1116" d="M149.069 261.129H146.801" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1118" d="M146.801 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1120" d="M146.801 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1122" d="M146.801 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1124" d="M146.801 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1126" d="M177.982 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1128" d="M177.982 261.129V256.594" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1130" d="M177.982 266.231V261.129" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1132" d="M177.982 256.594V253.476" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1134" fill-rule="evenodd" clip-rule="evenodd" d="M65.8745 7.41937H187.77V7.42221H65.8745V7.41937Z" fill="#E6E6E6" />
                                <path id="Stroke 1136" d="M65.8745 7.42224H187.77" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1138" fill-rule="evenodd" clip-rule="evenodd" d="M8.47563 137.833L8.47846 211.523H-0.0254857V211.922L-0.0283203 137.836L8.47563 137.833Z" fill="#E6E6E6" />
                                <path id="Stroke 1142" d="M8.47842 211.523L8.47559 137.833" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1144" d="M8.47563 137.833L-0.0283203 137.836" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1146" fill-rule="evenodd" clip-rule="evenodd" d="M93.5151 85.4998L96.3498 82.6652L96.3526 103.817H93.518L93.5151 85.4998Z" fill="#E6E6E6" />
                                <path id="Stroke 1148" d="M93.5151 85.4998L93.518 103.817" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1150" d="M93.5181 103.817H96.3527" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1152" d="M96.3527 103.817L96.3499 85.4998" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1154" fill-rule="evenodd" clip-rule="evenodd" d="M136.744 40.1709V56.918H133.342V40.1709H136.744Z" fill="#E6E6E6" />
                                <path id="Fill 1156" fill-rule="evenodd" clip-rule="evenodd" d="M133.342 91.1663V79.8787H136.744V87.7647L133.342 91.1663Z" fill="#E6E6E6" />
                                <path id="Stroke 1158" d="M133.342 79.8787V80.9275" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1160" d="M133.909 79.8787H133.342" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1162" d="M136.744 79.8787V80.9275" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1164" d="M136.744 79.8787H133.909" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1166" d="M133.342 56.918V55.8692" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1168" d="M133.909 56.918H133.342" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1170" d="M136.744 56.918V55.8692" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1172" d="M136.744 56.918H133.909" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1174" d="M136.744 87.7647V79.8787" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1176" d="M136.744 56.918V40.1709" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1178" d="M136.744 40.1709H133.342" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1180" d="M133.342 40.1709V56.918" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1182" d="M133.342 79.8787V91.1663" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1184" d="M136.744 58.0519C148.173 58.0519 157.437 67.3155 157.437 78.7449" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1186" fill-rule="evenodd" clip-rule="evenodd" d="M133.909 56.918H136.744V58.0519H133.909V56.918Z" fill="white" />
                                <path id="Fill 1188" fill-rule="evenodd" clip-rule="evenodd" d="M136.744 79.8787H133.909V78.7449H136.744V79.8787Z" fill="white" />
                                <path id="Stroke 1190" d="M133.909 56.918V58.0519" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1192" d="M133.909 58.0519H136.744" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1194" d="M136.744 58.0519V56.918" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1196" d="M136.744 56.918H133.909" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1198" d="M136.744 79.8787V78.7449" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1200" d="M136.744 78.7449H133.909" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1202" d="M133.909 78.7449V79.8787" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1204" d="M133.909 79.8787H136.744" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1206" d="M136.744 78.7449H157.437" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1208" d="M136.744 56.918H133.909" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1210" d="M136.744 56.918H133.909" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1212" d="M133.909 56.918H133.342" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1214" d="M136.744 56.918V55.8692" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1216" d="M136.744 56.918V55.8692" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1218" d="M133.909 56.918H133.342" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1220" d="M133.342 56.918V55.8692" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1222" d="M133.342 56.918V55.8692" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1224" d="M136.744 79.8787H133.909" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1226" d="M136.744 79.8787H133.909" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1228" d="M133.909 79.8787H133.342" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1230" d="M136.744 79.8787V80.9275" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1232" d="M136.744 79.8787V80.9275" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1234" d="M133.909 79.8787H133.342" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1236" d="M133.342 79.8787V80.9275" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1238" d="M133.342 79.8787V80.9275" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1240" fill-rule="evenodd" clip-rule="evenodd" d="M7.20288 85.4998V82.6652H66.9573V85.4998H7.20288Z" fill="#E6E6E6" />
                                <path id="Fill 1242" fill-rule="evenodd" clip-rule="evenodd" d="M92.7527 85.4998V82.6652H96.3499L93.5152 85.4998H92.7527Z" fill="#E6E6E6" />
                                <path id="Stroke 1244" d="M92.7527 82.6652H93.8015" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1246" d="M92.7527 85.4998H93.8015" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1248" d="M92.7527 85.4998V82.6652" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1250" d="M66.9573 82.6652H65.9084" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1252" d="M66.9573 85.4998H65.9084" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1254" d="M66.9573 85.4998V82.6652" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1256" d="M7.20288 85.4998H66.9573" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1258" d="M92.7527 85.4998H93.5152" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1260" d="M96.3499 82.6652H92.7527" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1262" d="M66.9573 82.6652H7.20288" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1264" d="M7.20288 82.6652V85.4998" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1266" d="M91.6187 109.027C78.6246 109.027 68.0911 98.4939 68.0911 85.4998" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1268" fill-rule="evenodd" clip-rule="evenodd" d="M66.9573 82.6652H68.0911V85.4998H66.9573V82.6652Z" fill="white" />
                                <path id="Fill 1270" fill-rule="evenodd" clip-rule="evenodd" d="M92.7525 85.4998H91.6187V82.6652H92.7525V85.4998Z" fill="white" />
                                <path id="Stroke 1272" d="M66.9573 82.6652H68.0911" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1274" d="M68.0911 82.6652V85.4998" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1276" d="M68.0911 85.4998H66.9573" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1278" d="M66.9573 85.4998V82.6652" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1280" d="M92.7525 85.4998H91.6187" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1282" d="M91.6187 85.4998V82.6652" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1284" d="M91.6187 82.6652H92.7525" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1286" d="M92.7527 82.6652V85.4998" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1288" d="M91.6187 85.4998V109.027" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1290" d="M66.9573 85.4998V82.6652" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1292" d="M66.9573 85.4998V82.6652" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1294" d="M66.9573 85.4998H65.9084" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1296" d="M66.9573 85.4998H65.9084" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1298" d="M66.9573 82.6652H65.9084" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1300" d="M66.9573 82.6652H65.9084" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1302" d="M92.7527 85.4998V82.6652" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1304" d="M92.7527 85.4998V82.6652" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1306" d="M92.7527 85.4998H93.8015" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1308" d="M92.7527 85.4998H93.8015" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1310" d="M92.7527 82.6652H93.8015" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1312" d="M92.7527 82.6652H93.8015" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1314" fill-rule="evenodd" clip-rule="evenodd" d="M-0.0253906 33.0588H26.4729V40.1454H7.06123L-0.0253906 33.0588Z" fill="#E6E6E6" />
                                <path id="Fill 1316" fill-rule="evenodd" clip-rule="evenodd" d="M58.7907 33.0588L65.8773 40.1454H55.1028V33.0588H58.7907Z" fill="#E6E6E6" />
                                <path id="Stroke 1318" d="M26.4729 40.1454H25.4241" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1320" d="M26.4729 36.4604V40.1454" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1322" d="M26.4729 33.0588H25.4241" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1324" d="M26.4729 33.0588V33.6257" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1326" d="M26.4729 33.0588V33.6257" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1328" d="M26.4729 33.6257V36.4604" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1330" d="M55.1028 40.1454H56.1516" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1332" d="M55.1028 36.4604V40.1454" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1334" d="M55.1028 33.0588H56.1516" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1336" d="M55.1028 33.0588V33.6257" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1338" d="M55.1028 33.0588V33.6257" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1340" d="M55.1028 33.6257V36.4604" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1342" d="M58.7907 33.0588H55.1028" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1344" d="M26.4729 33.0588H-0.0253906" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1346" d="M7.06104 40.1454H26.4727" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1348" d="M55.1028 40.1454H65.8773" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1350" d="M27.6067 7.26349V7.26349C42.1683 7.26349 53.9689 19.067 53.9689 33.6257" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1352" fill-rule="evenodd" clip-rule="evenodd" d="M55.1029 36.4604H53.969V33.6257H55.1029V36.4604Z" fill="white" />
                                <path id="Fill 1354" fill-rule="evenodd" clip-rule="evenodd" d="M26.4729 33.6257H27.6068V36.4604H26.4729V33.6257Z" fill="white" />
                                <path id="Stroke 1356" d="M55.1029 36.4604H53.969" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1358" d="M53.969 36.4604V33.6257" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1360" d="M53.969 33.6257H55.1029" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1362" d="M55.1028 33.6257V36.4604" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1364" d="M26.4729 33.6257H27.6068" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1366" d="M27.6067 33.6257V36.4604" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1368" d="M27.6068 36.4604H26.4729" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1370" d="M26.4729 36.4604V33.6257" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1372" d="M27.6067 33.6257V7.26349" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1374" d="M55.1028 33.6257V36.4604" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1376" d="M55.1028 33.6257V36.4604" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1378" d="M55.1028 33.0588V33.6257" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1380" d="M55.1028 33.0588V33.6257" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1382" d="M55.1028 36.4604V40.1454" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1384" d="M55.1028 33.0588V33.6257" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1386" d="M55.1028 33.0588H56.1516" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1388" d="M55.1028 33.0588H56.1516" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1390" d="M55.1028 36.4604V40.1454" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1392" d="M55.1028 40.1454H56.1516" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1394" d="M55.1028 40.1454H56.1516" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1396" d="M26.4729 33.6257V36.4604" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1398" d="M26.4729 33.6257V36.4604" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1400" d="M26.4729 33.0588V33.6257" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1402" d="M26.4729 33.0588V33.6257" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1404" d="M26.4729 36.4604V40.1454" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1406" d="M26.4729 33.0588V33.6257" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1408" d="M26.4729 33.0588H25.4241" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1410" d="M26.4729 33.0588H25.4241" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1412" d="M26.4729 36.4604V40.1454" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1414" d="M26.4729 40.1454H25.4241" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1416" d="M26.4729 40.1454H25.4241" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1420" fill-rule="evenodd" clip-rule="evenodd" d="M65.8745 7.41937V7.42221L65.8773 40.1454L58.7907 33.0588L58.7878 7.41937H65.8745Z" fill="#E6E6E6" />
                                <path id="Stroke 1422" d="M58.7878 0.335602L58.7907 33.0588" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1424" d="M65.8773 40.1454L65.8745 7.42224" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1426" fill-rule="evenodd" clip-rule="evenodd" d="M96.3499 82.6652H102.314V85.4998H96.3499V82.6652Z" fill="#E6E6E6" />
                                <path id="Fill 1428" fill-rule="evenodd" clip-rule="evenodd" d="M128.109 85.4998V82.6652H133.345V85.4998H128.109Z" fill="#E6E6E6" />
                                <path id="Stroke 1430" d="M102.314 82.6652H101.265" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1432" d="M102.314 85.4998H101.265" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1434" d="M102.314 85.4998V82.6652" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1436" d="M128.109 82.6652H129.158" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1438" d="M128.109 85.4998H129.158" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1440" d="M128.109 85.4998V82.6652" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1442" d="M96.3499 85.4998H102.314" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1444" d="M128.109 85.4998H133.345" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1446" d="M133.345 85.4998V82.6652" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1448" d="M133.345 82.6652H128.109" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1450" d="M102.314 82.6652H96.3499" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1452" d="M126.975 85.4998C126.975 98.4939 116.442 109.027 103.448 109.027" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1454" fill-rule="evenodd" clip-rule="evenodd" d="M128.109 82.6652V85.4998H126.975V82.6652H128.109Z" fill="white" />
                                <path id="Fill 1456" fill-rule="evenodd" clip-rule="evenodd" d="M102.314 85.4998V82.6652H103.448V85.4998H102.314Z" fill="white" />
                                <path id="Stroke 1458" d="M128.109 82.6652H126.975" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1460" d="M126.975 82.6652V85.4998" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1462" d="M126.975 85.4998H128.109" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1464" d="M128.109 85.4998V82.6652" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1466" d="M102.314 85.4998H103.448" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1468" d="M103.448 85.4998V82.6652" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1470" d="M103.448 82.6652H102.314" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1472" d="M102.314 82.6652V85.4998" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1474" d="M103.448 85.4998V109.027" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1476" d="M128.109 85.4998V82.6652" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1478" d="M128.109 85.4998V82.6652" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1480" d="M128.109 85.4998H129.158" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1482" d="M128.109 85.4998H129.158" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1484" d="M128.109 82.6652H129.158" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1486" d="M128.109 82.6652H129.158" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1488" d="M102.314 85.4998V82.6652" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1490" d="M102.314 85.4998V82.6652" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1492" d="M102.314 85.4998H101.265" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1494" d="M102.314 85.4998H101.265" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1496" d="M102.314 82.6652H101.265" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1498" d="M102.314 82.6652H101.265" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1500" fill-rule="evenodd" clip-rule="evenodd" d="M93.4954 137.833H93.5152H96.33L96.3555 211.52H93.5209L93.4954 137.833Z" fill="#E6E6E6" />
                                <path id="Stroke 1502" d="M93.4954 137.833L93.5209 211.52" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1504" d="M96.3553 211.52L96.3298 137.833" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1506" d="M93.5152 137.833H93.4954" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1508" fill-rule="evenodd" clip-rule="evenodd" d="M65.8774 45.8147H92.1829V48.6493H63.0427L65.8774 45.8147Z" fill="#E6E6E6" />
                                <path id="Fill 1510" fill-rule="evenodd" clip-rule="evenodd" d="M115.144 48.6493V45.8147H133.342V48.6493H115.144Z" fill="#E6E6E6" />
                                <path id="Stroke 1512" d="M115.144 48.6493V45.8147" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1514" d="M92.1829 48.6493V45.8147" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1516" d="M63.0427 48.6494H92.1829" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1518" d="M115.144 48.6494H133.342" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1520" d="M133.342 48.6493V45.8147" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1522" d="M133.342 45.8147H115.144" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1524" d="M92.1827 45.8147H65.8772" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1526" d="M115.144 49.925H92.1829" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1528" d="M92.1829 48.6493V45.8147" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1530" d="M115.144 48.6493V45.8147" stroke="black" stroke-width="0.1" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1532" fill-rule="evenodd" clip-rule="evenodd" d="M70.8125 211.503L93.5209 211.52V214.355L70.8125 214.338V211.503Z" fill="white" />
                                <path id="Stroke 1534" d="M70.8125 214.338L93.518 214.355" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1536" d="M93.5209 211.52L70.8125 211.503" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1538" d="M70.8125 211.503V214.338" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1540" fill-rule="evenodd" clip-rule="evenodd" d="M8.47852 214.357V211.523H31.1557V214.357H8.47852Z" fill="white" />
                                <path id="Stroke 1542" d="M8.47852 214.357H31.1557" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1544" d="M31.1558 214.357V211.523" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1546" d="M31.1557 211.523H8.47852" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 1548" fill-rule="evenodd" clip-rule="evenodd" d="M63.0427 40.1454H65.8774V45.8147L63.0427 48.6494V40.1454Z" fill="#E6E6E6" />
                                <path id="Stroke 1550" d="M63.0427 40.1454V48.6494" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1552" d="M65.8772 45.8147V40.1454" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 1554" d="M65.8774 40.1454H63.0427" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 2300" fill-rule="evenodd" clip-rule="evenodd" d="M8.47856 254.042H-0.0253906V211.523H8.47856V254.042Z" fill="#E6E6E6" />
                                <path id="Stroke 2302" d="M8.47852 254.042V211.523" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2304" d="M8.47856 211.523H-0.0253906" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2308" d="M-0.0253906 254.042H8.47856" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 2320" fill-rule="evenodd" clip-rule="evenodd" d="M162.252 187.04H187.764V243.733H162.252V187.04Z" fill="white" />
                                <path id="Stroke 2322" d="M187.764 187.04H162.252" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2324" d="M187.764 243.733V187.04" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2326" d="M162.252 243.733H187.764" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2328" d="M162.252 187.04V243.733" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2330" d="M162.252 191.292H183.512" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2332" d="M162.252 239.481H183.512" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2334" d="M183.512 191.292V239.481" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2336" d="M162.252 207.353H183.512" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2338" d="M162.252 223.417H183.512" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 2340" fill-rule="evenodd" clip-rule="evenodd" d="M140.993 202.63H155.166V228.142H140.993V202.63Z" fill="white" />
                                <path id="Stroke 2342" d="M155.166 202.63H140.993" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2344" d="M155.166 228.142V202.63" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2346" d="M140.993 228.142H155.166" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2348" d="M140.993 202.63V228.142" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 2350" fill-rule="evenodd" clip-rule="evenodd" d="M19.3181 210.244H45.0539V211.095H19.3181V210.244Z" fill="white" />
                                <path id="Stroke 2352" d="M19.3181 210.244H45.0539" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2354" d="M45.054 210.244V211.095" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2356" d="M45.0539 211.095H19.3181" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2358" d="M19.3181 211.095V210.244" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 2360" fill-rule="evenodd" clip-rule="evenodd" d="M53.6741 210.244H79.4099V211.095H53.6741V210.244Z" fill="white" />
                                <path id="Stroke 2362" d="M53.6741 210.244H79.4099" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2364" d="M79.4099 210.244V211.095" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2366" d="M79.4099 211.095H53.6741" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2368" d="M53.6741 211.095V210.244" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 2370" fill-rule="evenodd" clip-rule="evenodd" d="M136.758 7.41937H187.782V28.6764H136.758V7.41937Z" fill="white" />
                                <path id="Stroke 2372" d="M136.758 7.41937H187.782" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2374" d="M187.781 7.41937V28.6764" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2376" d="M187.782 28.6764H136.758" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2378" d="M136.758 28.6764V7.41937" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 2380" fill-rule="evenodd" clip-rule="evenodd" d="M136.758 7.41937H187.782V28.6764H136.758V7.41937Z" fill="white" />
                                <path id="Stroke 2382" d="M136.758 7.41937H187.782" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2384" d="M187.781 7.41937V28.6764" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2386" d="M187.782 28.6764H136.758" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2388" d="M136.758 28.6764V7.41937" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2390" d="M141.684 12.346H182.858" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2392" d="M182.858 12.346V23.7526" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2394" d="M182.858 23.7526H141.684" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2396" d="M141.684 23.7526V12.346" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2398" d="M138.728 9.38947H185.811" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2400" d="M185.811 9.38947V26.7063" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2402" d="M185.811 26.7064H138.728" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2404" d="M138.728 26.7063V9.38947" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2406" d="M138.728 9.38947L141.684 12.346" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2408" d="M138.728 26.7063L141.684 23.7526" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2410" d="M185.811 26.7063L182.858 23.7526" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2412" d="M185.811 9.38947L182.858 12.346" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2414" d="M141.684 12.346H182.858" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2416" d="M182.858 12.346V23.7526" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2418" d="M182.858 23.7526H141.684" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2420" d="M141.684 23.7526V12.346" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2422" d="M162.978 14.0468C162.978 13.6528 162.661 13.3381 162.269 13.3381C161.878 13.3381 161.561 13.6528 161.561 14.0468C161.561 14.438 161.878 14.7555 162.269 14.7555C162.661 14.7555 162.978 14.438 162.978 14.0468" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 2424" fill-rule="evenodd" clip-rule="evenodd" d="M149.48 46.2597L136.749 46.2654L136.744 34.9268L149.474 34.9211L150.727 35.0515L151.909 35.4456L152.964 36.0748L153.831 36.9111L154.406 37.7416L154.829 38.6487L155.087 39.604L155.172 40.5876L155.087 41.5684L154.829 42.5237L154.409 43.4308L153.834 44.2641L152.969 45.1004L151.915 45.7325L150.733 46.1237L149.48 46.2597Z" fill="white" />
                                <path id="Stroke 2426" d="M149.48 46.2598L136.749 46.2654" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2428" d="M136.749 46.2654L136.744 34.9268" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2430" d="M136.744 34.9268L149.474 34.9211" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2432" d="M149.474 34.9211L150.727 35.0515" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2434" d="M150.727 35.0516L151.909 35.4456" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2436" d="M151.909 35.4456L152.963 36.0748" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2438" d="M152.963 36.0749L153.831 36.9111" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2440" d="M153.831 36.9111L154.406 37.7416" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2442" d="M154.406 37.7416L154.829 38.6487" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2444" d="M154.829 38.6487L155.087 39.604" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2446" d="M155.087 39.604L155.172 40.5876" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2448" d="M155.172 40.5876L155.087 41.5684" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2450" d="M155.087 41.5684L154.829 42.5237" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2452" d="M154.829 42.5237L154.409 43.4308" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2454" d="M154.409 43.4308L153.834 44.2642" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2456" d="M153.834 44.2642L152.969 45.1004" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2458" d="M152.969 45.1004L151.915 45.7325" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2460" d="M151.914 45.7325L150.732 46.1237" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2462" d="M150.732 46.1237L149.479 46.2598" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2466" d="M149.477 45.3385L140.933 45.3442" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2468" d="M140.933 45.3442V40.5933" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2470" d="M140.933 40.5933L140.93 35.8424" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2472" d="M140.93 35.8424L149.471 35.8396" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2476" d="M154.14 40.1086V41.0639" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2478" d="M154.139 41.0649C154.024 43.3781 152.004 45.2301 149.475 45.339" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2480" d="M149.471 35.8395C152 35.946 154.025 37.7961 154.139 40.1091" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 2482" fill-rule="evenodd" clip-rule="evenodd" d="M136.746 35.6128L136.837 35.4371L136.962 35.3265L137.098 35.2982L137.234 35.3548L139.649 37.2257L139.745 37.3334L139.816 37.4837L139.859 37.6651L139.864 37.8607L139.867 43.3259L139.862 43.5215L139.819 43.7029L139.748 43.856L139.652 43.9637L137.24 45.8346L137.104 45.8912L136.967 45.8629L136.843 45.7552L136.749 45.5766L136.746 35.6128Z" fill="white" />
                                <path id="Stroke 2484" d="M136.746 35.6128L136.837 35.4371" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2486" d="M136.837 35.4371L136.962 35.3265" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2488" d="M136.962 35.3265L137.098 35.2982" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2490" d="M137.098 35.2982L137.234 35.3548" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2492" d="M137.234 35.3549L139.649 37.2257" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2494" d="M139.649 37.2257L139.745 37.3334" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2496" d="M139.745 37.3334L139.816 37.4837" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2498" d="M139.816 37.4837L139.859 37.6651" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2500" d="M139.859 37.6651L139.865 37.8607" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2502" d="M139.865 37.8607L139.867 43.3259" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2504" d="M139.867 43.3259L139.862 43.5215" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2506" d="M139.862 43.5215L139.819 43.7029" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2508" d="M139.819 43.7029L139.748 43.856" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2510" d="M139.748 43.856L139.652 43.9637" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2512" d="M139.652 43.9637L137.24 45.8346" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2514" d="M137.24 45.8346L137.104 45.8913" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2516" d="M137.104 45.8913L136.968 45.8629" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2518" d="M136.967 45.8629L136.843 45.7552" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2520" d="M136.843 45.7552L136.749 45.5766" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2522" d="M136.749 45.5766L136.746 35.6128" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 2544" fill-rule="evenodd" clip-rule="evenodd" d="M149.477 108.177V91.1663H187.764V108.177H149.477Z" fill="white" />
                                <path id="Stroke 2546" d="M149.477 108.177H187.764" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2548" d="M149.477 91.1663H187.764" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2550" d="M149.477 108.177V91.1663" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2552" d="M187.764 108.177V91.1663" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 2554" fill-rule="evenodd" clip-rule="evenodd" d="M170.252 108.174H187.764V153.103H170.252V108.174Z" fill="white" />
                                <path id="Stroke 2556" d="M170.252 108.174V153.103" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2558" d="M187.764 108.174V153.103" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2560" d="M170.252 108.174H187.764" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2562" d="M170.252 153.103H187.764" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 2564" fill-rule="evenodd" clip-rule="evenodd" d="M156.274 177.958L155.965 177.575L155.724 177.368L155.078 176.855L154.262 176.254L153.947 175.905L153.584 175.557L153.04 174.786L152.824 174.423L152.527 173.635L152.374 172.807L152.365 171.968L152.507 171.137L152.535 171.103L152.654 170.653L153.048 169.808L153.584 169.043L154.018 168.615L154.406 168.252L155.299 167.673L156.178 167.313L156.966 167.044L158.616 166.781L159.251 166.792L160.087 166.798L161.731 167.095L162.323 167.313L162.828 167.489L163.761 168.008L164.486 168.617L164.824 168.938L165.379 169.689L165.796 170.525L165.966 171.106L166.076 171.512L166.15 172.348L166.076 173.187L165.858 173.998L165.498 174.76L165.461 174.788L165.195 175.216L164.551 175.908L163.82 176.605L163.42 176.855L162.777 177.368L162.414 177.705L162.224 177.958L162.128 178.105L162.071 178.179L161.972 178.425L161.932 178.536L161.915 178.576L161.89 178.649L161.881 178.689L161.856 178.814L161.827 178.938L161.782 179.137L161.779 179.171L161.765 179.352V179.477L161.836 179.514L162.006 179.551L162.17 179.568L162.774 179.596L163.449 179.639L164.004 179.678L164.276 179.707L164.475 179.724L164.886 179.763L165.033 179.78L165.212 179.814L165.24 179.831V180.137L165.206 180.154L165.113 180.171L165.039 180.18L164.829 180.197L164.43 180.217L164.03 180.234L163.384 180.251L162.284 180.282L161.45 180.293L160.62 180.308H157.884L156.691 180.291L154.667 180.239L154.075 180.217L153.921 180.211L153.661 180.194L153.457 180.177L153.391 180.169L153.329 180.16L153.269 180.143V179.837L153.272 179.82L153.335 179.803L153.417 179.786L153.618 179.763L154.029 179.724L154.228 179.707L154.667 179.664L155.052 179.639L155.537 179.605L156.334 179.568L156.595 179.534L156.665 179.514L156.716 179.474L156.733 179.349L156.716 179.168L156.674 178.938L156.648 178.791L156.614 178.686L156.529 178.422L156.487 178.289L156.39 178.131L156.274 177.958Z" fill="white" />
                                <path id="Stroke 2566" d="M156.666 179.514L156.717 179.474" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2568" d="M156.734 179.349L156.717 179.168" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2570" d="M156.717 179.474L156.734 179.349" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2572" d="M165.943 179.193L165.983 179.227" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2574" d="M165.983 179.228L166.028 179.253" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2576" d="M166.028 179.253L166.079 179.27" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2578" d="M166.079 179.27L166.133 179.279" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2580" d="M166.133 179.279H166.184" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2582" d="M166.184 179.279L166.238 179.27" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2584" d="M166.238 179.27L166.289 179.25" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2586" d="M166.289 179.25L166.334 179.225" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2588" d="M166.334 179.225L166.377 179.191" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2590" d="M166.377 179.191L166.411 179.148" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2592" d="M166.411 179.148L166.436 179.103" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2594" d="M166.437 179.103L166.456 179.055" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2596" d="M166.456 179.055L166.465 179.001" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2598" d="M166.465 179.001L166.468 178.95" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2600" d="M166.468 178.95L166.456 178.896" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2602" d="M166.456 178.896L166.439 178.848" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2604" d="M166.439 178.848L166.414 178.802" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2606" d="M166.414 178.802L166.38 178.763" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2608" d="M165.943 179.194L163.52 176.795" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2610" d="M154.693 168.065L152.419 165.817" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2612" d="M166.38 178.763L164.013 176.421" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2614" d="M155.22 167.725L152.856 165.383" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2616" d="M152.856 165.383L152.816 165.352" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2618" d="M152.816 165.352L152.768 165.324" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2620" d="M152.768 165.324L152.72 165.307" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2622" d="M152.72 165.307L152.666 165.298" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2624" d="M152.666 165.298H152.612" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2626" d="M152.612 165.298L152.561 165.309" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2628" d="M152.561 165.309L152.51 165.326" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2630" d="M152.51 165.326L152.465 165.352" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2632" d="M152.464 165.352L152.422 165.389" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2634" d="M152.422 165.389L152.388 165.428" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2636" d="M152.388 165.428L152.36 165.474" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2638" d="M152.36 165.474L152.343 165.525" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2640" d="M152.343 165.525L152.331 165.576" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2642" d="M152.331 165.576V165.63" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2644" d="M152.331 165.63L152.34 165.681" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2646" d="M152.34 165.681L152.36 165.729" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2648" d="M152.36 165.729L152.385 165.777" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2650" d="M152.385 165.777L152.419 165.817" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2652" d="M166.162 166.021L166.196 165.981" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2654" d="M166.196 165.981L166.224 165.936" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2656" d="M166.224 165.936L166.241 165.888" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2658" d="M166.241 165.888L166.249 165.834" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2660" d="M166.25 165.834V165.783" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2662" d="M166.249 165.783L166.241 165.729" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2664" d="M166.241 165.729L166.221 165.681" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2666" d="M166.221 165.681L166.193 165.635" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2668" d="M166.193 165.635L166.159 165.593" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2670" d="M166.159 165.593L166.119 165.559" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2672" d="M166.119 165.559L166.071 165.533" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2674" d="M166.071 165.533L166.023 165.513" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2676" d="M166.023 165.514L165.969 165.505" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2678" d="M165.969 165.505H165.915" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2680" d="M165.915 165.505L165.864 165.514" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2682" d="M165.864 165.513L165.813 165.53" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2684" d="M165.813 165.531L165.768 165.556" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2686" d="M165.768 165.556L165.725 165.59" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2688" d="M166.161 166.021L163.973 168.187" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2690" d="M155.149 176.912L152.819 179.216" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2692" d="M165.725 165.59L163.452 167.838" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2694" d="M154.65 176.54L152.382 178.782" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2696" d="M152.382 178.782L152.348 178.825" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2698" d="M152.348 178.825L152.32 178.87" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2700" d="M152.32 178.87L152.303 178.919" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2702" d="M152.303 178.919L152.294 178.97" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2704" d="M152.294 178.97V179.023" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2706" d="M152.294 179.023L152.303 179.074" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2708" d="M152.303 179.074L152.323 179.125" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2710" d="M152.323 179.125L152.351 179.171" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2712" d="M152.351 179.171L152.385 179.213" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2714" d="M152.385 179.213L152.425 179.247" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2716" d="M152.425 179.247L152.473 179.273" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2718" d="M152.473 179.273L152.521 179.293" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2720" d="M152.521 179.293L152.575 179.301" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2722" d="M152.575 179.301H152.629" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2724" d="M152.629 179.301L152.68 179.293" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2726" d="M152.68 179.293L152.731 179.276" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2728" d="M152.731 179.276L152.776 179.25" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2730" d="M152.776 179.25L152.819 179.216" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2732" d="M156.274 177.958L155.965 177.575" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2734" d="M155.965 177.575L155.724 177.368" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2736" d="M155.724 177.368L155.078 176.855" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2738" d="M155.078 176.855L154.262 176.254" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2740" d="M154.262 176.254L153.947 175.905" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2742" d="M153.947 175.905L153.584 175.557" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2744" d="M153.584 175.557L153.04 174.786" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2746" d="M153.04 174.786L152.824 174.423" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2748" d="M152.824 174.423L152.527 173.635" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2750" d="M152.527 173.635L152.374 172.807" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2752" d="M152.374 172.807L152.365 171.968" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2754" d="M152.365 171.968L152.507 171.137" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2756" d="M152.507 171.137L152.535 171.103" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2758" d="M152.535 171.103L152.654 170.653" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2760" d="M152.654 170.653L153.048 169.808" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2762" d="M153.048 169.808L153.584 169.043" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2764" d="M153.584 169.043L154.018 168.615" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2766" d="M154.018 168.615L154.406 168.252" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2768" d="M154.406 168.252L155.299 167.673" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2770" d="M155.299 167.673L156.178 167.313" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2772" d="M156.178 167.313L156.966 167.044" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2774" d="M156.966 167.044L158.616 166.781" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2776" d="M158.616 166.781L159.251 166.792" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2778" d="M159.251 166.792L160.087 166.798" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2780" d="M160.087 166.798L161.731 167.095" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2782" d="M161.731 167.095L162.326 167.313" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2784" d="M162.326 167.313L162.828 167.489" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2786" d="M162.828 167.489L163.76 168.008" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2788" d="M163.76 168.008L164.486 168.617" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2790" d="M164.486 168.617L164.824 168.938" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2792" d="M164.823 168.938L165.379 169.689" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2794" d="M165.379 169.689L165.796 170.525" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2796" d="M165.796 170.525L165.966 171.106" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2798" d="M165.966 171.106L166.076 171.512" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2800" d="M166.076 171.512L166.15 172.348" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2802" d="M166.15 172.348L166.076 173.187" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2804" d="M166.076 173.187L165.858 173.998" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2806" d="M165.858 173.998L165.498 174.76" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2808" d="M165.498 174.76L165.461 174.788" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2810" d="M165.461 174.788L165.195 175.216" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2812" d="M165.195 175.216L164.552 175.908" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2814" d="M164.551 175.908L163.82 176.605" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2816" d="M163.82 176.605L163.42 176.855" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2818" d="M163.42 176.855L162.777 177.368" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2820" d="M162.777 177.368L162.414 177.705" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2822" d="M162.414 177.705L162.224 177.958" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2824" d="M162.224 177.958L162.128 178.105" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2826" d="M162.128 178.105H162.125" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2828" d="M153.27 179.837L153.272 179.82" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2830" d="M153.272 179.82L153.335 179.803" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2832" d="M153.335 179.803L153.417 179.786" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2834" d="M153.417 179.786L153.618 179.763" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2836" d="M153.618 179.763L154.029 179.724" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2838" d="M154.029 179.724L154.228 179.707" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2840" d="M154.228 179.707L154.667 179.664" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2842" d="M154.667 179.664L155.053 179.639" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2844" d="M155.052 179.639L155.537 179.605" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2846" d="M155.537 179.605L156.334 179.568" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2848" d="M156.337 179.568L156.595 179.534" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2850" d="M156.594 179.534L156.665 179.514" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2852" d="M161.836 179.514L162.006 179.551" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2854" d="M162.006 179.551L162.17 179.568" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2856" d="M162.17 179.568L162.774 179.596" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2858" d="M162.774 179.596L163.449 179.639" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2860" d="M163.449 179.639L164.004 179.678" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2862" d="M164.004 179.678L164.277 179.707" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2864" d="M164.276 179.707L164.475 179.724" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2866" d="M164.475 179.724L164.886 179.763" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2868" d="M164.886 179.763L165.033 179.78" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2870" d="M165.033 179.78L165.17 179.803" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2872" d="M165.169 179.803L165.212 179.814" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2874" d="M165.212 179.814L165.24 179.831" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2876" d="M160.62 180.307H157.884" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2878" d="M157.884 180.308L156.691 180.291" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2880" d="M156.691 180.291L154.667 180.24" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2882" d="M154.667 180.239L154.075 180.217" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2884" d="M154.074 180.217L153.921 180.211" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2886" d="M153.921 180.211L153.661 180.194" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2888" d="M153.661 180.194L153.457 180.177" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2890" d="M153.457 180.177L153.391 180.169" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2892" d="M153.391 180.169L153.329 180.16" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2894" d="M153.329 180.16L153.27 180.143" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2896" d="M165.24 180.137L165.206 180.154" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2898" d="M165.206 180.154L165.113 180.171" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2900" d="M165.113 180.171L165.039 180.18" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2902" d="M165.039 180.18L164.829 180.197" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2904" d="M164.829 180.197L164.568 180.211" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2906" d="M164.569 180.211L164.43 180.217" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2908" d="M164.429 180.217L164.03 180.234" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2910" d="M164.03 180.234L163.384 180.251" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2912" d="M163.384 180.251L162.284 180.282" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2914" d="M162.284 180.282L160.62 180.307" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2916" d="M153.27 179.837V180.143" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2918" d="M165.24 179.831V180.137" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2920" d="M162.128 178.102L162.071 178.179" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2922" d="M162.071 178.179L162.068 178.184" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2924" d="M156.717 179.168L156.674 178.938" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2926" d="M156.674 178.938L156.648 178.791" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2928" d="M156.649 178.791L156.615 178.686" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2930" d="M156.614 178.686L156.529 178.422" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2932" d="M161.972 178.425L161.89 178.649" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2934" d="M161.89 178.649L161.881 178.689" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2936" d="M161.881 178.689L161.827 178.938" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2938" d="M161.827 178.938L161.782 179.137" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2940" d="M161.782 179.137L161.779 179.171" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2942" d="M161.779 179.171L161.765 179.352" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2944" d="M156.666 179.511V179.514" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2946" d="M162.128 178.102V178.099" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2948" d="M162.068 178.184L161.972 178.425" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2950" d="M161.765 179.352V179.477" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2952" d="M161.765 179.477L161.836 179.514" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2954" d="M156.422 178.184L156.39 178.13" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2956" d="M156.39 178.13L156.274 177.958" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2958" d="M156.529 178.422L156.487 178.289" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2960" d="M156.487 178.289L156.422 178.184" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 2962" fill-rule="evenodd" clip-rule="evenodd" d="M141.681 159.912L142.064 159.6L142.271 159.359L142.784 158.713L143.385 157.897L143.734 157.585L144.082 157.219L144.853 156.675L145.216 156.46L146.004 156.162L146.832 156.009L147.671 156.003L148.502 156.142L148.536 156.17L148.986 156.292L149.831 156.684L150.596 157.222L151.024 157.653L151.387 158.041L151.968 158.934L152.326 159.813L152.598 160.601L152.858 162.251L152.847 162.886L152.841 163.722L152.547 165.366L152.326 165.961L152.15 166.463L151.631 167.396L151.024 168.121L150.701 168.462L149.95 169.017L149.117 169.431L148.536 169.601L148.127 169.712L147.291 169.785L146.452 169.712L145.641 169.493L144.879 169.133L144.853 169.096L144.423 168.83L143.731 168.187L143.034 167.455L142.784 167.058L142.271 166.412L141.937 166.049L141.681 165.859L141.534 165.763L141.46 165.706L141.214 165.607L141.103 165.567L141.064 165.553L140.99 165.525L140.953 165.516L140.825 165.491L140.701 165.462L140.502 165.417L140.468 165.414L140.29 165.4H140.165L140.125 165.471L140.088 165.641L140.071 165.805L140.043 166.409L140.001 167.087L139.961 167.639L139.932 167.912L139.915 168.11L139.876 168.521L139.859 168.671L139.825 168.85L139.808 168.875H139.502L139.485 168.841L139.468 168.751L139.459 168.674L139.442 168.467L139.422 168.065L139.405 167.668L139.388 167.019L139.357 165.919L139.346 165.088L139.332 164.255V161.519L139.349 160.329L139.4 158.302L139.422 157.71L139.428 157.557L139.445 157.296L139.462 157.092L139.47 157.027L139.479 156.964L139.496 156.905H139.802L139.819 156.907L139.836 156.973L139.853 157.052L139.876 157.256L139.915 157.667L139.935 157.863L139.978 158.302L140.001 158.69L140.035 159.172L140.071 159.969L140.105 160.233L140.125 160.303L140.165 160.352L140.29 160.369L140.471 160.352L140.701 160.309L140.848 160.284L140.953 160.25L141.217 160.165L141.35 160.122L141.509 160.026L141.681 159.912Z" fill="white" />
                                <path id="Stroke 2964" d="M140.125 160.303L140.165 160.352" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2966" d="M140.29 160.369L140.471 160.352" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2968" d="M140.165 160.352L140.29 160.369" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2970" d="M140.446 169.578L140.412 169.618" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2972" d="M140.411 169.618L140.386 169.666" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2974" d="M140.386 169.666L140.369 169.714" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2976" d="M140.369 169.714L140.361 169.768" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2978" d="M140.361 169.768V169.822" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2980" d="M140.361 169.822L140.369 169.873" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2982" d="M140.369 169.873L140.389 169.924" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2984" d="M140.389 169.924L140.414 169.97" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2986" d="M140.414 169.97L140.448 170.012" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2988" d="M140.448 170.012L140.491 170.046" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2990" d="M140.491 170.046L140.536 170.074" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2992" d="M140.536 170.074L140.585 170.091" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2994" d="M140.584 170.091L140.638 170.103" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2996" d="M140.638 170.103H140.689" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 2998" d="M140.689 170.103L140.743 170.094" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3000" d="M140.743 170.094L140.791 170.074" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3002" d="M140.792 170.074L140.837 170.049" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3004" d="M140.837 170.049L140.879 170.015" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3006" d="M140.446 169.578L142.844 167.155" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3008" d="M151.574 158.328L153.822 156.054" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3010" d="M140.879 170.015L143.218 167.648" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3012" d="M151.917 158.855L154.256 156.491" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3014" d="M154.256 156.491L154.29 156.451" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3016" d="M154.29 156.451L154.316 156.406" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3018" d="M154.315 156.406L154.332 156.355" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3020" d="M154.333 156.355L154.341 156.301" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3022" d="M154.341 156.301V156.25" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3024" d="M154.341 156.25L154.333 156.196" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3026" d="M154.333 156.196L154.313 156.145" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3028" d="M154.313 156.145L154.287 156.1" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3030" d="M154.287 156.1L154.253 156.057" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3032" d="M154.253 156.057L154.211 156.023" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3034" d="M154.211 156.023L154.165 155.995" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3036" d="M154.165 155.995L154.114 155.978" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3038" d="M154.114 155.978L154.063 155.966" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3040" d="M154.063 155.966H154.009" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3042" d="M154.009 155.966L153.958 155.975" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3044" d="M153.958 155.975L153.91 155.995" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3046" d="M153.91 155.995L153.865 156.02" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3048" d="M153.865 156.02L153.822 156.054" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3050" d="M153.618 169.799L153.658 169.834" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3052" d="M153.658 169.833L153.703 169.859" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3054" d="M153.703 169.859L153.751 169.876" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3056" d="M153.751 169.876L153.805 169.885" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3058" d="M153.805 169.885H153.856" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3060" d="M153.856 169.885L153.91 169.876" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3062" d="M153.91 169.876L153.958 169.856" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3064" d="M153.958 169.856L154.006 169.831" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3066" d="M154.007 169.831L154.046 169.794" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3068" d="M154.046 169.794L154.08 169.754" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3070" d="M154.08 169.754L154.106 169.709" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3072" d="M154.106 169.709L154.126 169.658" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3074" d="M154.125 169.658L154.134 169.604" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3076" d="M154.134 169.604V169.55" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3078" d="M154.134 169.55L154.125 169.499" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3080" d="M154.126 169.499L154.109 169.448" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3082" d="M154.109 169.448L154.083 169.403" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3084" d="M154.083 169.403L154.049 169.363" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3086" d="M153.618 169.799L151.453 167.608" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3088" d="M142.727 158.784L140.423 156.454" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3090" d="M154.049 169.363L151.801 167.09" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3092" d="M143.099 158.285L140.857 156.017" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3094" d="M140.857 156.017L140.817 155.983" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3096" d="M140.817 155.983L140.771 155.955" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3098" d="M140.771 155.955L140.72 155.938" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3100" d="M140.72 155.938L140.669 155.93" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3102" d="M140.67 155.93H140.616" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3104" d="M140.616 155.93L140.565 155.941" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3106" d="M140.565 155.941L140.514 155.958" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3108" d="M140.514 155.958L140.468 155.986" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3110" d="M140.468 155.986L140.428 156.02" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3112" d="M140.429 156.02L140.395 156.06" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3114" d="M140.395 156.06L140.366 156.108" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3116" d="M140.366 156.108L140.349 156.159" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3118" d="M140.349 156.159L140.338 156.21" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3120" d="M140.338 156.21V156.264" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3122" d="M140.338 156.264L140.346 156.318" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3124" d="M140.346 156.318L140.363 156.366" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3126" d="M140.363 156.366L140.392 156.411" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3128" d="M140.392 156.411L140.423 156.454" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3130" d="M141.681 159.912L142.064 159.6" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3132" d="M142.064 159.6L142.271 159.359" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3134" d="M142.271 159.359L142.784 158.713" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3136" d="M142.784 158.713L143.385 157.897" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3138" d="M143.385 157.897L143.734 157.585" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3140" d="M143.734 157.585L144.083 157.219" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3142" d="M144.083 157.219L144.854 156.675" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3144" d="M144.854 156.675L145.216 156.46" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3146" d="M145.216 156.46L146.004 156.162" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3148" d="M146.004 156.162L146.832 156.009" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3150" d="M146.832 156.009L147.671 156.003" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3152" d="M147.671 156.003L148.502 156.142" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3154" d="M148.502 156.142L148.536 156.17" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3156" d="M148.536 156.17L148.986 156.292" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3158" d="M148.986 156.292L149.831 156.684" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3160" d="M149.831 156.684L150.596 157.222" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3162" d="M150.596 157.222L151.024 157.653" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3164" d="M151.024 157.653L151.387 158.041" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3166" d="M151.387 158.041L151.969 158.934" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3168" d="M151.969 158.934L152.326 159.813" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3170" d="M152.326 159.813L152.598 160.601" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3172" d="M152.598 160.601L152.858 162.251" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3174" d="M152.859 162.251L152.847 162.886" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3176" d="M152.847 162.886L152.842 163.722" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3178" d="M152.841 163.722L152.547 165.366" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3180" d="M152.547 165.366L152.326 165.961" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3182" d="M152.326 165.961L152.15 166.463" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3184" d="M152.15 166.463L151.631 167.396" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3186" d="M151.631 167.396L151.024 168.121" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3188" d="M151.025 168.121L150.701 168.461" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3190" d="M150.701 168.462L149.95 169.017" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3192" d="M149.95 169.017L149.117 169.431" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3194" d="M149.117 169.431L148.536 169.601" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3196" d="M148.536 169.601L148.127 169.712" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3198" d="M148.127 169.712L147.291 169.785" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3200" d="M147.291 169.785L146.452 169.712" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3202" d="M146.452 169.712L145.642 169.493" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3204" d="M145.641 169.493L144.879 169.133" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3206" d="M144.879 169.133L144.854 169.096" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3208" d="M144.853 169.096L144.423 168.83" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3210" d="M144.423 168.83L143.731 168.187" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3212" d="M143.731 168.187L143.034 167.455" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3214" d="M143.034 167.455L142.784 167.058" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3216" d="M142.784 167.058L142.271 166.412" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3218" d="M142.271 166.412L141.937 166.049" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3220" d="M141.937 166.049L141.681 165.859" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3222" d="M141.682 165.859L141.534 165.763" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3226" d="M139.802 156.905L139.819 156.907" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3228" d="M139.819 156.907L139.836 156.973" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3230" d="M139.836 156.973L139.853 157.052" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3232" d="M139.853 157.052L139.876 157.256" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3234" d="M139.876 157.256L139.915 157.667" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3236" d="M139.916 157.667L139.935 157.863" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3238" d="M139.935 157.863L139.978 158.302" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3240" d="M139.978 158.302L140 158.69" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3242" d="M140 158.69L140.035 159.172" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3244" d="M140.035 159.172L140.072 159.969" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3246" d="M140.071 159.972L140.105 160.233" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3248" d="M140.105 160.233L140.125 160.303" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3250" d="M140.125 165.471L140.088 165.641" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3252" d="M140.088 165.641L140.071 165.805" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3254" d="M140.071 165.805L140.043 166.409" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3256" d="M140.043 166.409L140 167.087" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3258" d="M140.001 167.087L139.961 167.639" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3260" d="M139.961 167.639L139.933 167.912" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3262" d="M139.933 167.912L139.916 168.11" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3264" d="M139.915 168.11L139.876 168.521" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3266" d="M139.876 168.521L139.859 168.671" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3268" d="M139.859 168.671L139.836 168.804" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3270" d="M139.836 168.805L139.825 168.85" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3272" d="M139.825 168.85L139.808 168.875" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3274" d="M139.332 164.255V161.519" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3276" d="M139.332 161.519L139.349 160.329" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3278" d="M139.349 160.329L139.4 158.302" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3280" d="M139.4 158.302L139.422 157.71" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3282" d="M139.422 157.71L139.428 157.557" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3284" d="M139.428 157.557L139.445 157.296" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3286" d="M139.445 157.296L139.462 157.092" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3288" d="M139.462 157.092L139.47 157.027" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3290" d="M139.47 157.027L139.479 156.964" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3292" d="M139.479 156.964L139.496 156.905" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3294" d="M139.502 168.875L139.485 168.841" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3296" d="M139.485 168.841L139.468 168.751" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3298" d="M139.468 168.751L139.459 168.674" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3300" d="M139.459 168.674L139.442 168.467" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3302" d="M139.442 168.467L139.428 168.204" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3304" d="M139.428 168.204L139.422 168.065" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3306" d="M139.422 168.065L139.405 167.668" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3308" d="M139.405 167.668L139.388 167.019" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3310" d="M139.388 167.019L139.357 165.919" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3312" d="M139.357 165.919L139.332 164.255" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3314" d="M139.802 156.905H139.496" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3316" d="M139.808 168.875H139.502" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3318" d="M141.537 165.763L141.46 165.706" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3320" d="M141.461 165.706L141.455 165.703" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3322" d="M140.471 160.352L140.701 160.309" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3324" d="M140.701 160.309L140.848 160.284" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3326" d="M140.848 160.284L140.953 160.25" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3328" d="M140.953 160.25L141.217 160.164" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3330" d="M141.214 165.607L140.99 165.525" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3332" d="M140.99 165.525L140.953 165.516" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3334" d="M140.953 165.516L140.701 165.462" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3336" d="M140.701 165.462L140.502 165.417" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3338" d="M140.502 165.417L140.468 165.414" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3340" d="M140.468 165.414L140.29 165.4" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3342" d="M140.128 160.303H140.125" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3344" d="M141.537 165.763H141.54" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3346" d="M141.455 165.703L141.214 165.607" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3348" d="M140.29 165.4H140.165" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3350" d="M140.165 165.4L140.125 165.471" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3352" d="M141.458 160.06L141.509 160.026" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3354" d="M141.509 160.026L141.681 159.909" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3356" d="M141.217 160.165L141.35 160.122" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3358" d="M141.35 160.122L141.458 160.06" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3360" fill-rule="evenodd" clip-rule="evenodd" d="M179.564 177.96L179.45 178.133L179.351 178.292L179.311 178.428L179.226 178.689L179.192 178.794L179.167 178.941L179.124 179.174L179.107 179.352L179.122 179.477L179.173 179.517L179.243 179.536L179.507 179.57L180.301 179.607L180.785 179.641L181.174 179.667L181.613 179.709L181.809 179.726L182.22 179.766L182.421 179.789L182.503 179.806L182.568 179.823V179.843V180.146L182.509 180.166L182.449 180.174L182.384 180.183L182.177 180.2L181.917 180.214L181.763 180.22L181.174 180.242L179.147 180.293L177.954 180.31H175.221L174.388 180.296L173.554 180.282L172.457 180.254L171.808 180.237L171.411 180.22L171.009 180.2L170.799 180.183L170.725 180.171L170.632 180.157L170.598 180.137V179.831L170.626 179.814L170.805 179.78L170.955 179.766L171.366 179.726L171.562 179.707L171.837 179.678L172.389 179.641L173.067 179.596L173.668 179.57L173.832 179.551L174.005 179.517L174.073 179.477V179.352L174.059 179.171V179.14L174.011 178.941L173.985 178.814L173.957 178.689L173.951 178.652L173.923 178.578L173.909 178.539L173.869 178.425L173.77 178.179L173.713 178.105L173.617 177.96L173.427 177.705L173.064 177.371L172.418 176.858L172.021 176.608L171.289 175.908L170.646 175.216L170.379 174.788L170.343 174.76L169.983 173.998L169.764 173.187L169.691 172.348L169.767 171.512L169.878 171.106L170.045 170.525L170.462 169.689L171.017 168.938L171.357 168.617L172.083 168.011L173.013 167.492L173.517 167.316L174.113 167.095L175.757 166.8L176.59 166.795L177.228 166.783L178.875 167.047L179.666 167.316L180.545 167.676L181.437 168.257L181.826 168.617L182.257 169.048L182.792 169.811L183.186 170.658L183.305 171.106L183.334 171.143L183.476 171.971L183.467 172.813L183.314 173.64L183.016 174.428L182.801 174.788L182.257 175.559L181.891 175.911L181.579 176.257L180.763 176.858L180.117 177.371L179.876 177.578L179.564 177.96Z" fill="white" />
                                <path id="Stroke 3362" d="M179.173 179.517L179.122 179.477" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3364" d="M179.107 179.352L179.124 179.174" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3366" d="M179.122 179.477L179.107 179.352" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3368" d="M169.898 179.193L169.855 179.227" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3370" d="M169.855 179.228L169.81 179.253" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3372" d="M169.81 179.253L169.759 179.27" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3374" d="M169.759 179.27L169.708 179.281" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3376" d="M169.708 179.281L169.654 179.279" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3378" d="M169.654 179.279L169.603 179.27" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3380" d="M169.603 179.27L169.552 179.25" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3382" d="M169.552 179.25L169.504 179.225" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3384" d="M169.504 179.225L169.464 179.191" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3386" d="M169.464 179.191L169.43 179.151" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3388" d="M169.43 179.151L169.402 179.103" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3390" d="M169.401 179.103L169.382 179.055" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3392" d="M169.382 179.055L169.373 179.001" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3394" d="M169.373 179.001V178.95" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3396" d="M169.373 178.95L169.382 178.896" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3398" d="M169.382 178.896L169.399 178.848" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3400" d="M169.399 178.848L169.427 178.802" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3402" d="M169.427 178.802L169.461 178.763" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3404" d="M169.898 179.194L172.321 176.795" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3406" d="M181.148 168.07L183.425 165.82" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3408" d="M169.461 178.763L171.828 176.421" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3410" d="M180.621 167.727L182.988 165.389" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3412" d="M182.988 165.389L183.028 165.355" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3414" d="M183.028 165.355L183.073 165.329" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3416" d="M183.073 165.329L183.124 165.312" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3418" d="M183.124 165.312L183.178 165.301" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3420" d="M183.178 165.301L183.229 165.304" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3422" d="M183.229 165.304L183.283 165.312" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3424" d="M183.283 165.312L183.334 165.332" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3426" d="M183.334 165.332L183.379 165.358" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3428" d="M183.379 165.358L183.422 165.392" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3430" d="M183.422 165.392L183.456 165.431" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3432" d="M183.456 165.431L183.481 165.479" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3434" d="M183.481 165.479L183.501 165.528" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3436" d="M183.501 165.528L183.509 165.582" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3438" d="M183.51 165.582L183.512 165.633" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3440" d="M183.512 165.633L183.501 165.686" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3442" d="M183.501 165.686L183.484 165.735" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3444" d="M183.484 165.735L183.458 165.78" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3446" d="M183.459 165.78L183.425 165.82" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3448" d="M169.679 166.024L169.645 165.981" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3450" d="M169.645 165.981L169.62 165.936" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3452" d="M169.62 165.936L169.603 165.888" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3454" d="M169.603 165.888L169.594 165.837" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3456" d="M169.594 165.837V165.783" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3458" d="M169.594 165.783L169.603 165.732" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3460" d="M169.603 165.732L169.623 165.681" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3462" d="M169.623 165.681L169.648 165.635" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3464" d="M169.648 165.635L169.685 165.593" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3466" d="M169.685 165.593L169.725 165.559" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3468" d="M169.725 165.559L169.77 165.533" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3470" d="M169.77 165.533L169.821 165.513" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3472" d="M169.821 165.514L169.875 165.505" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3474" d="M169.875 165.505H169.929" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3476" d="M169.929 165.505L169.98 165.514" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3478" d="M169.98 165.513L170.031 165.53" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3480" d="M170.031 165.531L170.076 165.556" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3482" d="M170.076 165.556L170.116 165.59" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3484" d="M169.679 166.024L171.871 168.189" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3486" d="M180.692 176.914L183.022 179.219" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3488" d="M170.116 165.59L172.389 167.838" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3490" d="M181.191 176.543L183.459 178.788" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3492" d="M183.458 178.788L183.493 178.828" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3494" d="M183.493 178.828L183.518 178.873" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3496" d="M183.518 178.873L183.538 178.924" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3498" d="M183.538 178.924L183.546 178.975" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3500" d="M183.547 178.975L183.544 179.029" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3502" d="M183.544 179.029L183.535 179.08" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3504" d="M183.535 179.08L183.515 179.128" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3506" d="M183.515 179.128L183.49 179.176" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3508" d="M183.49 179.177L183.456 179.216" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3510" d="M183.456 179.216L183.413 179.25" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3512" d="M183.413 179.25L183.368 179.279" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3514" d="M183.368 179.279L183.317 179.296" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3516" d="M183.317 179.296L183.263 179.304" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3518" d="M183.263 179.304L183.212 179.307" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3520" d="M183.212 179.307L183.158 179.296" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3522" d="M183.158 179.296L183.107 179.279" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3524" d="M183.107 179.279L183.062 179.253" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3526" d="M183.062 179.253L183.022 179.219" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3528" d="M179.564 177.96L179.876 177.578" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3530" d="M179.875 177.578L180.116 177.371" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3532" d="M180.116 177.371L180.763 176.858" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3534" d="M180.763 176.858L181.579 176.257" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3536" d="M181.579 176.257L181.891 175.911" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3538" d="M181.891 175.911L182.257 175.56" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3540" d="M182.257 175.559L182.801 174.788" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3542" d="M182.801 174.788L183.016 174.428" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3544" d="M183.016 174.428L183.314 173.64" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3546" d="M183.314 173.64L183.467 172.813" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3548" d="M183.467 172.813L183.476 171.971" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3550" d="M183.475 171.971L183.334 171.143" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3552" d="M183.334 171.143L183.305 171.106" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3554" d="M183.306 171.106L183.187 170.658" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3556" d="M183.186 170.658L182.792 169.811" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3558" d="M182.792 169.811L182.257 169.048" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3560" d="M182.257 169.048L181.826 168.617" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3562" d="M181.826 168.617L181.438 168.257" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3564" d="M181.437 168.257L180.544 167.676" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3566" d="M180.545 167.676L179.666 167.316" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3568" d="M179.666 167.316L178.875 167.047" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3570" d="M178.875 167.047L177.228 166.783" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3572" d="M177.228 166.783L176.59 166.795" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3574" d="M176.59 166.795L175.757 166.8" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3576" d="M175.757 166.8L174.113 167.095" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3578" d="M174.113 167.095L173.518 167.316" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3580" d="M173.518 167.316L173.013 167.492" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3582" d="M173.013 167.492L172.083 168.011" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3584" d="M172.083 168.011L171.357 168.617" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3586" d="M171.357 168.617L171.017 168.938" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3588" d="M171.017 168.938L170.462 169.689" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3590" d="M170.462 169.689L170.045 170.525" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3592" d="M170.045 170.525L169.878 171.106" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3594" d="M169.878 171.106L169.767 171.512" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3596" d="M169.767 171.512L169.691 172.348" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3598" d="M169.691 172.348L169.764 173.187" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3600" d="M169.764 173.187L169.983 173.998" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3602" d="M169.983 173.998L170.343 174.76" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3604" d="M170.343 174.76L170.379 174.788" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3606" d="M170.379 174.788L170.646 175.216" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3608" d="M170.646 175.216L171.289 175.908" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3610" d="M171.289 175.908L172.021 176.608" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3612" d="M172.021 176.608L172.418 176.858" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3614" d="M172.417 176.858L173.064 177.371" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3616" d="M173.064 177.371L173.427 177.705" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3618" d="M173.427 177.705L173.617 177.96" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3620" d="M173.617 177.96L173.713 178.105" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3624" d="M182.568 179.843V179.823" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3626" d="M182.569 179.823L182.503 179.806" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3628" d="M182.503 179.806L182.421 179.789" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3630" d="M182.421 179.789L182.22 179.766" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3632" d="M182.22 179.766L181.809 179.726" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3634" d="M181.809 179.726L181.613 179.709" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3636" d="M181.613 179.709L181.174 179.667" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3638" d="M181.174 179.667L180.785 179.641" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3640" d="M180.786 179.641L180.301 179.607" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3642" d="M180.301 179.607L179.507 179.57" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3644" d="M179.501 179.571L179.243 179.536" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3646" d="M179.243 179.537L179.173 179.517" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3648" d="M174.005 179.517L173.832 179.551" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3650" d="M173.832 179.551L173.668 179.571" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3652" d="M173.668 179.57L173.067 179.596" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3654" d="M173.067 179.596L172.389 179.641" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3656" d="M172.389 179.641L171.836 179.678" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3658" d="M171.836 179.678L171.562 179.707" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3660" d="M171.562 179.707L171.366 179.726" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3662" d="M171.366 179.726L170.955 179.766" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3664" d="M170.955 179.766L170.805 179.78" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3666" d="M170.805 179.78L170.671 179.806" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3668" d="M170.672 179.806L170.626 179.814" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3670" d="M170.626 179.814L170.598 179.831" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3672" d="M175.221 180.31H177.954" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3674" d="M177.954 180.31L179.147 180.293" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3676" d="M179.147 180.293L181.174 180.242" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3678" d="M181.174 180.242L181.763 180.22" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3680" d="M181.763 180.22L181.916 180.214" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3682" d="M181.917 180.214L182.177 180.2" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3684" d="M182.177 180.2L182.384 180.183" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3686" d="M182.384 180.183L182.449 180.174" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3688" d="M182.449 180.174L182.509 180.166" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3690" d="M182.509 180.166L182.569 180.146" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3692" d="M170.598 180.137L170.632 180.157" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3694" d="M170.632 180.157L170.725 180.171" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3696" d="M170.725 180.171L170.799 180.183" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3698" d="M170.799 180.183L171.009 180.2" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3700" d="M171.009 180.2L171.272 180.214" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3702" d="M171.272 180.214L171.411 180.22" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3704" d="M171.411 180.22L171.808 180.237" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3706" d="M171.808 180.237L172.457 180.254" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3708" d="M172.457 180.254L173.554 180.282" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3710" d="M173.554 180.282L175.221 180.31" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3712" d="M182.568 179.843V180.146" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3714" d="M170.598 179.831V180.137" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3716" d="M173.713 178.105L173.77 178.179" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3718" d="M173.77 178.179L173.773 178.184" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3720" d="M179.125 179.174L179.167 178.941" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3722" d="M179.167 178.941L179.193 178.794" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3724" d="M179.192 178.794L179.226 178.689" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3726" d="M179.227 178.689L179.312 178.428" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3728" d="M173.869 178.425L173.951 178.652" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3730" d="M173.951 178.652L173.957 178.689" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3732" d="M173.957 178.689L174.011 178.941" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3734" d="M174.011 178.941L174.059 179.14" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3736" d="M174.059 179.14V179.171" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3738" d="M174.059 179.171L174.073 179.352" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3740" d="M179.173 179.514V179.517" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3742" d="M173.713 178.105V178.102" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3744" d="M173.772 178.184L173.869 178.425" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3746" d="M174.073 179.352V179.477" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3748" d="M174.073 179.477L174.005 179.517" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3750" d="M179.416 178.187L179.45 178.133" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3752" d="M179.45 178.133L179.564 177.96" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3754" d="M179.312 178.428L179.351 178.292" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3756" d="M179.351 178.292L179.416 178.187" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3758" fill-rule="evenodd" clip-rule="evenodd" d="M71.7649 24.4273V7.41937H128.24V24.4273H71.7649Z" fill="white" />
                                <path id="Stroke 3760" d="M71.7649 7.41937V24.4273" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3762" d="M128.24 7.41937H71.7649" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3764" d="M128.24 24.4273V7.41937" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3766" d="M71.7649 24.4273H128.24" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3768" fill-rule="evenodd" clip-rule="evenodd" d="M22.7877 82.6652H7.06104V40.1454H22.7877V82.6652Z" fill="white" />
                                <path id="Stroke 3770" d="M7.06104 82.6652H22.7877" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3772" d="M7.06104 40.1454V82.6652" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3774" d="M22.7877 40.1454H7.06104" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3776" d="M22.7878 82.6652V40.1454" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3778" d="M7.06104 40.1454L22.7877 61.4053" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3780" d="M22.7877 61.4053L7.06104 82.6651" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3782" fill-rule="evenodd" clip-rule="evenodd" d="M7.06104 103.817V85.4998H61.4835V103.817H7.06104Z" fill="white" />
                                <path id="Stroke 3784" d="M7.06104 85.4998V103.817" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3786" d="M61.4835 85.4998H7.06104" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3788" d="M61.4836 103.817V85.4998" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3790" d="M7.06104 103.817H61.4835" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3792" d="M61.4836 85.4998L34.271 103.817" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3794" d="M34.2708 103.817L7.06104 85.4998" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3796" fill-rule="evenodd" clip-rule="evenodd" d="M82.8851 7.41937V45.8147H65.8772V7.41937H82.8851Z" fill="white" />
                                <path id="Stroke 3798" d="M82.8853 7.41937V45.8147" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3800" d="M82.8851 45.8147H65.8772" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3802" d="M65.8772 45.8147V7.41937" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3804" d="M65.8772 7.41937H82.8851" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3806" d="M65.8772 45.8147L82.8851 26.6156" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3808" d="M82.8851 26.6156L65.8772 7.41937" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3810" fill-rule="evenodd" clip-rule="evenodd" d="M36.8222 197.565L36.8052 152.21L93.4982 152.191L93.5152 197.545L36.8222 197.565Z" fill="white" />
                                <path id="Fill 3812" fill-rule="evenodd" clip-rule="evenodd" d="M93.5179 208.884L82.1793 208.886L82.1765 197.548L93.5151 197.545L93.5179 208.884Z" fill="white" />
                                <path id="Fill 3814" fill-rule="evenodd" clip-rule="evenodd" d="M93.4982 152.191L82.1596 152.193L82.1567 140.855L93.4953 140.852L93.4982 152.191Z" fill="white" />
                                <path id="Stroke 3816" d="M82.1793 208.886L82.1765 197.548" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3818" d="M82.1765 197.548L93.5151 197.545" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3820" d="M93.5151 197.545L93.518 208.884" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3822" d="M93.518 208.884L82.1794 208.886" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3824" d="M82.1596 152.193L82.1567 140.855" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3826" d="M82.1567 140.855L93.4953 140.852" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3828" d="M93.4954 140.852L93.4982 152.191" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3830" d="M93.498 152.191L82.1594 152.193" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3832" fill-rule="evenodd" clip-rule="evenodd" d="M81.0284 158.149L79.8945 157.015V153.897L91.8001 153.891L91.8057 173.167L81.0341 173.173L81.0284 158.149Z" fill="white" />
                                <path id="Stroke 3834" d="M81.0284 158.149L79.8945 157.015" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3836" d="M79.8945 157.015V153.897" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3838" d="M79.8945 153.897L91.8001 153.891" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3840" d="M91.8003 153.891L91.806 173.167" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3842" d="M91.8059 173.167L81.0342 173.173" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3844" d="M81.0342 173.173L81.0286 158.149" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3846" fill-rule="evenodd" clip-rule="evenodd" d="M81.0342 176.574L91.8059 176.569L91.8144 195.844L79.9088 195.85L79.906 192.732L81.0399 191.598L81.0342 176.574Z" fill="white" />
                                <path id="Stroke 3848" d="M81.0342 176.574L91.8059 176.569" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3850" d="M91.8059 176.569L91.8144 195.844" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3852" d="M91.8142 195.844L79.9087 195.85" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3854" d="M79.9088 195.85L79.906 192.732" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3856" d="M79.906 192.732L81.0399 191.598" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3858" d="M81.0398 191.598L81.0342 176.574" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3860" fill-rule="evenodd" clip-rule="evenodd" d="M37.6641 174.888L37.6584 153.061L75.9262 153.047L81.0286 158.149L81.0343 174.873L37.6641 174.888Z" fill="white" />
                                <path id="Fill 3862" fill-rule="evenodd" clip-rule="evenodd" d="M37.6641 174.888L81.0342 174.873L81.0399 191.598L75.9403 196.7L37.6726 196.714L37.6641 174.888Z" fill="white" />
                                <path id="Stroke 3864" d="M37.6641 174.888L37.6584 153.061" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3866" d="M37.6584 153.061L75.9262 153.047" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3868" d="M75.926 153.047L81.0284 158.149" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3870" d="M81.0286 158.149L81.0342 174.873" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3872" d="M75.926 153.047V158.149" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3874" d="M81.0284 158.149H75.926" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3876" d="M81.0342 174.873L81.0398 191.598" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3878" d="M81.0397 191.598L75.9402 196.7" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3880" d="M75.9404 196.7L37.6726 196.714" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3882" d="M37.6726 196.715L37.6641 174.888" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3884" d="M75.9403 196.7L75.9375 191.598" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3886" d="M81.0399 191.598H75.9375" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3888" d="M36.8222 197.565L36.8052 152.21" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3890" d="M36.8052 152.21L93.4982 152.191" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3892" d="M93.498 152.191L93.5151 197.545" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3894" d="M93.515 197.545L36.822 197.565" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3896" fill-rule="evenodd" clip-rule="evenodd" d="M24.0718 214.338V253.77H8.4812V214.338H24.0718Z" fill="white" />
                                <path id="Stroke 3898" d="M24.0718 214.338V253.77" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3900" d="M8.4812 214.338V253.77" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3902" d="M24.0718 214.338H8.4812" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3904" d="M24.0718 253.77H8.4812" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3906" fill-rule="evenodd" clip-rule="evenodd" d="M76.5129 253.476V214.338H93.5208V253.476H76.5129Z" fill="white" />
                                <path id="Stroke 3908" d="M76.5129 253.476V214.338" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3910" d="M93.5208 253.476V214.338" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3912" d="M76.5129 253.476H93.5208" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3914" d="M76.5129 214.338H93.5208" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3934" fill-rule="evenodd" clip-rule="evenodd" d="M136.744 88.3316V79.8277H145.248V88.3316H136.744Z" fill="white" />
                                <path id="Stroke 3936" d="M136.744 79.8277V88.3316" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3938" d="M145.248 79.8277H136.744" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3940" d="M145.248 88.3316V79.8277" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3942" d="M136.744 88.3317H145.248" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3944" fill-rule="evenodd" clip-rule="evenodd" d="M187.779 79.8277H165.101V68.4891L176.443 57.1505H187.779V79.8277Z" fill="white" />
                                <path id="Stroke 3946" d="M187.779 79.8277H165.101" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3948" d="M165.101 79.8277V68.4891" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3950" d="M165.101 68.4891L176.443 57.1505" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3952" d="M176.443 57.1505H187.779" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3954" d="M187.779 57.1505V79.8277" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3956" d="M184.377 78.4103H168.503" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3958" d="M166.519 76.4261V69.9008" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3960" d="M167.1 68.4976L176.449 59.1489" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3962" d="M177.852 58.5678H184.377" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3964" d="M186.361 60.5521V76.4261" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3966" d="M183.527 74.867C183.527 74.4759 183.209 74.1584 182.818 74.1584C182.427 74.1584 182.109 74.4759 182.109 74.867C182.109 75.2582 182.427 75.5757 182.818 75.5757C183.209 75.5757 183.527 75.2582 183.527 74.867" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3968" d="M168.503 78.4103C167.409 78.4103 166.519 77.5231 166.519 76.4261" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3970" d="M166.519 69.9007C166.519 69.3735 166.729 68.8689 167.1 68.4976" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3972" d="M176.448 59.1489C176.82 58.7776 177.324 58.5678 177.852 58.5678" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3974" d="M184.377 58.5678C185.474 58.5678 186.361 59.4579 186.361 60.5521" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3976" d="M186.361 76.4261C186.361 77.5231 185.474 78.4103 184.377 78.4103" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 3978" fill-rule="evenodd" clip-rule="evenodd" d="M111.232 24.4273V7.41937H128.24V24.4273H111.232Z" fill="white" />
                                <path id="Stroke 3980" d="M111.232 24.4273V7.41937" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3982" d="M111.232 7.41937H128.24" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3984" d="M128.24 7.41937V24.4273" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3986" d="M128.24 24.4273H111.232" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3988" d="M124.597 15.9233C124.597 13.2389 122.42 11.0648 119.736 11.0648C117.054 11.0648 114.877 13.2389 114.877 15.9233C114.877 18.6078 117.054 20.7819 119.736 20.7819C122.42 20.7819 124.597 18.6078 124.597 15.9233" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 3990" d="M123.517 15.9233C123.517 13.837 121.825 12.1447 119.736 12.1447C117.649 12.1447 115.957 13.837 115.957 15.9233C115.957 18.0096 117.649 19.7019 119.736 19.7019C121.825 19.7019 123.517 18.0096 123.517 15.9233" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4042" d="M128.24 15.9233L127.826 13.2956" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4044" d="M127.826 13.2956L126.941 11.5608" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4046" d="M124.18 8.76016L122.366 7.83606" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4048" d="M122.366 7.83608L120.425 7.5271" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4050" d="M116.535 8.12805L114.738 9.04364" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4052" d="M114.738 9.04364L113.338 10.444" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4054" d="M111.546 13.9476L111.232 15.9233" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4056" d="M111.232 15.9233L111.546 17.8991" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4058" d="M113.338 21.4027L114.738 22.803" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4060" d="M114.738 22.803L116.535 23.7186" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4062" d="M120.425 24.3167L122.366 24.0106" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4064" d="M122.366 24.0106L124.18 23.0865" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4066" d="M126.941 20.283L127.826 18.5511" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4068" d="M127.826 18.5511L128.24 15.9233" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4070" d="M60.2844 266.231H74.6504" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4078" d="M118.222 266.231H132.588" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4178" fill-rule="evenodd" clip-rule="evenodd" d="M133.342 108.154V91.1663H150.39V108.154H133.342Z" fill="white" />
                                <path id="Stroke 4180" d="M133.342 91.1663V108.154" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4182" d="M150.39 91.1663H133.342" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4184" d="M150.39 108.154V91.1663" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4186" d="M133.342 108.154H150.39" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4188" d="M133.342 106.454H150.39" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4191" fill-rule="evenodd" clip-rule="evenodd" d="M187.767 172.946L148.082 172.949L148.079 153.106L187.764 153.103L187.767 172.946Z" fill="white" />
                                <path id="Stroke 4193" d="M187.767 172.946L148.082 172.949" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4195" d="M148.082 172.949L148.079 153.106" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4197" d="M148.079 153.106L187.764 153.103" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4199" d="M187.764 153.103L187.767 172.946" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4201" d="M187.767 172.946L148.082 172.949" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4203" d="M148.082 172.949L148.079 153.106" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4205" d="M148.079 153.106L187.764 153.103" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4207" d="M187.764 153.103L187.767 172.946" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4209" fill-rule="evenodd" clip-rule="evenodd" d="M8.42456 137.836L16.9285 137.827L16.9852 211.514L8.48125 211.523L8.42456 137.836Z" fill="white" />
                                <path id="Stroke 4211" d="M16.9285 137.827L8.42456 137.836" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4213" d="M16.9852 211.514L16.9285 137.827" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4215" d="M8.4812 211.523L16.9852 211.514" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4217" d="M8.42456 137.836L8.48125 211.523" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4219" d="M8.42456 137.836L8.48125 211.523" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4221" d="M8.4812 211.523L16.9852 211.514" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4223" d="M16.9852 211.514L16.9285 137.827" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4225" d="M16.9285 137.827L8.42456 137.836" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4227" fill-rule="evenodd" clip-rule="evenodd" d="M96.2988 137.83L104.803 137.825L104.859 211.511L96.3555 211.52L96.2988 137.83Z" fill="white" />
                                <path id="Stroke 4229" d="M104.803 137.825L96.2988 137.83" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4231" d="M104.859 211.511L104.803 137.825" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4233" d="M96.3555 211.52L104.859 211.511" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4235" d="M96.2988 137.83L96.3555 211.52" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4237" d="M96.2988 137.83L96.3555 211.52" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4239" d="M96.3555 211.52L104.859 211.511" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4241" d="M104.859 211.511L104.803 137.825" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4243" d="M104.803 137.825L96.2988 137.83" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4245" fill-rule="evenodd" clip-rule="evenodd" d="M53.2574 266.231H46.3579V253.476H53.2574V266.231Z" fill="#E6E6E6" />
                                <path id="Fill 4249" fill-rule="evenodd" clip-rule="evenodd" d="M144.961 87.7647V91.1663H133.342L136.744 87.7647H144.961Z" fill="#E6E6E6" />
                                <path id="Stroke 4251" d="M144.961 87.7647H136.744" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4253" d="M133.342 91.1663H144.961" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4255" d="M144.961 91.1663V87.7647" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4257" fill-rule="evenodd" clip-rule="evenodd" d="M187.764 211.636V7.41937H194.851V103.817H187.767V137.833H194.851V211.523H187.77V211.636H187.764Z" fill="#E6E6E6" />
                                <path id="Stroke 4259" d="M187.764 7.41937V87.7647" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4261" d="M187.764 91.1663V211.636" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4263" d="M194.851 211.523V137.833" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4265" d="M194.851 103.817V7.41937" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4267" fill-rule="evenodd" clip-rule="evenodd" d="M129.94 38.4446L128.24 40.1454V14.6336L129.94 16.3344V38.4446Z" fill="#E6E6E6" />
                                <path id="Stroke 4269" d="M129.94 38.4446V16.3344" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4271" d="M128.24 14.6336V40.1454" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4273" fill-rule="evenodd" clip-rule="evenodd" d="M136.744 40.1454L135.043 38.4446V14.6336H136.744V40.1454Z" fill="#E6E6E6" />
                                <path id="Stroke 4275" d="M136.744 40.1454V14.6336" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4277" d="M135.043 16.3344V20.3029" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4279" d="M135.043 22.0037V38.4446" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4281" fill-rule="evenodd" clip-rule="evenodd" d="M135.043 38.4446L136.743 40.1454H128.24L129.94 38.4446H135.043Z" fill="#E6E6E6" />
                                <path id="Stroke 4283" d="M135.043 38.4446H129.94" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4285" d="M128.24 40.1454H136.743" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4287" fill-rule="evenodd" clip-rule="evenodd" d="M135.043 14.6336V16.3344H129.94L128.24 14.6336H135.043Z" fill="#E6E6E6" />
                                <path id="Stroke 4289" d="M135.043 14.6336H128.24" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4291" d="M129.94 16.3344H135.043" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4293" fill-rule="evenodd" clip-rule="evenodd" d="M135.043 20.3029V22.0036H130.082V20.3029H135.043Z" fill="#E6E6E6" />
                                <path id="Stroke 4295" d="M135.043 20.3029H130.082" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4297" d="M130.082 22.0037H135.043" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4299" fill-rule="evenodd" clip-rule="evenodd" d="M134.901 14.6336V7.41937H136.744V14.6336H134.901Z" fill="#E6E6E6" />
                                <path id="Stroke 4301" d="M136.744 14.6336V7.41937" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4303" d="M134.901 7.41937V14.6336" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4305" fill-rule="evenodd" clip-rule="evenodd" d="M7.06125 59.8406H3.65967V53.182H7.06125V59.8406Z" fill="#E6E6E6" />
                                <path id="Stroke 4307" d="M7.06104 59.8406V53.182" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4309" d="M7.06125 53.182H3.65967" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4311" d="M3.65967 53.182V59.8406" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4313" d="M3.65967 59.8406H7.06125" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4315" fill-rule="evenodd" clip-rule="evenodd" d="M144.961 91.1663V89.4655H178.977L180.678 91.1663H144.961Z" fill="#E6E6E6" />
                                <path id="Stroke 4317" d="M144.961 91.1663H180.678" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4319" d="M178.977 89.4655H175.009" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4321" d="M173.308 89.4655H156.867" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4323" d="M153.465 89.4655H146.662" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4325" d="M144.961 89.4655V91.1663" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4327" fill-rule="evenodd" clip-rule="evenodd" d="M146.662 81.5285L144.961 79.8277H180.678L178.977 81.5285H146.662Z" fill="#E6E6E6" />
                                <path id="Stroke 4329" d="M146.662 81.5285H153.465" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4331" d="M156.867 81.5285H173.308" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4333" d="M175.009 81.5285H178.977" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4335" d="M180.678 79.8277H144.961" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4337" fill-rule="evenodd" clip-rule="evenodd" d="M155.166 81.5285H156.867V89.4655H155.166V81.5285Z" fill="#E6E6E6" />
                                <path id="Stroke 4339" d="M155.166 81.5285V89.4655" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4341" d="M156.867 89.4655V81.5285" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4343" fill-rule="evenodd" clip-rule="evenodd" d="M178.977 81.5285L180.678 79.8277V91.1663L178.977 89.4655V81.5285Z" fill="#E6E6E6" />
                                <path id="Stroke 4345" d="M178.977 81.5285V89.4655" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4347" d="M180.678 91.1663V79.8277" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4349" fill-rule="evenodd" clip-rule="evenodd" d="M173.308 81.5285H175.008V89.4655H173.308V81.5285Z" fill="#E6E6E6" />
                                <path id="Stroke 4351" d="M173.308 81.5285V89.4655" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4353" d="M175.009 89.4655V81.5285" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4355" fill-rule="evenodd" clip-rule="evenodd" d="M144.961 79.8277L146.662 81.5285V89.4655H144.961V79.8277Z" fill="#E6E6E6" />
                                <path id="Stroke 4357" d="M144.961 79.8277V89.4655" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4359" d="M146.662 89.4655V81.5285" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4361" fill-rule="evenodd" clip-rule="evenodd" d="M153.465 81.5285H155.166V89.4655H153.465V81.5285Z" fill="#E6E6E6" />
                                <path id="Stroke 4363" d="M153.465 81.5285V89.4655" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4365" d="M155.166 89.4655V81.5285" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4367" fill-rule="evenodd" clip-rule="evenodd" d="M187.764 87.7647V91.1663H180.678V87.7647H187.764Z" fill="#E6E6E6" />
                                <path id="Stroke 4369" d="M187.764 87.7647H180.678" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4371" d="M180.678 87.7647V91.1663" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4373" d="M180.678 91.1663H187.764" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4375" fill-rule="evenodd" clip-rule="evenodd" d="M7.06123 40.1454V103.817H-0.0253906V33.0588L7.06123 40.1454Z" fill="#E6E6E6" />
                                <path id="Stroke 4379" d="M7.06104 103.817V40.1454" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4381" fill-rule="evenodd" clip-rule="evenodd" d="M129.94 40.1454H128.24V16.3344H129.94V40.1454Z" fill="#E6E6E6" />
                                <path id="Stroke 4383" d="M129.94 38.4446V16.3344" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4385" d="M128.24 16.3344V40.1454" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4387" fill-rule="evenodd" clip-rule="evenodd" d="M136.744 40.1454H135.043V14.6336H136.744V40.1454Z" fill="#E6E6E6" />
                                <path id="Stroke 4389" d="M136.744 40.1454V14.6336" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4391" d="M135.043 16.3344V20.3029" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4393" d="M135.043 22.0037V40.1454" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4395" fill-rule="evenodd" clip-rule="evenodd" d="M135.043 38.4446V40.1454H128.24V38.4446H135.043Z" fill="#E6E6E6" />
                                <path id="Stroke 4397" d="M135.043 38.4446H129.94" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4399" d="M128.24 40.1454H135.043" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4401" fill-rule="evenodd" clip-rule="evenodd" d="M135.043 14.6336V16.3344H128.24V14.6336H135.043Z" fill="#E6E6E6" />
                                <path id="Stroke 4403" d="M135.043 14.6336H128.24" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4405" d="M128.24 16.3344H135.043" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4407" fill-rule="evenodd" clip-rule="evenodd" d="M135.043 20.3029V22.0036H130.082V20.3029H135.043Z" fill="#E6E6E6" />
                                <path id="Stroke 4409" d="M135.043 20.3029H130.082" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4411" d="M130.082 22.0037H135.043" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4413" fill-rule="evenodd" clip-rule="evenodd" d="M134.901 14.6336V7.41937H136.744V14.6336H134.901Z" fill="#E6E6E6" />
                                <path id="Stroke 4415" d="M136.744 14.6336V7.41937" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4417" d="M134.901 7.41937V14.6336" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4589" fill-rule="evenodd" clip-rule="evenodd" d="M102.022 254.042L93.5181 254.04L93.5209 211.52L102.025 211.523L102.022 254.042Z" fill="#E6E6E6" />
                                <path id="Stroke 4591" d="M102.022 254.042L102.025 211.523" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4593" d="M102.025 211.523L93.5208 211.52" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4595" d="M93.5209 211.52L93.5181 254.04" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4597" d="M93.5181 254.04L102.022 254.042" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4599" fill-rule="evenodd" clip-rule="evenodd" d="M194.857 254.042H187.77V211.523H194.857V254.042Z" fill="#E6E6E6" />
                                <path id="Stroke 4601" d="M194.857 254.042V211.523" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4603" d="M194.857 211.523H187.77" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4605" d="M187.77 211.523V254.042" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4607" d="M187.77 254.042H194.857" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4609" fill-rule="evenodd" clip-rule="evenodd" d="M8.47563 137.833H-0.0283203L-0.0254857 103.817H8.47846L8.47563 137.833Z" fill="#E6E6E6" />
                                <path id="Stroke 4611" d="M8.47559 137.833L8.47842 103.817" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4613" d="M8.47856 103.817H-0.0253906" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4617" d="M-0.0283203 137.833H8.47563" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4619" fill-rule="evenodd" clip-rule="evenodd" d="M102.019 137.833H93.5151L93.518 103.817H102.022L102.019 137.833Z" fill="#E6E6E6" />
                                <path id="Stroke 4621" d="M102.019 137.833L102.022 103.817" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4623" d="M102.022 103.817H93.5181" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4625" d="M93.518 103.817L93.5151 137.833" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4627" d="M93.5151 137.833H102.019" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4629" fill-rule="evenodd" clip-rule="evenodd" d="M194.854 137.833H187.767V103.817H194.854V137.833Z" fill="#E6E6E6" />
                                <path id="Stroke 4631" d="M194.854 137.833V103.817" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4633" d="M194.854 103.817H187.767" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4635" d="M187.767 103.817V137.833" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4637" d="M187.767 137.833H194.854" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4639" fill-rule="evenodd" clip-rule="evenodd" d="M194.851 0.332764V7.41939H58.7878V0.332764H194.851Z" fill="#E6E6E6" />
                                <path id="Stroke 4641" d="M194.851 0.332764H58.7878" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4643" d="M58.7878 0.332764V7.41939" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4645" d="M58.7878 7.41937H194.851" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4647" d="M194.851 7.41939V0.332764" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4709" fill-rule="evenodd" clip-rule="evenodd" d="M170.252 119.088H187.764V136.095H170.252V119.088Z" fill="white" />
                                <path id="Fill 4711" fill-rule="evenodd" clip-rule="evenodd" d="M172.063 119.371H185.953V135.812H172.063V119.371Z" fill="white" />
                                <path id="Stroke 4713" d="M185.953 119.371H172.063" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4715" d="M185.953 135.812V119.371" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4717" d="M172.063 135.812H185.953" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4719" d="M172.063 119.371V135.812" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4721" d="M184.884 123.07C184.884 121.934 183.963 121.015 182.829 121.015C181.693 121.015 180.774 121.934 180.774 123.07C180.774 124.204 181.693 125.125 182.829 125.125C183.963 125.125 184.884 124.204 184.884 123.07" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4723" d="M179.207 124.006C179.207 122.362 177.874 121.029 176.23 121.029C174.586 121.029 173.254 122.362 173.254 124.006C173.254 125.65 174.586 126.982 176.23 126.982C177.874 126.982 179.207 125.65 179.207 124.006" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4725" d="M184.839 131.702C184.839 130.293 183.697 129.151 182.288 129.151C180.879 129.151 179.737 130.293 179.737 131.702C179.737 133.111 180.879 134.253 182.288 134.253C183.697 134.253 184.839 133.111 184.839 131.702" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4727" d="M177.869 132.277C177.869 131.141 176.95 130.222 175.813 130.222C174.68 130.222 173.758 131.141 173.758 132.277C173.758 133.411 174.68 134.332 175.813 134.332C176.95 134.332 177.869 133.411 177.869 132.277" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4729" d="M170.252 119.088V136.095" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4731" d="M187.764 119.088V136.095" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4733" d="M170.252 119.088H187.764" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4735" d="M170.252 136.095H187.764" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4737" fill-rule="evenodd" clip-rule="evenodd" d="M153.244 108.174V91.1663H170.252V108.174H153.244Z" fill="white" />
                                <path id="Fill 4739" fill-rule="evenodd" clip-rule="evenodd" d="M154.52 106.048L154.117 105.884L153.953 105.481V92.4419L154.117 92.0422L154.52 91.8749H168.976L169.376 92.0422L169.543 92.4419V105.481L169.376 105.884L168.976 106.048H154.52Z" fill="white" />
                                <path id="Stroke 4741" d="M154.52 106.048C154.205 106.048 153.953 105.796 153.953 105.481" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4743" d="M153.953 92.4419V105.481" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4745" d="M153.953 92.4419C153.953 92.1301 154.205 91.8749 154.52 91.8749" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4747" d="M168.976 91.8749H154.52" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4749" d="M168.976 91.8749C169.288 91.8749 169.543 92.1301 169.543 92.4419" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4751" d="M169.543 105.481V92.4419" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4753" d="M169.543 105.481C169.543 105.796 169.288 106.048 168.976 106.048" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4755" d="M154.52 106.048H168.976" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4757" d="M153.244 108.174H170.252" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4759" d="M153.244 91.1663H170.252" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4761" d="M153.244 108.174V91.1663" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4763" d="M170.252 108.174V91.1663" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4765" d="M155.937 104.631H167.559" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4767" d="M168.126 104.064V95.2766" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4769" d="M167.559 94.7096H155.937" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4771" d="M155.37 95.2766V104.064" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4775" d="M168.126 104.064C168.126 104.379 167.871 104.631 167.559 104.631" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4777" d="M167.559 94.7096C167.871 94.7096 168.126 94.9647 168.126 95.2765" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4779" d="M155.37 95.2765C155.37 94.9647 155.622 94.7096 155.937 94.7096" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4781" d="M155.937 104.631C155.622 104.631 155.37 104.379 155.37 104.064" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4783" fill-rule="evenodd" clip-rule="evenodd" d="M161.385 94.205L161.053 93.7911L161.093 93.2611L161.481 92.9011H162.012L162.403 93.2611L162.442 93.7911L162.111 94.205V93.5757L162.003 93.3206L161.748 93.2129L161.49 93.3206L161.385 93.5757V94.205Z" fill="white" />
                                <path id="Stroke 4785" d="M161.385 94.205C161.161 94.0746 161.022 93.8365 161.022 93.5757C161.022 93.176 161.348 92.85 161.748 92.85C162.148 92.85 162.474 93.176 162.474 93.5757C162.474 93.8365 162.335 94.0746 162.111 94.205" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4787" d="M162.111 93.5757V94.205" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4789" d="M161.385 93.5757C161.385 93.3773 161.547 93.2129 161.748 93.2129C161.949 93.2129 162.111 93.3773 162.111 93.5757" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4791" d="M161.385 94.205V93.5757" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4793" fill-rule="evenodd" clip-rule="evenodd" d="M161.385 93.5757L161.49 93.3206L161.748 93.2129L162.003 93.3206L162.111 93.5757V98.4598L162.08 98.542L161.748 98.6639L161.416 98.542L161.385 98.4598V93.5757Z" fill="white" />
                                <path id="Stroke 4795" d="M161.385 93.5757C161.385 93.3773 161.547 93.2129 161.748 93.2129C161.949 93.2129 162.111 93.3773 162.111 93.5757" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4797" d="M162.111 98.4598V93.5757" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4799" d="M162.111 98.4598C162.111 98.4882 162.099 98.5194 162.08 98.542" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4801" d="M162.08 98.5421C161.986 98.6214 161.87 98.6639 161.748 98.6639C161.626 98.6639 161.51 98.6214 161.416 98.5421" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4803" d="M161.416 98.542C161.397 98.5194 161.385 98.4882 161.385 98.4598" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4805" d="M161.385 93.5757V98.4598" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4807" fill-rule="evenodd" clip-rule="evenodd" d="M157.847 93.4907L158.12 92.9776L158.672 92.7905L159.2 93.0343L159.415 93.5757L159.2 94.1143L158.672 94.3609L158.122 94.1767L157.847 93.6636L158.216 93.6381L158.366 93.9017L158.661 93.9953L158.936 93.862L159.049 93.5757L158.936 93.2923L158.661 93.159L158.366 93.2497L158.216 93.5162L157.847 93.4907Z" fill="white" />
                                <path id="Stroke 4809" d="M157.847 93.4907C157.972 93.4936 158.094 93.5021 158.216 93.5162" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4811" d="M158.216 93.5162C158.244 93.3121 158.423 93.1591 158.63 93.1591C158.862 93.1591 159.049 93.3461 159.049 93.5758" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4813" d="M159.049 93.5757C159.049 93.8082 158.862 93.9953 158.63 93.9953C158.423 93.9953 158.244 93.8422 158.216 93.6381" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4815" d="M158.216 93.6381C158.094 93.6495 157.972 93.658 157.847 93.6636" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4819" d="M157.847 93.4907C157.893 93.091 158.23 92.7905 158.63 92.7905C159.063 92.7905 159.415 93.142 159.415 93.5757C159.415 94.0094 159.063 94.3638 158.63 94.3638C158.23 94.3638 157.893 94.0605 157.847 93.6636" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4821" fill-rule="evenodd" clip-rule="evenodd" d="M159.05 93.5758L158.925 93.8734L158.63 93.9953L158.332 93.8734L158.21 93.5758L158.332 93.2809L158.63 93.1591L158.925 93.2809L159.05 93.5758Z" fill="white" />
                                <path id="Stroke 4823" d="M159.05 93.5757C159.05 93.8082 158.862 93.9953 158.63 93.9953C158.398 93.9953 158.21 93.8082 158.21 93.5757" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4825" d="M158.21 93.5758C158.21 93.3461 158.398 93.1591 158.63 93.1591C158.862 93.1591 159.05 93.3461 159.05 93.5758" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4827" fill-rule="evenodd" clip-rule="evenodd" d="M157.028 93.5304H157.025L158.213 93.5134V93.6353L157.025 93.6211L157.003 93.5927L157.006 93.5587L157.028 93.5304Z" fill="white" />
                                <path id="Stroke 4829" d="M157.025 93.5304H157.028" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4831" d="M157.025 93.5304C157.241 93.4992 157.459 93.485 157.68 93.485C157.859 93.485 158.037 93.4964 158.213 93.5134" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4833" d="M158.213 93.6353C158.21 93.6154 158.21 93.5956 158.21 93.5757C158.21 93.5559 158.21 93.536 158.213 93.5134" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4835" d="M158.213 93.6353C158.037 93.6551 157.859 93.6636 157.68 93.6636C157.459 93.6636 157.241 93.6494 157.025 93.6211" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4837" d="M157.026 93.6211C157.011 93.6098 157 93.5956 157 93.5757C157 93.5587 157.011 93.5389 157.028 93.5304" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4839" fill-rule="evenodd" clip-rule="evenodd" d="M165.646 93.4907L165.28 93.5162L165.13 93.2498L164.835 93.1591L164.56 93.2923L164.446 93.5758L164.56 93.8621L164.835 93.9953L165.13 93.9017L165.28 93.6381L165.646 93.6636L165.373 94.1767L164.823 94.361L164.296 94.1172L164.081 93.5758L164.296 93.0372L164.823 92.7934L165.373 92.9776L165.646 93.4907Z" fill="white" />
                                <path id="Stroke 4841" d="M165.28 93.5162C165.402 93.5021 165.524 93.4936 165.649 93.4907" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4843" d="M164.447 93.5758C164.447 93.3461 164.634 93.1591 164.866 93.1591C165.073 93.1591 165.252 93.3121 165.28 93.5162" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4845" d="M165.28 93.6381C165.252 93.8422 165.073 93.9953 164.866 93.9953C164.634 93.9953 164.447 93.8082 164.447 93.5757" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4847" d="M165.646 93.6636C165.524 93.658 165.402 93.6495 165.28 93.6381" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4851" d="M165.646 93.6636C165.603 94.0605 165.266 94.3638 164.866 94.3638C164.432 94.3638 164.081 94.0094 164.081 93.5757C164.081 93.142 164.432 92.7905 164.866 92.7905C165.266 92.7905 165.603 93.091 165.646 93.4907" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4853" fill-rule="evenodd" clip-rule="evenodd" d="M164.447 93.5758L164.568 93.2809L164.866 93.1591L165.161 93.2809L165.286 93.5758L165.161 93.8734L164.866 93.9953L164.568 93.8734L164.447 93.5758Z" fill="white" />
                                <path id="Stroke 4855" d="M164.447 93.5758C164.447 93.3461 164.634 93.1591 164.866 93.1591C165.099 93.1591 165.286 93.3461 165.286 93.5758" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4857" d="M165.286 93.5757C165.286 93.8082 165.099 93.9953 164.866 93.9953C164.634 93.9953 164.447 93.8082 164.447 93.5757" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4859" fill-rule="evenodd" clip-rule="evenodd" d="M166.468 93.5304L166.49 93.5587L166.493 93.5927L166.471 93.6211L165.283 93.6353L165.28 93.5134L166.471 93.5304H166.468Z" fill="white" />
                                <path id="Stroke 4861" d="M166.468 93.5304C166.485 93.5389 166.493 93.5587 166.493 93.5757C166.493 93.5956 166.485 93.6098 166.471 93.6211" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4863" d="M166.47 93.6211C166.255 93.6494 166.034 93.6636 165.816 93.6636C165.637 93.6636 165.458 93.6551 165.283 93.6353" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4865" d="M165.28 93.5134C165.286 93.536 165.286 93.5559 165.286 93.5757C165.286 93.5956 165.286 93.6154 165.283 93.6353" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4867" d="M165.28 93.5134C165.459 93.4964 165.637 93.485 165.816 93.485C166.034 93.485 166.255 93.4992 166.471 93.5304" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4869" d="M166.471 93.5304H166.468" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4871" fill-rule="evenodd" clip-rule="evenodd" d="M14.2641 168.615L14.2924 181.73L11.0127 181.739L10.9844 168.62L14.2641 168.615Z" fill="white" />
                                <path id="Stroke 4873" d="M14.2639 168.615L14.2923 181.73" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4875" d="M14.2924 181.731L11.0127 181.739" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4877" d="M11.0127 181.739L10.9844 168.62" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4879" d="M10.9844 168.62L14.2641 168.615" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4881" fill-rule="evenodd" clip-rule="evenodd" d="M13.3201 162.055L13.374 188.293H12.6653L11.9453 181.736L11.917 168.617L12.6115 162.058L13.3201 162.055Z" fill="white" />
                                <path id="Stroke 4883" d="M13.3201 162.055L13.3739 188.293" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4885" d="M13.3739 188.293H12.6653" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4887" d="M12.6653 188.293L11.9453 181.736" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4889" d="M11.9453 181.736L11.917 168.617" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4891" d="M11.917 168.617L12.6115 162.058" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4893" d="M12.6113 162.058L13.32 162.055" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4895" d="M13.0876 186.544L13.0847 184.795" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4897" d="M13.0848 184.795H12.9062" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4899" d="M12.9062 184.795L12.9119 186.544" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4901" d="M12.9119 186.544H13.0876" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4903" d="M13.0848 184.358L13.0791 182.609" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4905" d="M13.0791 182.609H12.9033" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4907" d="M12.9033 182.609L12.9062 184.358" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4909" d="M12.9062 184.358H13.0848" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4911" d="M13.079 182.17L13.0762 181.297" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4913" d="M13.0764 181.297H12.9006" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4915" d="M12.9006 181.297V182.17" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4917" d="M12.9006 182.17H13.0792" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4919" d="M12.6113 162.058L12.6652 188.293" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4921" fill-rule="evenodd" clip-rule="evenodd" d="M102.138 190.144L102.166 203.262L98.8867 203.268L98.8584 190.149L102.138 190.144Z" fill="white" />
                                <path id="Stroke 4923" d="M102.138 190.144L102.167 203.262" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4925" d="M102.166 203.263L98.8867 203.268" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4927" d="M98.8867 203.268L98.8584 190.149" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4929" d="M98.8584 190.149L102.138 190.144" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4931" fill-rule="evenodd" clip-rule="evenodd" d="M101.194 183.587L101.248 209.822L100.539 209.825L99.8194 203.265L99.791 190.149L100.486 183.587H101.194Z" fill="white" />
                                <path id="Stroke 4933" d="M101.194 183.587L101.248 209.822" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4935" d="M101.248 209.822L100.539 209.825" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4937" d="M100.539 209.825L99.8193 203.265" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4939" d="M99.8194 203.265L99.791 190.149" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4941" d="M99.791 190.149L100.486 183.587" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4943" d="M100.486 183.587H101.194" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4945" d="M100.962 208.073L100.959 206.324" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4947" d="M100.959 206.324H100.78" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4949" d="M100.78 206.324L100.786 208.073" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4951" d="M100.786 208.073H100.962" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4953" d="M100.959 205.887L100.953 204.138" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4955" d="M100.953 204.138H100.778" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4957" d="M100.778 204.138L100.78 205.887" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4959" d="M100.78 205.887H100.959" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4961" d="M100.953 203.702L100.95 202.826" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4963" d="M100.95 202.826H100.775" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4965" d="M100.775 202.826V203.702" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4967" d="M100.775 203.702H100.953" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4969" d="M100.486 183.587L100.539 209.825" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 4971" fill-rule="evenodd" clip-rule="evenodd" d="M187.784 50.2198L187.66 50.5203L187.359 50.645H175.454L175.153 50.5203L175.028 50.2198V34.0623L175.153 33.7618L175.454 33.6371H187.359L187.66 33.7618L187.784 34.0623V50.2198Z" fill="white" />
                                <path id="Stroke 4973" d="M187.784 50.2198C187.784 50.4551 187.594 50.645 187.359 50.645" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4975" d="M175.454 50.645H187.359" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4977" d="M175.454 50.645C175.218 50.645 175.028 50.4551 175.028 50.2198" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4979" d="M175.028 34.0623V50.2198" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4981" d="M175.028 34.0623C175.028 33.827 175.218 33.6371 175.454 33.6371" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4983" d="M187.359 33.6371H175.454" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4985" d="M187.359 33.6371C187.594 33.6371 187.784 33.827 187.784 34.0623" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4987" d="M187.784 50.2198V34.0623" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4989" d="M184.666 49.3694V34.9127" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4991" d="M184.241 34.4875H176.304" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4993" d="M175.879 34.9127V49.3694" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4995" d="M176.304 49.7946H184.241" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4997" d="M184.241 34.4875C184.476 34.4875 184.666 34.6774 184.666 34.9127" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 4999" d="M175.879 34.9127C175.879 34.6774 176.069 34.4875 176.304 34.4875" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5001" d="M176.304 49.7946C176.069 49.7946 175.879 49.6047 175.879 49.3694" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5003" d="M184.666 49.3694C184.666 49.6047 184.476 49.7946 184.241 49.7946" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Fill 5005" fill-rule="evenodd" clip-rule="evenodd" d="M186.083 42.8497L184.896 42.7363L184.624 42.6428L183.124 42.4557L182.926 42.3508L182.846 42.141L182.926 41.9313L183.124 41.8264L184.624 41.6393L184.896 41.5458L186.083 41.4324L186.585 41.6393L186.792 42.141L186.585 42.6428L186.083 42.8497Z" fill="white" />
                                <path id="Stroke 5007" d="M186.083 42.8497L184.896 42.7363" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5009" d="M184.896 42.7363C184.799 42.7278 184.706 42.6966 184.624 42.6428" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5011" d="M184.624 42.6427L183.124 42.4557" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5013" d="M183.124 42.4556C182.965 42.4358 182.846 42.2997 182.846 42.141C182.846 41.9823 182.965 41.8462 183.124 41.8264" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5015" d="M183.124 41.8264L184.624 41.6393" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5017" d="M184.624 41.6393C184.706 41.5854 184.799 41.5542 184.896 41.5457" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5019" d="M184.896 41.5458L186.083 41.4324" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5021" d="M186.083 41.4324C186.475 41.4324 186.792 41.7499 186.792 42.141C186.792 42.5322 186.475 42.8497 186.083 42.8497" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5023" d="M185.378 41.7555H184.955" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5025" d="M184.955 42.5265H185.378" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5027" d="M185.378 42.5265V41.7555" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5029" d="M184.955 42.5265C184.743 42.5265 184.57 42.3536 184.57 42.141C184.57 41.9284 184.743 41.7555 184.955 41.7555" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5031" d="M184.624 42.6427C184.454 42.535 184.352 42.3451 184.352 42.141C184.352 41.9369 184.454 41.7498 184.624 41.6393" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5033" d="M133.555 10.6566C133.555 9.79483 132.857 9.0975 131.996 9.0975C131.134 9.0975 130.437 9.79483 130.437 10.6566C130.437 11.5183 131.134 12.2156 131.996 12.2156C132.857 12.2156 133.555 11.5183 133.555 10.6566" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5035" d="M186.217 85.4771C186.217 84.6154 185.517 83.9181 184.658 83.9181C183.796 83.9181 183.099 84.6154 183.099 85.4771C183.099 86.336 183.796 87.0362 184.658 87.0362C185.517 87.0362 186.217 86.336 186.217 85.4771" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Stroke 5037" d="M133.555 10.6566C133.555 9.79483 132.857 9.0975 131.996 9.0975C131.134 9.0975 130.437 9.79483 130.437 10.6566C130.437 11.5183 131.134 12.2156 131.996 12.2156C132.857 12.2156 133.555 11.5183 133.555 10.6566" stroke="black" stroke-width="0.05" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <g id="Numbers">
                                <g class="marker" id="5">
                                    <circle id="Ellipse" cx="100" cy="28" r="10" fill="#E22836" />
                                    <path id="5_2" d="M99.5938 25.2539H102.285V26.2617H100.41L100.176 27.3086C100.241 27.2904 100.305 27.2773 100.367 27.2695C100.43 27.2591 100.49 27.2539 100.547 27.2539C101.068 27.2539 101.5 27.4323 101.844 27.7891C102.19 28.1432 102.363 28.5977 102.363 29.1523C102.363 29.7122 102.172 30.1849 101.789 30.5703C101.409 30.9531 100.945 31.1445 100.398 31.1445C99.9089 31.1445 99.4883 31.0052 99.1367 30.7266C98.7852 30.4479 98.5547 30.0664 98.4453 29.582H99.5938C99.6823 29.7617 99.7982 29.8984 99.9414 29.9922C100.087 30.0833 100.247 30.1289 100.422 30.1289C100.664 30.1289 100.87 30.0417 101.039 29.8672C101.208 29.6927 101.293 29.4688 101.293 29.1953C101.293 28.9297 101.214 28.7122 101.055 28.543C100.898 28.3711 100.708 28.2852 100.484 28.2852C100.365 28.2852 100.246 28.3151 100.129 28.375C100.014 28.4349 99.901 28.5247 99.7891 28.6445L98.8984 28.4453L99.5938 25.2539Z" fill="white" />
                                </g>
                                <g class="marker" id="4">
                                    <circle id="Ellipse_2" cx="163" cy="50" r="10" fill="#E22836" />
                                    <path id="4_2" d="M163.906 47.1094H165V50.8086H165.512V51.8203H165V53H163.93V51.8203H161.422V50.8086L163.906 47.1094ZM163.93 50.8086V48.8828L162.617 50.8086H163.93Z" fill="white" />
                                </g>
                                <g class="marker" id="3">
                                    <circle id="Ellipse_3" cx="52" cy="175" r="10" fill="#E22836" />
                                    <path id="3_2" d="M51.7773 173.672H50.7266C50.7812 173.247 50.9336 172.906 51.1836 172.648C51.5326 172.289 51.9714 172.109 52.5 172.109C52.9714 172.109 53.3659 172.259 53.6836 172.559C54.0039 172.858 54.1641 173.214 54.1641 173.625C54.1641 173.88 54.0938 174.113 53.9531 174.324C53.8151 174.535 53.6133 174.706 53.3477 174.836C53.6966 174.94 53.9688 175.122 54.1641 175.383C54.362 175.641 54.4609 175.945 54.4609 176.297C54.4609 176.812 54.2708 177.25 53.8906 177.609C53.5104 177.966 53.026 178.145 52.4375 178.145C51.8802 178.145 51.4258 177.977 51.0742 177.641C50.7227 177.302 50.5299 176.842 50.4961 176.262H51.5781C51.625 176.559 51.7279 176.78 51.8867 176.926C52.0482 177.069 52.2513 177.141 52.4961 177.141C52.7513 177.141 52.9622 177.059 53.1289 176.895C53.2982 176.73 53.3828 176.53 53.3828 176.293C53.3828 176.033 53.2695 175.812 53.043 175.633C52.8164 175.453 52.4896 175.361 52.0625 175.355V174.418C52.3255 174.397 52.5208 174.357 52.6484 174.297C52.7786 174.234 52.8789 174.15 52.9492 174.043C53.0221 173.936 53.0586 173.823 53.0586 173.703C53.0586 173.547 53.0039 173.418 52.8945 173.316C52.7852 173.212 52.6419 173.16 52.4648 173.16C52.3086 173.16 52.1667 173.208 52.0391 173.305C51.9115 173.398 51.8242 173.521 51.7773 173.672Z" fill="white" />
                                </g>
                                <g class="marker" id="2">
                                    <circle id="Ellipse_4" cx="145" cy="175" r="10" fill="#E22836" />
                                    <path id="2_2" d="M144.652 174.105H143.586C143.615 173.486 143.809 172.999 144.168 172.645C144.53 172.288 144.993 172.109 145.559 172.109C145.908 172.109 146.215 172.184 146.48 172.332C146.749 172.478 146.962 172.69 147.121 172.969C147.283 173.245 147.363 173.526 147.363 173.812C147.363 174.154 147.266 174.521 147.07 174.914C146.878 175.307 146.523 175.772 146.008 176.309L145.363 176.988H147.41V178H143.43V177.477L145.207 175.664C145.637 175.229 145.922 174.88 146.062 174.617C146.206 174.352 146.277 174.112 146.277 173.898C146.277 173.677 146.203 173.495 146.055 173.352C145.909 173.206 145.72 173.133 145.488 173.133C145.254 173.133 145.059 173.22 144.902 173.395C144.746 173.569 144.663 173.806 144.652 174.105Z" fill="white" />
                                </g>
                                <g class="marker" id="1">
                                    <circle id="Ellipse_5" cx="66" cy="65" r="10" fill="#E22836" />
                                    <path id="1_2" d="M65.5742 62.2539H67.2109V68H66.125V63.2812H64.9414L65.5742 62.2539Z" fill="white" />
                                </g>
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="195" height="267" fill="white" />
                            </clipPath>
                        </defs>
                                                </svg>
                                            </div>
                                            <ul class="filter-page-container-right-result-list-item-meta">
                                                <li>49.81 м²</li>
                                                <li>2 поверх</li>
                                                <li>1 комната</li>
                                                <li>1 черга, 2 секція</li>
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
    <a href="#" class="button button-skew button-red mobile-filter-button" id="mobile-filter-button"><span>Фильтр</span></a>
<?php require('footer.php'); ?>