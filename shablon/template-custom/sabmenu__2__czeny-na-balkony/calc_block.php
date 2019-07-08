<!-- Самый верхний блок -->

        <div class="calc_block">
            <div class="b-calc-bg  ">
                <div class="b-calc2">
                    <div class="container">

                        <h1>КАЛЬКУЛЯТОР ЦЕНЫ БАЛКОНОВ</h1>
                        <script type="text/javascript">


                            //допуски и цена м2 
                            shir_balk_min = 50;
                            shir_balk_max = 120;
                            vysota_balk_min = 50;
                            vysota_balk_max = 200;

                            stoim_balk = 3550;



                            //СКИДКА процент скидки
                            skidka = 0.1;

                            //ПРЕМИУМ	процент наценки
                            premium = 1 + 0.3; // 0.3 редактируемое значение


                            //ПОДОКОННИК и ОТЛИВ за м
                            podokonnik = 400;

                            //МОНТАЖНЫЕ РАБОТЫ за м2 
                            montazhrab = 1200;


                            //КОЭФФИЦИЕНТ К СТОИМОСТИ ОКОН
                            koeffits = 1;

                            //ВАША ЭКОНОМИЯ
                            vashaeconomiya = 0.3; // 0.3 - это 30% 

                            //РАССРОЧКА. количество месяцев 
                            rassrochkames = 8;


                        </script>
                        <script type="text/javascript">
                            jQuery(document).ready(function () {





                                $(".tipbalk1").click(function () {
                                    $('.tipbalk1').removeClass('okact');
                                    $('.tipbalk2').removeClass('okact');
                                    $('.tipbalk3').removeClass('okact');
                                    $('.tipbalk4').removeClass('okact');
                                    $('.tipbalk5').removeClass('okact');
                                    $('.tipbalk6').removeClass('okact');
                                    $('.tipbalk7').removeClass('okact');
                                    $('.tipbalk1').addClass('okact');
                                    $('.oknofull').html('<img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/calc/balk/1.png" >');
                                });

                                $(".tipbalk2").click(function () {
                                    $('.tipbalk1').removeClass('okact');
                                    $('.tipbalk2').removeClass('okact');
                                    $('.tipbalk3').removeClass('okact');
                                    $('.tipbalk4').removeClass('okact');
                                    $('.tipbalk5').removeClass('okact');
                                    $('.tipbalk6').removeClass('okact');
                                    $('.tipbalk7').removeClass('okact');
                                    $('.tipbalk2').addClass('okact');
                                    $('.oknofull').html('<img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/calc/balk/2.png" >');
                                });

                                $(".tipbalk3").click(function () {
                                    $('.tipbalk1').removeClass('okact');
                                    $('.tipbalk2').removeClass('okact');
                                    $('.tipbalk3').removeClass('okact');
                                    $('.tipbalk4').removeClass('okact');
                                    $('.tipbalk5').removeClass('okact');
                                    $('.tipbalk6').removeClass('okact');
                                    $('.tipbalk7').removeClass('okact');
                                    $('.tipbalk3').addClass('okact');
                                    $('.oknofull').html('<img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/calc/balk/3.png" >');
                                });

                                $(".tipbalk4").click(function () {
                                    $('.tipbalk1').removeClass('okact');
                                    $('.tipbalk2').removeClass('okact');
                                    $('.tipbalk3').removeClass('okact');
                                    $('.tipbalk4').removeClass('okact');
                                    $('.tipbalk5').removeClass('okact');
                                    $('.tipbalk6').removeClass('okact');
                                    $('.tipbalk7').removeClass('okact');
                                    $('.tipbalk4').addClass('okact');
                                    $('.oknofull').html('<img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/calc/balk/4.png" >');
                                });

                                $(".tipbalk5").click(function () {
                                    $('.tipbalk1').removeClass('okact');
                                    $('.tipbalk2').removeClass('okact');
                                    $('.tipbalk3').removeClass('okact');
                                    $('.tipbalk4').removeClass('okact');
                                    $('.tipbalk5').removeClass('okact');
                                    $('.tipbalk6').removeClass('okact');
                                    $('.tipbalk7').removeClass('okact');
                                    $('.tipbalk5').addClass('okact');
                                    $('.oknofull').html('<img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/calc/balk/5.png" >');
                                });

                                $(".tipbalk6").click(function () {
                                    $('.tipbalk1').removeClass('okact');
                                    $('.tipbalk2').removeClass('okact');
                                    $('.tipbalk3').removeClass('okact');
                                    $('.tipbalk4').removeClass('okact');
                                    $('.tipbalk5').removeClass('okact');
                                    $('.tipbalk6').removeClass('okact');
                                    $('.tipbalk7').removeClass('okact');
                                    $('.tipbalk6').addClass('okact');
                                    $('.oknofull').html('<img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/calc/balk/6.png" >');
                                });

                                $(".tipbalk7").click(function () {
                                    $('.tipbalk1').removeClass('okact');
                                    $('.tipbalk2').removeClass('okact');
                                    $('.tipbalk3').removeClass('okact');
                                    $('.tipbalk4').removeClass('okact');
                                    $('.tipbalk5').removeClass('okact');
                                    $('.tipbalk6').removeClass('okact');
                                    $('.tipbalk7').removeClass('okact');
                                    $('.tipbalk7').addClass('okact');
                                    $('.oknofull').html('<img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/calc/balk/7.png" >');
                                });



                            });
                        </script>


                        <script type="text/javascript" src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery-ui.min.js"></script>
                        <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery.ui.touch-punch.min.js"></script>
                        <script type="text/javascript">



                            //задаем первоначальные минимальные и максимальные значения ширины и высоты
                            minsliderhor = 150;//shir_balk_min * 5;
                            maxsliderhor = 110;//shir_balk_max * 5;
                            minsliderver = vysota_balk_min;
                            maxsliderver = vysota_balk_max;

                            //объявляем переменные
                            tipbalk = 4; //задаем тип окна
                            shirinafin = 0;
                            costfin = 0; // стоимость финальная
                            rassrochka = 0; // стоимость рассрочки
                            block_econom_text = 0;
                            block_econom_bg = 0;
                            CostverES = 0;
                            CosthorES = 0;
                            stoim = stoim_balk; // присваиваем стоимость из прайса
                            skidka = 1 - skidka;

                            //chekoksys = 0; // оконная система 0- эконом, 1 -премиум
                            chekpodokonnik = 0; // подоконник, отлив  0- нет, 1 -да
                            chekmontazhrab = 0; // монтажные работы  0- нет, 1 -да


                            jQuery(document).ready(function () {


                                $('#Costhor').val(minsliderhor);
                                $('#Costver').val("110");

                                jQuery("#sliderhor").slider({
                                    animate: true,
                                    min: minsliderhor,
                                    max: maxsliderhor,
                                    values: [0, minsliderhor],
                                    range: true,
                                    stop: function (event, ui) {
                                        jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 0, minsliderhor));
                                        jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 1));
                                        change_price();
                                    },
                                    slide: function (event, ui) {
                                        /*jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",0));
                                        jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",1));*/
                                    }
                                });

                                jQuery("#sliderver").slider({
                                    orientation: "vertical",
                                    animate: true,
                                    min: minsliderver,
                                    max: maxsliderver,
                                    values: [0, 110],
                                    range: true,
                                    stop: function (event, ui) {
                                        jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 0, minsliderver));
                                        jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 1));
                                        change_price();
                                    },
                                    slide: function (event, ui) {
                                        /*jQuery("input#Costver").val(jQuery("#sliderver").slider("values",0));
                                        jQuery("input#Costver").val(jQuery("#sliderver").slider("values",1));*/

                                    }
                                });

                                change_price();




                                function change_price() {


                                    /*
                                if (tipbalk == 1) 
                                        {
                                            costfin = $('#Costhor').val() * $('#Costver').val() * stoim * 3 / 10000;
                                            shirinafin= parseInt($('#Costhor').val()) * 3;
                                        }
                                */


                                    costfin = $('#Costhor').val() * $('#Costver').val() * stoim / 10000;
                                    shirinafin = parseInt($('#Costhor').val());

                                    costfin = costfin * koeffits * skidka;

                                    if (chekpodokonnik == 1) { costfin = costfin + podokonnik * shirinafin * 0.01; }
                                    if (chekmontazhrab == 1) { costfin = costfin + montazhrab * shirinafin * $('#Costver').val() * 0.0001; }
                                    costfin = Math.round(costfin); // округляем до целого
                                    $('.costfin').html(costfin); // выводим финальную стоимость



                                    block_econom_bg = costfin * vashaeconomiya;
                                    block_econom_bg = Math.round(block_econom_bg); // округляем до целого 
                                    $('.block_econom_bg span').html(block_econom_bg);

                                    block_econom_text = costfin + block_econom_bg;
                                    block_econom_text = Math.round(block_econom_text); // округляем до целого 
                                    $('.block_econom_text span').html(block_econom_text);





                                    //расчитываем рассрочку
                                    rassrochka = costfin / rassrochkames;
                                    rassrochka = Math.round(rassrochka); // округляем до целого 
                                    $('.rassrochka').html(rassrochka); // выводим финальную стоимость


                                    CostverES = $('#Costver').val()
                                    $('#CostverES').val(CostverES + " см");
                                    CosthorES = $('#Costhor').val()
                                    $('#CosthorES').val(CosthorES + " см");


                                }	// конец  change_price()




                                // расчет тип балкона 1
                                $(".tipbalk1").click(function () {


                                    tipbalk = 1; //задаем тип окна

                                    minsliderhor = shir_balk_min * 3;
                                    maxsliderhor = shir_balk_max * 3;

                                    minsliderver = vysota_balk_min;
                                    maxsliderver = vysota_balk_max;

                                    $('#Costhor').val(minsliderhor); // подставляем значения максимума и минимума на слайдер
                                    $('#Costver').val(110);

                                    jQuery("#sliderhor").slider({
                                        animate: true,
                                        min: minsliderhor,
                                        max: maxsliderhor,
                                        values: [0, minsliderhor],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 0, minsliderhor));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",0));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",1));*/
                                        }
                                    });



                                    jQuery("#sliderver").slider({
                                        orientation: "vertical",
                                        animate: true,
                                        min: minsliderver,
                                        max: maxsliderver,
                                        values: [0, 110],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 0, minsliderver));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costver").val(jQuery("#sliderver").slider("values",0));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values",1));*/

                                        }
                                    });

                                    stoim = stoim_balk; // присваиваем стоимость из прайса

                                    change_price();

                                });
                                //конец расчета тип балкона 1



                                // расчет тип балкона 2
                                $(".tipbalk2").click(function () {




                                    tipbalk = 2; //задаем тип окна
                                    minsliderhor = shir_balk_min * 4;
                                    maxsliderhor = shir_balk_max * 4;

                                    minsliderver = vysota_balk_min;
                                    maxsliderver = vysota_balk_max;

                                    $('#Costhor').val(minsliderhor); // подставляем значения максимума и минимума на слайдер



                                    $('#Costver').val(110);

                                    jQuery("#sliderhor").slider({
                                        animate: true,
                                        min: minsliderhor,
                                        max: maxsliderhor,
                                        values: [0, minsliderhor],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 0, minsliderhor));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",0));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",1));*/
                                        }
                                    });



                                    jQuery("#sliderver").slider({
                                        orientation: "vertical",
                                        animate: true,
                                        min: minsliderver,
                                        max: maxsliderver,
                                        values: [0, 110],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 0, minsliderver));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costver").val(jQuery("#sliderver").slider("values",0));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values",1));*/

                                        }
                                    });

                                    stoim = stoim_balk; // присваиваем стоимость из прайса

                                    change_price();

                                });
                                //конец расчета тип балкона 2



                                // расчет тип балкона 3
                                $(".tipbalk3").click(function () {




                                    tipbalk = 3; //задаем тип окна
                                    minsliderhor = shir_balk_min * 4;
                                    maxsliderhor = shir_balk_max * 4;


                                    minsliderver = vysota_balk_min;
                                    maxsliderver = vysota_balk_max;

                                    $('#Costhor').val(minsliderhor); // подставляем значения максимума и минимума на слайдер



                                    $('#Costver').val(110);

                                    jQuery("#sliderhor").slider({
                                        animate: true,
                                        min: minsliderhor,
                                        max: maxsliderhor,
                                        values: [0, minsliderhor],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 0, minsliderhor));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",0));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",1));*/
                                        }
                                    });



                                    jQuery("#sliderver").slider({
                                        orientation: "vertical",
                                        animate: true,
                                        min: minsliderver,
                                        max: maxsliderver,
                                        values: [0, 110],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 0, minsliderver));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costver").val(jQuery("#sliderver").slider("values",0));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values",1));*/

                                        }
                                    });

                                    stoim = stoim_balk; // присваиваем стоимость из прайса

                                    change_price();

                                });
                                //конец расчета тип балкона 3



                                // расчет тип балкона 4
                                $(".tipbalk4").click(function () {




                                    tipbalk = 4; //задаем тип окна
                                    minsliderhor = shir_balk_min * 5;
                                    maxsliderhor = shir_balk_max * 5;

                                    minsliderver = vysota_balk_min;
                                    maxsliderver = vysota_balk_max;

                                    $('#Costhor').val(minsliderhor); // подставляем значения максимума и минимума на слайдер



                                    $('#Costver').val(110);

                                    jQuery("#sliderhor").slider({
                                        animate: true,
                                        min: minsliderhor,
                                        max: maxsliderhor,
                                        values: [0, minsliderhor],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 0, minsliderhor));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",0));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",1));*/
                                        }
                                    });






                                    jQuery("#sliderver").slider({
                                        orientation: "vertical",
                                        animate: true,
                                        min: minsliderver,
                                        max: maxsliderver,
                                        values: [0, 110],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 0, minsliderver));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costver").val(jQuery("#sliderver").slider("values",0));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values",1));*/

                                        }
                                    });

                                    stoim = stoim_balk; // присваиваем стоимость из прайса

                                    change_price();

                                });
                                //конец расчета тип балкона 4



                                // расчет тип балкона 5
                                $(".tipbalk5").click(function () {



                                    tipbalk = 5; //задаем тип окна
                                    minsliderhor = shir_balk_min * 5;
                                    maxsliderhor = shir_balk_max * 5;


                                    minsliderver = vysota_balk_min;
                                    maxsliderver = vysota_balk_max;

                                    $('#Costhor').val(minsliderhor); // подставляем значения максимума и минимума на слайдер



                                    $('#Costver').val(110);

                                    jQuery("#sliderhor").slider({
                                        animate: true,
                                        min: minsliderhor,
                                        max: maxsliderhor,
                                        values: [0, minsliderhor],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 0, minsliderhor));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",0));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",1));*/
                                        }
                                    });






                                    jQuery("#sliderver").slider({
                                        orientation: "vertical",
                                        animate: true,
                                        min: minsliderver,
                                        max: maxsliderver,
                                        values: [0, 110],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 0, minsliderver));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costver").val(jQuery("#sliderver").slider("values",0));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values",1));*/

                                        }
                                    });

                                    stoim = stoim_balk; // присваиваем стоимость из прайса

                                    change_price();

                                });
                                //конец расчета тип балкона 5


                                // расчет тип балкона 6
                                $(".tipbalk6").click(function () {



                                    tipbalk = 6; //задаем тип окна
                                    minsliderhor = shir_balk_min * 5;
                                    maxsliderhor = shir_balk_max * 5;

                                    minsliderver = vysota_balk_min;
                                    maxsliderver = vysota_balk_max;

                                    $('#Costhor').val(minsliderhor); // подставляем значения максимума и минимума на слайдер



                                    $('#Costver').val(110);

                                    jQuery("#sliderhor").slider({
                                        animate: true,
                                        min: minsliderhor,
                                        max: maxsliderhor,
                                        values: [0, minsliderhor],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 0, minsliderhor));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",0));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",1));*/
                                        }
                                    });






                                    jQuery("#sliderver").slider({
                                        orientation: "vertical",
                                        animate: true,
                                        min: minsliderver,
                                        max: maxsliderver,
                                        values: [0, 110],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 0, minsliderver));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costver").val(jQuery("#sliderver").slider("values",0));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values",1));*/

                                        }
                                    });

                                    stoim = stoim_balk; // присваиваем стоимость из прайса

                                    change_price();

                                });
                                //конец расчета тип балкона 6



                                // расчет тип балкона 7
                                $(".tipbalk7").click(function () {




                                    tipbalk = 7; //задаем тип окна
                                    minsliderhor = shir_balk_min * 7;
                                    maxsliderhor = shir_balk_max * 7;


                                    minsliderver = vysota_balk_min;
                                    maxsliderver = vysota_balk_max;

                                    $('#Costhor').val(minsliderhor); // подставляем значения максимума и минимума на слайдер



                                    $('#Costver').val(110);

                                    jQuery("#sliderhor").slider({
                                        animate: true,
                                        min: minsliderhor,
                                        max: maxsliderhor,
                                        values: [0, minsliderhor],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 0, minsliderhor));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",0));
                                            jQuery("input#Costhor").val(jQuery("#sliderhor").slider("values",1));*/
                                        }
                                    });





                                    jQuery("#sliderver").slider({
                                        orientation: "vertical",
                                        animate: true,
                                        min: minsliderver,
                                        max: maxsliderver,
                                        values: [0, 110],
                                        range: true,
                                        stop: function (event, ui) {
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 0, minsliderver));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values", 1));
                                            change_price();
                                        },
                                        slide: function (event, ui) {
                                            /*jQuery("input#Costver").val(jQuery("#sliderver").slider("values",0));
                                            jQuery("input#Costver").val(jQuery("#sliderver").slider("values",1));*/

                                        }
                                    });

                                    stoim = stoim_balk; // присваиваем стоимость из прайса

                                    change_price();

                                });
                                //конец расчета тип балкона 7




                                $(".tipoknasyschekpodnet").click(function () {
                                    $('.tipoknasyschekpodnet').removeClass('tipoknachek').addClass('tipoknachekact');
                                    $('.tipoknasyschekpodda').removeClass('tipoknachekact').addClass('tipoknachek');
                                    chekpodokonnik = 0;
                                    change_price();
                                });

                                $(".tipoknasyschekpodda").click(function () {
                                    $('.tipoknasyschekpodda').removeClass('tipoknachek').addClass('tipoknachekact');
                                    $('.tipoknasyschekpodnet').removeClass('tipoknachekact').addClass('tipoknachek');
                                    chekpodokonnik = 1;
                                    change_price();
                                });



                                $(".tipoknasyschekrabotnet").click(function () {
                                    $('.tipoknasyschekrabotnet').removeClass('tipoknachek').addClass('tipoknachekact');
                                    $('.tipoknasyschekrabotda').removeClass('tipoknachekact').addClass('tipoknachek');
                                    chekmontazhrab = 0;
                                    change_price();
                                });

                                $(".tipoknasyschekrabotda").click(function () {
                                    $('.tipoknasyschekrabotda').removeClass('tipoknachek').addClass('tipoknachekact');
                                    $('.tipoknasyschekrabotnet').removeClass('tipoknachekact').addClass('tipoknachek');
                                    chekmontazhrab = 1;
                                    change_price();
                                });

                                //Подвеска к ползункам инпутов
                                $("#sliderhor span.ui-slider-handle:eq(1)").append($(".Costhor11_block"));
                                $("#sliderver span.ui-slider-handle:eq(1)").append($(".Costver11_block"));



                                // фильтрация ввода в поля только цифр
                                jQuery('input#Costver').keypress(function (event) {
                                    var key, keyChar;
                                    if (!event) var event = window.event;
                                    if (event.keyCode) key = event.keyCode;
                                    else if (event.which) key = event.which;
                                    if (key == null || key == 0 || key == 8 || key == 13 || key == 9 || key == 46 || key == 37 || key == 39) return true;
                                    keyChar = String.fromCharCode(key);
                                    if (!/\d/.test(keyChar)) return false;
                                });

                                jQuery('input#Costhor').keypress(function (event) {
                                    var key, keyChar;
                                    if (!event) var event = window.event;
                                    if (event.keyCode) key = event.keyCode;
                                    else if (event.which) key = event.which;
                                    if (key == null || key == 0 || key == 8 || key == 13 || key == 9 || key == 46 || key == 37 || key == 39) return true;
                                    keyChar = String.fromCharCode(key);
                                    if (!/\d/.test(keyChar)) return false;
                                });




                                // передаем значение введенное пользователем вручную
                                jQuery("input#Costhor").change(function () {
                                    var value2 = jQuery("input#Costhor").val();
                                    if (value2 > maxsliderhor) { value2 = maxsliderhor; jQuery("input#Costhor").val(maxsliderhor) }
                                    if (value2 < minsliderhor) { value2 = minsliderhor; jQuery("input#Costhor").val(minsliderhor) }
                                    jQuery("#sliderhor").slider("values", 1, value2);
                                    change_price();
                                });



                                jQuery("input#Costver").change(function () {
                                    var value2 = jQuery("input#Costver").val();
                                    if (value2 > maxsliderver) { value2 = maxsliderver; jQuery("input#Costver").val(maxsliderver) }
                                    if (value2 < minsliderver) { value2 = minsliderver; jQuery("input#Costver").val(minsliderver) }
                                    jQuery("#sliderver").slider("values", 1, value2);
                                    change_price();
                                });




                                // скрытие первого ползунка на слайдере
                                $("#sliderhor a.ui-slider-handle:eq(0)").css({ "display": "none", "visibility": "hidden" });
                                $("#sliderver a.ui-slider-handle:eq(0)").css("display", "none");


                            });





                        </script>


                        <div class="b-calc__wrapper">

                            <div class="actii_calc">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/actii_calc.png" alt="">
                            </div>
                            <ul class="b-calc__ul_onoff">
                                <li><a href="plastikovye-okna-kalkulyator.html">окна</a></li>
                                <li>
                                    <a class="perekluchatel" href="plastikovye-okna-kalkulyator.html">
                                    </a>
                                </li>
                                <li>балконы</li>
                            </ul>



                            <p class="flex"><span>1</span>ВЫБЕРИТЕ СВОЕ ОКНО</p>

                            <div class="tabletipokna tabletipbalk">


                                <div class="tipbalk1"></div>
                                <div class="tipbalk2"></div>
                                <div class="tipbalk3"></div>
                                <div class="tipbalk4 okact"></div>
                                <div class="tipbalk5"></div>
                                <div class="tipbalk6"></div>
                                <div class="tipbalk7"></div>



                            </div><!-- /.tabletipokna -->

                            <p class="flex"><span>2</span>УКАЖИТЕ РАЗМЕРЫ</p>

                            <div class="wrapper_oknofull">
                                
                                <!--block img-->
                                <div class="oknofull oknofullbalk"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/calc/balk/4.png">
                                </div>
                                
                                
                                
                            

                               <!--Дополнительные параметры-->
                                <div class="basechek">

                                   <div id="sliderhor" 
                                    class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"
                                             ></div><span
                                            class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                            ></span><span
                                            class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                            >
                                            <div class="Costhor11_block"><input type="text" id="Costhor"></div>
                                        </span>
                                    </div>

                                    <div id="sliderver" 
                                        class="ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"
                                             ></div><span
                                            class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                            ></span><span
                                            class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                           >
                                            <div class="Costver11_block"><input type="text" id="Costver"></div>
                                        </span>
                                    </div>
                                   
                                   
                                    
                                    <div class="flex-wrapper-line">
                                        <div class="basechek__zag">Подоконник, отлив</div>
                                        <div class="tipoknasyschekpodda tipoknachek"></div> <span class="yes">Да</span>
                                         <div class="tipoknasyschekpodnet tipoknachekact"></div> <span>Нет</span>
                                        
                                        
                                    </div>
                                    
                                    

                                   <div class="flex-wrapper-line">
                                       <div class="basechek__zag">Монтажные работы</div>
                                       <div class="tipoknasyschekrabotda tipoknachek"></div> <span class="yes">Да</span>
                                        <div class="tipoknasyschekrabotnet tipoknachekact"></div> <span>Нет</span>
                                       
                                   </div>
                                    
                                     
                                </div><!-- /.basechek -->
                            </div>

                            

                            
                            
                            <div class="flex-container">
                                <div class="block_econom">
                                   <p class="flex"><span>3</span>УЗНАЙТЕ СВОЮ ВЫГОДУ</p>
                                    <div class="block_econom_text">Средняя стоимость такого окна: <span>11422</span> р
                                    </div>
                                    <div class="block_econom_bg">ВАША ЭКОНОМИЯ = <span>2636</span> р</div>
                                </div>


                               <div class="basetsena">
                                    <div class="costonsale">Цена по акции</div>

                                    <div class="tsena_base_cost"><span class="costfin">8786</span> р</div>
                                </div><!-- /.basetsena -->
                            </div>
                            
                            <div class="calc_rassr">
                                ЭТО ОКНО В РАССРОЧКУ
                                <span class="credd">ВСЕГО <span class="rassrochka">1098</span> РУБЛЕЙ</span>
                                <button class="red-button" data-toggle="modal" data-target="#kupitDeshevle" >ХОЧУ ДЕШЕВЛЕ</button>
                            </div><!-- /.calc_rassr -->
                            
                        </div><!-- /.b-calc__left -->



                        

                    </div><!-- /.container -->
                </div><!-- /.b-calc -->
            </div>
        </div>
        <!--/ Самый верхний блок -->