<div class="b_contact_ceo_bg">
   <div class="h2">ПИСЬМО ДИРЕКТОРУ (ЛИЧНО)</div>   
        
    
    <div class="b_contact_ceo_form">

        <form action="//<?php echo $_SERVER['SERVER_NAME']; ?>/php/send.php" method="POST">
            <input type="hidden" name="lang" value="письмо лично директору" />
            <input type="hidden" name="name_my_mail" value="<?php if(empty(get_option('my_mail')) ){
                                                          echo "avoshnikov@yandex.ru";
                                                      }
                                                      else{
                                                          echo get_option('my_mail'); 
                                                      }  ?>" />
            
            <div class="b_contact_ceo_input_name form-group">
                <input type="text" placeholder="Ваше имя" name="name" value="" size="0" />            </div>

            <div class="b_contact_ceo_input_tel form-group">
                <input type="text" placeholder="Ваш телефон" id="pismo_directoru_but" class="phonemask" data-validation="required" name="phone" value="" size="0" />            
            </div>

            <div class="b_contact_ceo_textarea">
                <textarea name="mess" cols="40" rows="5" placeholder="Ваше сообщение"></textarea>            
            </div>

            <div class="b_contact_ceo_but">

                <button class="red-button" type="submit">Отправить</button>

            </div>

        </form>   
     </div>
    <!-- /.b_contact_ceo_form -->
</div>
<!-- /.b_contact_ceo_bg -->