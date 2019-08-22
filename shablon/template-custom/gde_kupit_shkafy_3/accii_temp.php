   <div class="contact-wrap template contact-wrap-balcon">
            <div class="container">
                <h2>РАБОТАЕМ <?php echo get_option('my_city_po'); ?>:</h2>
                
                <div class="flex-container vcard">
                <?php if( get_option('my_city_lat') == "tambov") {?>
                    <div class="block-item">

                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/contact-tel2.png" alt="">
                        </div>
                        <div class="item item-main">
                           
                           <div><b style="font-weight: 700;">Звоните ежедневно</b> <br>Пн-Пт: 9.00 до 18.00<br>
Сб: 10.00 до 18.00<br>
Вс: 10.00 до 16.00</div>
                           
                            
                            <div class="tel"> <abbr class="value" title="8 (4752) 33-33-35">8 (4752) 33-33-35</abbr><br>
                            <abbr class="value" title="8-930-471-95-05">8-930-471-95-05</abbr>
                            </div>
                            <p class="email">avoshnikov@yandex.ru</p>
                        </div>
                    </div>
                    <div class="block-item">
                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/ykazatel.png" alt="">
                        </div>
                        <div class="item">
                            <div class="head">Центральный офис</div>
                            <p class="workhours">г. Тамбов, ул. Рылеева,
д.63 В  </p><br>
<p style="color: #AAAAAA;">
    Проезд до остановки "Учкомбинат":<br>
Автобусами: 14А, 14П, 18, 18А, 18С, 22, 28, 44, 55, 60, 60М, 61<br>
Маршрутка: 30, 61.
</p>
                       <p style="color: #AAAAAA;">
    
</p>
                        </div>
                    </div>
                    
                    
                    <div class="block-item">
                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/rekvizits.png" alt="">
                        </div>
                        <div class="item">
                            <div class="head">Реквизиты</div>
                            <p class="email">ООО “Двери купить”<br>
ИНН 7726370558 <br>
ОГРН 1167746224095 <br>
Р/С 40702810038000019853</p>
                        </div>
                    </div>

                    <?php } else {?>

                        <div class="block-item">

                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/contact-tel2.png" alt="">
                        </div>
                        <div class="item item-main">
                        
                        <div><b style="font-weight: 700;">Звоните ежедневно</b> 
                        с 8:00 до 23:00</div>
                        
                            
                            <div class="tel"> <abbr class="value" title="<?php if(empty(get_option('my_phone')) ){
                                                          echo "8 (4752) 33-33-35";
                                                      }
                                                      else{
                                                          echo get_option('my_phone'); 
                                                      } ?>"><?php if(empty(get_option('my_phone')) ){
                                                          echo "8 (4752) 33-33-35";
                                                      }
                                                      else{
                                                          echo get_option('my_phone'); 
                                                      } ?></abbr>
                            </div>
                            <p class="email"><?php if(empty(get_option('my_mail')) ){
                                                          echo "avoshnikov@yandex.ru";
                                                      }
                                                      else{
                                                          echo get_option('my_mail'); 
                                                      } ?></p>
                        </div>
                        </div>
                        <div class="block-item">
                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/ykazatel.png" alt="">
                        </div>
                        <div class="item">
                            <div class="head">Центральный офис</div>
                            <p class="workhours">г. Тамбов, ул. Рылеева,
                        д.63 В  </p><br>
                        <p style="color: #AAAAAA;">
                        Проезд до остановки "Учкомбинат":<br>
                        Автобусами: 14А, 14П, 18, 18А, 18С, 22, 28, 44, 55, 60, 60М, 61<br>
                        Маршрутка: 30, 61.
                        </p>
                        <p style="color: #AAAAAA;">

                        </p>
                        </div>
                        </div>


                        <div class="block-item">
                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/rekvizits.png" alt="">
                        </div>
                        <div class="item">
                            <div class="head">Реквизиты</div>
                            <p class="email">ООО “Двери купить”<br>
                        ИНН 7726370558 <br>
                        ОГРН 1167746224095 <br>
                        Р/С 40702810038000019853</p>
                        </div>
                        </div>

                    <?php } ?>
                </div>


            </div>
        </div>