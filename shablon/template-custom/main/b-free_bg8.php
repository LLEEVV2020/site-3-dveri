<!-- b-sms_bg -->
        <div class="b-sms_bg b-free_bg">
            <div class="container ">
                <div class="flex-container">
                    
                    <div class="b-sms-form">
                        <div class="b-sms__text">
                                ХОТИТЕ ШКАФ <span>БЕСПЛАТНО</span>?
                        </div>
                        <div class="b-sms__undertext">
                                Звоните сейчас и получите самое выгодное предложение!
                        </div>
                        <div class="b-sms__form">

                            <!-- ######### ХОТИТЕ ШКАФЫ БЕСПЛАТНО? ######### -->
                            <!-- ######### ХОТИТЕ ШКАФЫ БЕСПЛАТНО? ######### -->
                            <!-- ######### ХОТИТЕ ШКАФЫ БЕСПЛАТНО? ######### -->
                            <form action="//<?php echo $_SERVER['SERVER_NAME']; ?>/php/mail.php" method="POST">
                                <input type="hidden" name="lang" value="ХОТИТЕ ШКАФЫ БЕСПЛАТНО?" />
                                <input type="hidden" name="name_my_mail" value="<?php if(empty(get_option('my_mail')) ){
                                                          echo "avoshnikov@yandex.ru";
                                                      }
                                                      else{
                                                          echo get_option('my_mail'); 
                                                      }  ?>" />
                                
                                <div class="b-sms_input b-sms_input_tel form-group">
                                    <input type="text" class="phonemask input-phone" data-validation="required"
                                        placeholder="Ваш телефон" id="form_text_11" name="phone" value="" size="0" />
                                </div>
                                <div class="b-sms_but">
                                    <button class="red-button" type="submit">отправить</button>
                                </div>
                            </form>
                            <!-- ######### ХОТИТЕ ШКАФЫ БЕСПЛАТНО? ######### -->
                            <!-- ######### ХОТИТЕ ШКАФЫ БЕСПЛАТНО? ######### -->
                            <!-- ######### ХОТИТЕ ШКАФЫ БЕСПЛАТНО? ######### -->

                            <p>Оставляя свои контактные данные, вы подтверждаете свое совершеннолетие, соглашаетесь на обработку персональных данных в соответствии с <a href="#legal-info" data-toggle="modal"  data-target="#legal-info">Правовой информацией</a></p>

                        </div>
                    </div>
                    <div class="b-sms_phone">
                        <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/b_sms_phone4.png" alt="">
                    </div>

                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.b-sms_bg 2v -->