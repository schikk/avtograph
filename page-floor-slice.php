<?php require('header.php'); ?>
    <div class="page-wrapper">
        <main class="overflow-hidden">
            <div class="floor-slice-page-container">
                <div class="floor-slice-page-container-top">
                    <a href="page-floors.php">вернуться к генплану</a>
                </div>
                <div class="floor-slice-page-flex">
                    <div class="floor-slice-page-left">
                        <form action="#" method="POST">
                            <div class="floor-slice-page-form-section">
                                <span>Очередь</span>
                                <div class="floor-slice-page-form-section-radios-container">
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="order" value="1" checked="true">
                                        <span>1</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="order" value="2">
                                        <span>2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="floor-slice-page-form-section">
                                <span>Секция</span>
                                <div class="floor-slice-page-form-section-radios-container">
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="section" value="1" checked="true">
                                        <span>1</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="section" value="2">
                                        <span>2</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="section" value="3">
                                        <span>3</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="section" value="4">
                                        <span>4</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="section" value="5">
                                        <span>5</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="section" value="6">
                                        <span>6</span>
                                    </div>
                                </div>
                            </div>
                            <div class="floor-slice-page-form-section">
                                <span>Этаж</span>
                                <div class="floor-slice-page-form-section-radios-container">
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="1" checked="true">
                                        <span>1</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="2">
                                        <span>2</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="3">
                                        <span>3</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="4">
                                        <span>4</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="5">
                                        <span>5</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="6">
                                        <span>6</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="7">
                                        <span>7</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="8">
                                        <span>8</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="9">
                                        <span>9</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="10">
                                        <span>10</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="11">
                                        <span>11</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="12">
                                        <span>12</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="13">
                                        <span>13</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="14">
                                        <span>14</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="15">
                                        <span>15</span>
                                    </div>
                                    <div class="floor-slice-page-form-section-radio">
                                        <input type="radio" name="floor" value="16">
                                        <span>16</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <span class="mobile-floors-close-btn" id="mobile-floors-close-btn"></span>
                    </div>
                    <div class="floor-slice-page-right">
                        <div class="floor-slice-page-right-pane">
                            <div class="floor-slice-page-right-pane-img">
                                <img src="statics/img/floor-slice/floor-slice.png" alt="">    
                            </div>
                            <div class="floor-legend">
                                <ul class="floor-legend-list">
                                    <li class="green">1 — кiмнатнi</li>
                                    <li class="blue">2 — кiмнатнi</li>
                                    <li class="pink">3 — кiмнатнi</li>
                                    <li class="navy">4+ — кiмнатнi</li>
                                    <li class="red">2 — рiвневi</li>
                                </ul>
                            </div>
                            <div class="wind-rose">
                                <span>с</span>
                                <span>в</span>
                                <span>ю</span>
                                <span>з</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <a href="#" class="button button-skew button-red mobile-floor-button" id="mobile-floor-button"><span>Фильтр</span></a>
<?php require('footer.php'); ?>