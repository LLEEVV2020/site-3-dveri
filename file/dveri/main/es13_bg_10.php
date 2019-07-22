<div class="es13_bg template">
    <div class="es13_bg__text">
        КУПИТЕ ДВЕРИ ПО НИЗКОЙ ЦЕНЕ!  <span>ВНИМАНИЕ! ОСТАЛОСЬ ВСЕГО:</span>
    </div>

    <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery.countdown.js"></script>
    <link href="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/countdown/jquery.countdown.css" rel="stylesheet" type="text/css">
    <script>
        $(function () {
            var note = $('#note'),
                ts = new Date(2017, 07, 31),
                newYear = true;
            if ((new Date()) > ts) {
                // The new year is here! Count towards something else.
                // Notice the *1000 at the end - time must be in milliseconds
                ts = (new Date()).getTime() + 10 * 24 * 60 * 60 * 1000;
                newYear = false;
            }
            $('#countdown_es13').countdown({
                timestamp: ts,
                callback: function (days, hours, minutes, seconds) {
                }
            });
        });
    </script>
    <div id="countdown_es13">
    </div>
    <div class="container">
        <!-- ######### Успей купить до подорожания! ######### -->
        <!-- ######### Успей купить до подорожания! ######### -->
        <!-- ######### Успей купить до подорожания! ######### -->
        <form action="//<?php echo $_SERVER['SERVER_NAME']; ?>/php/mail.php" method="POST">
            <input type="hidden" name="lang" value="КУПИТЕ ДВЕРИ ПО НИЗКОЙ ЦЕНЕ! " />
            <div class="es13_block">
                <div class="es13_item es13_input form-group">
                    <input type="text" class="phonemask" placeholder="Ваш телефон" data-validation="required"
                        id="form_text_9" name="phone" value="" size="0" />
                </div>
                <div class="es13_item ">
                    <button class="red-pink-button" type="submit">Зафиксировать <span>цену на 3 дня</span></button>
                </div>
                <p class="agreement white">Оставляя свои контактные данные, вы подтверждаете свое совершеннолетие, соглашаетесь на обработку персональных данных в соответствии с <a href="#">Правовой информацией</a></p>
            </div>
        </form>
        <!-- ######### Успей купить до подорожания! ######### -->
        <!-- ######### Успей купить до подорожания! ######### -->
        <!-- ######### Успей купить до подорожания! ######### -->
    </div>
</div>
<!-- /.es13_bg -->