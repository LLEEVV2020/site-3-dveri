<!--slider_doors_wrapper_11.php-->
<section class="b-karusel2 template slider_doors_wrapper">
    <div class="container">

        <div class="h2">ЛУЧШИЕ МЕЖКОМНАТНЫЕ ДВЕРИ  </div>

            <section class=" slider_doors_js">


                <div >
                    <div class="item-rewiews">
                        <div class="box1">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/door_5_1.png" style="width: 186px; height: 415px;">

                            <div class="red-button">ВЫГОДНО  </div>
                        </div>

                    </div>
                </div>
                <div >
                    <div class="item-rewiews">
                        <div class="box1">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/door_5_2.png" style="width: 186px; height: 415px;">

                            <div class="red-button">ВЫГОДНО  </div>
                        </div>

                    </div>

                </div>
                <div >
                    <div class="item-rewiews">
                        <div class="box1">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/door_5_3.png" style="width: 186px; height: 415px;">

                            <div class="red-button">ВЫГОДНО  </div>
                        </div>

                    </div>

                </div>
                <div >
                    <div class="item-rewiews">
                        <div class="box1">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/door_5_4.png" style="width: 186px; height: 415px;">

                            <div class="red-button">ВЫГОДНО  </div>
                        </div>

                    </div>

                </div>
                <div >
                    <div class="item-rewiews">
                        <div class="box1">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/door_5_5.png" style="width: 186px; height: 415px;">

                            <div class="red-button">ВЫГОДНО  </div>
                        </div>

                    </div>

                </div>
                <div >
                    <div class="item-rewiews">
                        <div class="box1">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/door_5_3.png" style="width: 186px; height: 415px;">

                            <div class="red-button">ВЫГОДНО  </div>
                        </div>

                    </div>

                </div>
            </section>
            <div class="flex">

                <button data-toggle="modal" data-target="#kupitDeshevle" class="red-button" type="submit">КУПИТЬ ДВЕРИ</button>

            </div>
        </div>   

        <script type="text/javascript">
        // ОТЗЫВЫ
            $(document).ready(function(){
                $(".slider_doors_js").slick({

                    dots: false,
                    arrows: true,
                    infinite: true,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    responsive: [
                        {
                        breakpoint: 1200,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });


          </script>
</section>