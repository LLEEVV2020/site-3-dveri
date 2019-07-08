<!--form-group-wrapper_7.php-->
   <div class="form-group-wrapper template">
    <div class="container">
        <div class="h2">РАССЧИТЕМ ВАШИ ДВЕРИ ЗА <span>5 МИНУТ </span></div>

        <!--РАССЧИТЕМ ВАШИ ДВЕРИ ЗА 5 МИНУТ-->
        <form action="//<?php echo $_SERVER['SERVER_NAME']; ?>/php/mail.php" method="POST">
            <div class="h4">Заполните сейчас</div>
            <div class="b-sms_input  form-group  form-group-men">
                <input type="text" class="" data-validation="required" placeholder="Ваше имя" id="form_text_1155" name="phone" value="" size="0">
            </div>
            <div class="b-sms_input b-sms_input_tel form-group-phone form-group">
                <input type="text" class="phonemask input-phone" data-validation="required" placeholder="Ваш телефон" id="form_text_11" name="phone" value="" size="0">
            </div>
            <div class="b-sms_input  form-group form-group-email">
                <input type="text" class="" data-validation="required" placeholder="Ваш E-mail" id="form_text_1144" name="phone" value="" size="0">
            </div>
            <button class="red-button" type="submit">РАССЧИТАТЬ</button>
        </form>
    </div>
</div>