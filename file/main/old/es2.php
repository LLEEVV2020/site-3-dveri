 <div class="es2">
    <div class="container">
        <!-- $$$$$$$ -->
    <!-- $$$$$$$ -->
    <!-- $$$$$$$ -->

    <div class="custom_h2">ХОТИТЕ ВСТРОЕННЫЙ ШКАФ СО СКИДКОЙ ДО 63%?</div>
    

    
    <p>Отправьте заявку прямо сейчас и получите грандиозную скидку на шкаф вашей мечты! <br>
            Внимание! Срок действия акции ограничен
            только до <span class="akcia2"></span></p>

    <div class="h2">
            
            <i id="akcia" style="font-style: normal;"></i>
            Лучшие цены на ремонт <?php echo get_option('my_city_v'); ?> 
        </div>
        
    <script>
        //Работа с ползунком на туч устройствах
        //$('#slider').draggable();
        //$('#sliderhor').draggable();
        //$('#sliderver').draggable();
        var months = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
        var month_days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        var now = new Date();
        var month = now.getMonth();
        var day = now.getDate();

        if (day < 15) {
            var start = 1;
            var end = 15;
        }
        else {
            var start = 15;
            var end = month_days[month];
        }
        $('#akcia').html('C ' + start + ' по ' + end + ' ' + months[month] + '!');	
        $('.akcia2').html( end + ' ' + months[month] + '!');	
    </script>
        
        <!-- $$$$$$$ -->
        <!-- $$$$$$$ -->
        <!-- $$$$$$$ -->
        <div class="es2_block">


            <div class="es2_oknatseny">
                <div class="es2_oknatseny__zag"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/logo_es2.png" alt=""></div>
                <div class="es2_but" data-toggle="modal" data-target="#kupitDeshevle">ЗАКАЗАТЬ ПО
ЛУЧШЕЙ ЦЕНЕ</div>

                <div class="es2_oknatseny_row">
                    <div class="es2_oknatseny_row_left">
                        Шкаф купе с зеркалом
                    </div>
                    <div class="es2_oknatseny_row_right es2_red">7 100 <span>р.</span></div>
                </div>

                <div class="es2_oknatseny_row">
                    <div class="es2_oknatseny_row_left">
                            Шкаф
                            встроенный
                    </div>
                    <div class="es2_oknatseny_row_right es2_red">7 100 <span>р.</span></div>
                </div>
                <div class="es2_oknatseny_row">
                    <div class="es2_oknatseny_row_left">
                            Шкаф
                            угловой
                    </div>
                    <div class="es2_oknatseny_row_right es2_red">7 100 <span>р.</span></div>
                </div>
                <div class="es2_oknatseny_row">
                    <div class="es2_oknatseny_row_left">
                        Качество
                    </div>
                    <div class="es2_oknatseny_row_right es2_oknatseny_row_right_stars">
                        <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                        <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                        <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                        <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                        <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                    </div>
                </div>
                <div class="es2_oknatseny_row">
                    <div class="es2_oknatseny_row_left">
                        Гарантия
                    </div>
                    <div class="es2_oknatseny_row_right es2_red">3 <span>лет</span></div>
                </div>


            </div>

            <div class="es2_bgtransper"></div>


            <div class='iosslider_2'>

                <div class='slider'>


                    <div class="es2_okna slide">
                        <div class="es2_okna__zag">частные мастера</div>
                        <div class="es2_okna_tsena">
                            <div class="es2_okna_right">7400 <span>р.</span></div>
                        </div>

                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right"> 7800 <span>р.</span></div>
                        </div>
                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">7500 <span>р.</span></div>
                        </div>

                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                            </div>
                        </div>
                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right"><span>нет / отсутствует</span></div>
                        </div>


                    </div>
                    <div class="es2_okna slide">
                        <div class="es2_okna__zag">компании-дилеры</div>
                        <div class="es2_okna_tsena">
                            <div class="es2_okna_right">8100 <span>р.</span></div>
                        </div>

                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">8700 <span>р.</span></div>
                        </div>
                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">8300 <span>р.</span></div>
                        </div>



                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                            </div>
                        </div>

                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">2 <span>года</span></div>
                        </div>

                    </div>

                    <div class="es2_okna slide">
                        <div class="es2_okna__zag">перекупщики</div>
                        <div class="es2_okna_tsena">
                            <div class="es2_okna_right">8900 <span>р.</span></div>
                        </div>

                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">9300 <span>р.</span></div>
                        </div>
                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">9100 <span>р.</span></div>
                        </div>


                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                            </div>
                        </div>
                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">1 <span>год</span></div>
                        </div>


                    </div>
                    <div class="es2_okna slide">
                        <div class="es2_okna__zag">Мегабренды</div>
                        <div class="es2_okna_tsena">
                            <div class="es2_okna_right">7 400 <span>р.</span></div>
                        </div>

                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">7 500 <span>р.</span></div>
                        </div>
                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">7 800 <span>р.</span></div>
                        </div>


                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/es11_star.png" alt="">
                            </div>
                        </div>
                        <div class="es2_okna_row">
                            <div class="es2_okna_row_right">2 <span>года</span></div>
                        </div>

                    </div>

                </div><!-- /.slider -->
            </div>
        </div>
        <!-- /.es2_block -->
    </div>
</div><!-- /.es2 -->