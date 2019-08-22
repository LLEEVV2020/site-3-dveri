            <!--Бесплатная консультация-->
           <div class="es17_bg template es20_balcony">
            <div class="container">
                <div class="es17_girl">
                </div>
                
                
                
                <div class="es17_blockbg">
                    <h3>БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</h3>
                    <div class="time">Ежедневно с 8:00 до 23:00</div>
                    <div class="phone"><?php if(empty(get_option('my_phone')) ){
                                                          echo "8 (4752) 33-33-35";
                                                      }
                                                      else{
                                                          echo get_option('my_phone'); 
                                                      } ?></div>
                    <span>Оставьте свой номер телефона и мы перезвоним Вам через 5 минут</span>
                    <!-- ######### Бесплатная консультация ######### -->
                    <!-- ######### Бесплатная консультация ######### -->
                    <!-- ######### Бесплатная консультация ######### -->
                    <form action="//<?php echo $_SERVER['SERVER_NAME']; ?>/php/mail.php" method="POST">
                        <input type="hidden" name="lang" value="Бесплатная консультация" />
                        <div class="form-group_input form-group">
                            <input type="text" placeholder="Ваш телефон" class="phonemask" data-validation="required"
                                id="form_text_10" name="phone" value="" size="0" />
                        </div>
                        <button type="submit" class="red-pink-button"  style="color: #000;">Заказать звонок</button>
                    </form>
                    <!-- ######### Бесплатная консультация ######### -->
                    <!-- ######### Бесплатная консультация ######### -->
                    <!-- ######### Бесплатная консультация ######### -->

                    <p class="agreement ">Оставляя свои контактные данные, вы подтверждаете свое совершеннолетие, соглашаетесь на обработку персональных данных в соответствии с <a href="#">Правовой информацией</a></p>
                </div>
            </div>
        </div>
        <!-- /.es17_bg -->
