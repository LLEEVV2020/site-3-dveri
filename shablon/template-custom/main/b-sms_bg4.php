<!-- b-sms_bg4 -->
<div class="b-sms_bg sms-discount">
    <div class="container ">
        <div class="flex-container">
            <div class="b-sms_phone">
                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/b_sms_phone.png" alt="">
            </div>
            <div class="b-sms-form">
                <div class="b-sms__text">
                    СМС-СКИДКА
                </div>
                <div class="b-sms__undertext">
                    Получите смс-купон на скидку, просто вписав свой номер телефона:
                </div>
                <div class="b-sms__form">

                    <!-- ######### СМС-СКИДКА ######### -->
                    <!-- ######### СМС-СКИДКА ######### -->
                    <!-- ######### СМС-СКИДКА ######### -->
                    <form action="//<?php echo $_SERVER['SERVER_NAME']; ?>/php/mail.php" method="POST">
                        <input type="hidden" name="lang" value="СМС-СКИДКА" />
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
                    <!-- ######### СМС-СКИДКА ######### -->
                    <!-- ######### СМС-СКИДКА ######### -->
                    <!-- ######### СМС-СКИДКА ######### -->

                    <p>Оставляя свои контактные данные, вы подтверждаете свое совершеннолетие, соглашаетесь на обработку персональных данных в соответствии с <a href="#legal-info" data-toggle="modal"  data-target="#legal-info">Правовой информацией</a></p>

                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.b-sms_bg4 -->