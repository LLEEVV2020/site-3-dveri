
        <!--- b-raschet -->
        <script type="text/javascript">
            stoim1mkv = 12500;   //старая стоимость 1 м2
            stoim1mkvnew = 7100;
            jQuery(document).ready(function () {

                //$('#inprass').val("0");

                costfin = $('#inprass').val() * stoim1mkv;
                $('#sksksk').html(costfin); // выводим финальную стоимость
                costfin = $('#inprass').val() * stoim1mkvnew;
                $('#sksksk-new').html(costfin); // выводим финальную стоимость
                function change_priceww() {
                    costfin = $('#inprass').val() * stoim1mkv;
                    $('#sksksk').html(costfin); // выводим финальную стоимость
                    costfin = $('#inprass').val() * stoim1mkvnew;
                    $('#sksksk-new').html(costfin); // выводим финальную стоимость
                }	// конец  change_priceww()



                // фильтрация ввода в поля только цифр
                jQuery('input#inprass').keypress(function (event) {
                    var key, keyChar;
                    if (!event) var event = window.event;
                    if (event.keyCode) key = event.keyCode;
                    else if (event.which) key = event.which;
                    if (key == null || key == 0 || key == 8 || key == 13 || key == 9 || key == 46 || key == 37 || key == 39) return true;
                    keyChar = String.fromCharCode(key);
                    if (!/\d/.test(keyChar)) return false;
                });

                // передаем значение введенное пользователем вручную
                jQuery("input#inprass").keyup(function () {
                    var value2 = jQuery("input#inprass").val();
                    //if (value2 > maxsliderver) { value2 = maxsliderver; jQuery("input#Costverbalk").val(maxsliderver)}
                    //if (value2 < minsliderver) { value2 = minsliderver; jQuery("input#Costverbalk").val(minsliderver)}
                    //jQuery("#sliderverbalk").slider("values",1,value2);
                    change_priceww();
                });

            });

        </script>
        <div class="b-raschet">
            <div class="container">
                <div class="h2">БЫСТРЫЙ РАСЧЕТ СТОИМОСТИ </div>
                <div class="b-raschet__form ">
                    <form>
                        <div class="b-form__block">
                            <div class="b-form__item">
                                <div class="b-form_lbl">Введите ширину шкафа</div>
                            </div>
                            <div class="b-form__item">
                                <div class="b-form__field">
                                    <input value="1"  type="text" placeholder="0" id="inprass">
                                </div>
                            </div>
                            <div class="b-form__item">
                                <div class="b-form_ravno"> = </div>
                            </div>
                            <div class="b-form__item">
                                    <span id="sksksk">12500</span> <span style="display:none;">р.</span>
                            </div>
                            <div class="b-form__item">
                                <div class="b-form_newprice">
                                    <span id="sksksk-new"> 7100</span> <span style="display:none;">р.</span>
                                </div>
                            </div>
                            <div class="b-form__item">
                                <a href="#" data-toggle="modal" data-target="#kupitDeshevle" >ДЕТАЛЬНЫЙ РАСЧЕТ</a>
                            </div>
                            
                        </div>
                    </form>
                </div>
                <div class="b-raschet__ttl1">Звоните сейчас и получите самое выгодное предложение! <br> Дешевле не найдете!</div>
            </div>
        </div>
<!--b-raschet"-->