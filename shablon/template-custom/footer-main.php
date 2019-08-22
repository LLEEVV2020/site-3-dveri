   <!--footer-main -->
   <div class="es19_bg">
            <div class="container">
                <div class="flex-container">
                        <div class="b-left">
                
                            <a  href="tel:<?php if(empty(get_option('my_phone')) ){
                                                          echo "8 (4752) 33-33-35";
                                                      }
                                                      else{
                                                          echo get_option('my_phone'); 
                                                      } ?>">
                                <span class="comagic_phone"><?php if(empty(get_option('my_phone')) ){
                                                          echo "8 (4752) 33-33-35";
                                                      }
                                                      else{
                                                          echo get_option('my_phone'); 
                                                      } ?></span>
                            </a>
                            
                            
                            <div class="es19_time hidden-md hidden-sm hidden-xs">Ежедневно с 9:00 до 23:00 </div>
                        </div>
        
                        <div class="b-right">
                            <span>e-mail: <a href="mailto:<?php if(empty(get_option('my_mail')) ){
                                                          echo "avoshnikov@yandex.ru";
                                                      }
                                                      else{
                                                          echo get_option('my_mail'); 
                                                      } ?>"> <?php if(empty(get_option('my_mail')) ){
                                                          echo "avoshnikov@yandex.ru";
                                                      }
                                                      else{
                                                          echo get_option('my_mail'); 
                                                      } ?></a></span>
                            <a href="#legal-info" data-toggle="modal" class="b-link" data-target="#legal-info">Правовая информация</a>
                        </div>
                </div>
                

            </div>
        </div><!-- /.es19_bg -->
        <!--/footer-main -->