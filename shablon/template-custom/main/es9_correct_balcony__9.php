 <!-- Сложный блок, скрипты -->
        <div class="template es9_correct_balcony">
            <div class="container">
                <div class="h2">ВЫБЕРИТЕ СЕБЕ ПРАВИЛЬНЫЙ БАЛКОН </div>
            
                <p>Если Вы хотите защититься от дождя и снега, то самый оптимальный вариант - это
                        раздвижные окна из алюминия. Если Вам необходимо сделать теплый балкон или
                        объединить его с комнатой, то необходимо установить пластиковые окна.</p>

                <div class="calc_outside_balkon-filtr">
                    
                        <div class="calc_outside_hot calc_outside_balkon__li">Пластиковые окна</div>
                        <div class="hidden-sm hidden-xs calc_outside_flex">
                            <div class="calc_outside_img_hot"></div>
                            <div class="calc_outside_img_cold"></div>
                        </div>
                        <div class="calc_outside_cold calc_outside_balkon__li calc_outside_balkon__li_noact">Раздвижные окна</div>
                    																							
                </div><!-- /.calc_outside_balkon-filtr -->

                <div class="calc_outside_balkon">
                    
                    <div class="hot_right">
                        <div class="redzag">
                            Теплее раздвижных<br>окон на 47%</div>
                        <div class="textstvorki">
                            <div class="textstvorki__str">
                            </div>Створки у такого балкона<span> открываются во внутрь</span>
                        </div>
                        <div class="textmaxecon">максимальная<br>экономия тепла</div>
                        
                        <div class="yellowzag red-button">ВНЕШНЯЯ ОТДЕЛКА БАЛКОНА</div>
                        
                        <div class="calc_outside_ico">
                            <div class="calc_outside_ico1 calc_outside_ico1_act"></div>
                            <div class="calc_outside_ico2"></div>
                            <div class="calc_outside_ico3"></div>
                            <div class="calc_outside_ico4"></div>
                        </div><!-- /.calc_outside_ico -->

                        <a class="vnotbalzag" href="/otdelka-balkonov/">Внутренняя отделка балкона</a>
                        
                    </div><!-- /.hot_right -->
                    
                    <div class="cold_right">
                        <div class="redzag">Дешевле пластикового<br>балкона на 37%</div>
                        <div class="textstvorki">
                            <div class="textstvorki__str">
                            </div>Створки у такого балкона
                            <span> РАЗДВИГАЮТСЯ В СТОРОНЫ</span>
                        </div>

                        <div class="textmaxecon">максимальная<br>экономия пространства!</div>
                        
                        <div class="yellowzag red-button">ВНЕШНЯЯ ОТДЕЛКА БАЛКОНА</div>
                        <div class="calc_outside_ico">
                            <div class="calc_outside_ico1 calc_outside_ico1_act"></div>
                            <div class="calc_outside_ico2"></div>
                            <div class="calc_outside_ico3"></div>
                            <div class="calc_outside_ico4"></div>
                        </div><!-- /.calc_outside_ico -->
                        <a class="vnotbalzag" href="/otdelka-balkonov/">Внутренняя отделка балкона</a>
                        
                        
                    </div><!-- /.cold_right -->
                    
                    <div class="hotcold">
                        
                        <div class="hot"><div class="temperatyra"></div></div>
                        
                        <div class="cold cold_noact"><div></div></div>
                        
                    </div><!-- /.hotcold -->
                    
                </div><!-- /.calc_outside_balkon -->



                <div class="info">
                    ПОЗВОНИТЕ ПРЯМО СЕЙЧАС <span>8 (495) 021-20-12</span>.
                    МЫ РАССКАЖЕМ ЧТО ЛУЧШЕ ДЛЯ ВАС!
                        
                </div>
            </div>
                  <script>
                  $(document).ready(function() {
                      
                      
                      $('.calc_outside_cold').click(function() {
                          $('.cold').removeClass('cold_noact');			  			  	
                          $('.hot').addClass('hot_noact');
                          $('.cold_right').css("display","block");
                          $('.hot_right').css("display","none");	
                          $('.calc_outside_hot').addClass('calc_outside_balkon__li_noact');
                          $('.calc_outside_cold').removeClass('calc_outside_balkon__li_noact');
                          $('.calc_outside_img_hot').css("display","none");
                          $('.calc_outside_img_cold').css("display","inline-block");	
                      });
                      
                      $('.calc_outside_img_hot').click(function() {
                          $('.cold').removeClass('cold_noact');
                          $('.hot').addClass('hot_noact');
                          $('.cold_right').css("display","block");
                          $('.hot_right').css("display","none");
                          $('.calc_outside_hot').addClass('calc_outside_balkon__li_noact');
                          $('.calc_outside_cold').removeClass('calc_outside_balkon__li_noact');
                          $('.calc_outside_img_hot').css("display","none");
                          $('.calc_outside_img_cold').css("display","inline-block");
                      });
                      
                      $('.calc_outside_hot').click(function() {
                          $('.cold').addClass('cold_noact');
                          $('.hot').removeClass('hot_noact');
                          $('.cold_right').css("display","none");
                          $('.hot_right').css("display","block");
                          $('.calc_outside_hot').removeClass('calc_outside_balkon__li_noact');
                          $('.calc_outside_cold').addClass('calc_outside_balkon__li_noact');
                          $('.calc_outside_img_hot').css("display","inline-block");
                          $('.calc_outside_img_cold').css("display","none");
                      });
                      
                      $('.calc_outside_img_cold').click(function() {
                          $('.cold').addClass('cold_noact');
                          $('.hot').removeClass('hot_noact');
                          $('.cold_right').css("display","none");
                          $('.hot_right').css("display","block");
                          $('.calc_outside_hot').removeClass('calc_outside_balkon__li_noact');
                          $('.calc_outside_cold').addClass('calc_outside_balkon__li_noact');
                          $('.calc_outside_img_hot').css("display","inline-block");
                          $('.calc_outside_img_cold').css("display","none");
                      });
                      
                      
                      
                      $('.calc_outside_ico1').click(function() {
                          $('.calc_outside_ico1').addClass('calc_outside_ico1_act');
                          $('.calc_outside_ico2').removeClass('calc_outside_ico2_act');
                          $('.calc_outside_ico3').removeClass('calc_outside_ico3_act');
                          $('.calc_outside_ico4').removeClass('calc_outside_ico4_act');
                          $('.hot').css("background","url(img/hot_1.jpg)");
                          $('.cold').css("background","url(img/cold_1.jpg)");
                            $('.hot').css("background-size","cover");
                            $('.cold').css("background-size","cover");
                      });
                      
                      $('.calc_outside_ico2').click(function() {
                          $('.calc_outside_ico1').removeClass('calc_outside_ico1_act');
                          $('.calc_outside_ico2').addClass('calc_outside_ico2_act');
                          $('.calc_outside_ico3').removeClass('calc_outside_ico3_act');
                          $('.calc_outside_ico4').removeClass('calc_outside_ico4_act');
                          $('.hot').css("background","url(img/hot_1.jpg)");  /*1 - ая картинка*/
                          $('.cold').css("background","url(img/cold_1.jpg)");/*1 - ая картинка*/
                            $('.hot').css("background-size","cover");
                            $('.cold').css("background-size","cover");
                      });
                      
                      $('.calc_outside_ico3').click(function() {
                          $('.calc_outside_ico1').removeClass('calc_outside_ico1_act');
                          $('.calc_outside_ico2').removeClass('calc_outside_ico2_act');
                          $('.calc_outside_ico3').addClass('calc_outside_ico3_act');
                          $('.calc_outside_ico4').removeClass('calc_outside_ico4_act');
                          $('.hot').css("background","url(img/hot_1.jpg)"); /*2 - ая картинка*/
                          $('.cold').css("background","url(img/cold_1.jpg)");/*2 - ая картинка*/
                            $('.hot').css("background-size","cover");
                            $('.cold').css("background-size","cover");
                      });
                      
                      $('.calc_outside_ico4').click(function() {
                          $('.calc_outside_ico1').removeClass('calc_outside_ico1_act');
                          $('.calc_outside_ico2').removeClass('calc_outside_ico2_act');
                          $('.calc_outside_ico3').removeClass('calc_outside_ico3_act');
                          $('.calc_outside_ico4').addClass('calc_outside_ico4_act');
                          $('.hot').css("background","url(img/hot_1.jpg)"); /*3 - ая картинка*/
                          $('.cold').css("background","url(img/cold_1.jpg)"); /*3 - ая картинка*/
                            $('.hot').css("background-size","cover");
                            $('.cold').css("background-size","cover");
                      });
                            
                  });
              </script>

        </div>