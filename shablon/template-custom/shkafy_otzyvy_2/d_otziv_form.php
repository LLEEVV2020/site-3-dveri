  <div class="d-otziv-form">
        <div class="container">
            <h2>Оставить отзыв</h2>

            <div class="es1_otzivy__form_bg">
                <form name="send_review" action="//<?php echo $_SERVER['SERVER_NAME']; ?>/php/mail4.php"
                    method="POST" enctype="multipart/form-data">
                       <input type="hidden" name="sessid" id="sessid"
                        value="e905fc88b8902fce1040d9c2729a833a" />
                        <input type="hidden" name="WEB_FORM_ID"
                        value="13" />
                        <input type="hidden" name="lang" value="отзыв клиента" />
            <input type="hidden" name="name_my_mail" value="<?php if(empty(get_option('my_mail')) ){
                                                          echo "avoshnikov@yandex.ru";
                                                      }
                                                      else{
                                                          echo get_option('my_mail'); 
                                                      }  ?>" />
                    <div class="es1_otzivy__form_bg__form_photo inpfilephoto" title="Прикрепить файл"
                        style="overflow: hidden;">
                        <img id="blphoto" src="#" alt="" />
                        <input name="form_image_47" onchange="readURL(this);" size="0" type="file" /><span
                            class="bx-input-file-desc"></span> </div>

                    <div class="es1_otzivy__form_bg__form_right">

                        <div class="es1_otzivy__form_bg__form_name">
                            <input type="text" placeholder="Ваше имя" id="reviewName" data-validation="required"
                                name="name" value="" size="0" /> </div>

                        <div class="es1_otzivy__form_bg__form_city">
                            <input type="text" placeholder="Город" name="city" value="" size="0" /> </div>

                        <div class="es1_otzivy__form_bg__form_text">
                            <textarea name="mess" cols="40" rows="5" placeholder="Ваш отзыв"
                                id="reviewText" data-validation="required"></textarea> </div>

                        <div class="es1_otzivy__form_bg__star">
                            Оценка работы компании:<span></span>
                            <nobr>
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/form_star_act.png" alt=""
                                    class="es1_otzivy__form_star_1 ratingStar current" data-raiting="1" />
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/form_star.png" alt="" class="es1_otzivy__form_star_2 ratingStar"
                                    data-raiting="2" />
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/form_star.png" alt="" class="es1_otzivy__form_star_3 ratingStar"
                                    data-raiting="3" />
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/form_star.png" alt="" class="es1_otzivy__form_star_4 ratingStar"
                                    data-raiting="4" />
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/form_star.png" alt="" class="es1_otzivy__form_star_5 ratingStar"
                                    data-raiting="5" /></nobr>
                        </div>
                        <input type="hidden" id="reviewRaiting" name="form_hidden_51" value="1" />
                        <div class="es1_otzivy__form_bg__rek">
                            Буду рекомендовать
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/rek.png" alt="" />
                        </div>

                    </div>

                        <input type="hidden" id="reviewRecomendate" name="form_hidden_52" value="0" />

                        

                </form>
                <input type="submit" name="web_form_submit" value="Оставить отзыв"  data-toggle="modal" data-target="#kupitDeshevle"/>
            </div>



        </div>
    </div>
    
   <!--
   <form name="send_review" action="//tolyatty.kvartir-remonty.ru/remont-kvartir-otzyvy/"
                    method="POST" enctype="multipart/form-data"><input type="hidden" name="sessid" id="sessid"
                        value="e905fc88b8902fce1040d9c2729a833a" /><input type="hidden" name="WEB_FORM_ID"
                        value="13" />
                    <div class="es1_otzivy__form_bg__form_photo inpfilephoto" title="Прикрепить файл"
                        style="overflow: hidden;">
                        <img id="blphoto" src="#" alt="" />
                        <input name="form_image_47" onchange="readURL(this);" size="0" type="file" /><span
                            class="bx-input-file-desc"></span> </div>

                    <div class="es1_otzivy__form_bg__form_right">

                        <div class="es1_otzivy__form_bg__form_name">
                            <input type="text" placeholder="Ваше имя" id="reviewName" data-validation="required"
                                name="form_text_48" value="" size="0" /> </div>

                        <div class="es1_otzivy__form_bg__form_city">
                            <input type="text" placeholder="Город" name="form_text_49" value="" size="0" /> </div>

                        <div class="es1_otzivy__form_bg__form_text">
                            <textarea name="form_textarea_50" cols="40" rows="5" placeholder="Ваш отзыв"
                                id="reviewText" data-validation="required"></textarea> </div>

                        <div class="es1_otzivy__form_bg__star">
                            Оценка работы компании:<span></span>
                            <nobr>
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/form_star_act.png" alt=""
                                    class="es1_otzivy__form_star_1 ratingStar current" data-raiting="1" />
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/form_star.png" alt="" class="es1_otzivy__form_star_2 ratingStar"
                                    data-raiting="2" />
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/form_star.png" alt="" class="es1_otzivy__form_star_3 ratingStar"
                                    data-raiting="3" />
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/form_star.png" alt="" class="es1_otzivy__form_star_4 ratingStar"
                                    data-raiting="4" />
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/form_star.png" alt="" class="es1_otzivy__form_star_5 ratingStar"
                                    data-raiting="5" /></nobr>
                        </div>
                        <input type="hidden" id="reviewRaiting" name="form_hidden_51" value="1" />
                        <div class="es1_otzivy__form_bg__rek">
                            Буду рекомендовать
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/rek.png" alt="" />
                        </div>

                    </div>

                        <input type="hidden" id="reviewRecomendate" name="form_hidden_52" value="0" />

                        <input type="submit" name="web_form_submit" value="Оставить отзыв" />

                </form>
    
    -->