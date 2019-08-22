<div class="contact-wrap">
            <div class="container">
                <h1>РАБОТАЕМ <?php echo get_option('my_city_po'); ?>:</h1>
                
                <div class="flex-container vcard">
                    <div class="block-item">
                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/contact-time.png" alt="">
                        </div>
                        <div class="item">
                            <div>ЗВОНИТЕ </div>
                            <p class="workhours">с 8:00 до 23:00</p>
                        </div>
                    </div>
                    <div class="block-item">
                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/contact-tel.png" alt="">
                        </div>
                        <div class="item">
                            <div class="tel"> <abbr class="value" title="8 (4752) 33-33-35"><?php if(empty(get_option('my_phone')) ){
                                                          echo "8 (4752) 33-33-35";
                                                      }
                                                      else{
                                                          echo get_option('my_phone'); 
                                                      } ?></abbr></div>
                            <p class="email"><?php if(empty(get_option('my_mail')) ){
                                                          echo "avoshnikov@yandex.ru";
                                                      }
                                                      else{
                                                          echo get_option('my_mail'); 
                                                      } ?></p>
                        </div>
                    </div>
                </div>


            </div>
        </div>