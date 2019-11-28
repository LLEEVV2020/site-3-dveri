      <section class="b-karusel2 template slider_doors_wrapper slider_doors_wrapper2">
            <div class="container">

                <div class="h2">ЛУЧШИЕ ВХОДНЫЕ ДВЕРИ  </div>
                
                    <section class=" slider_doors_js2">
                        
                        
                        <div >
                            <div class="item-rewiews">
                                <div class="box1">
                                    <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/big-doors-1.png">
                                    
                                    <div class="red-button">ВЫГОДНО  </div>
                                </div>
                                
                            </div>
                        </div>
                        <div >
                            <div class="item-rewiews">
                                <div class="box1">
                                    <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/big-doors-2.png">
                                    
                                    <div class="red-button">ВЫГОДНО  </div>
                                </div>
                               
                            </div>
                            
                        </div>
                        <div >
                            <div class="item-rewiews">
                                <div class="box1">
                                    <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/big-doors-3.png">
                                    
                                    <div class="red-button">ВЫГОДНО  </div>
                                </div>
                               
                            </div>
                            
                        </div>
                        <div >
                            <div class="item-rewiews">
                                <div class="box1">
                                    <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/big-doors-4.png">
                                    
                                    <div class="red-button">ВЫГОДНО  </div>
                                </div>
                               
                            </div>
                            
                        </div>
                        <div >
                            <div class="item-rewiews">
                                <div class="box1">
                                    <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/big-doors-5.png">
                                    
                                    <div class="red-button">ВЫГОДНО  </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div >
                                <div class="item-rewiews">
                                    <div class="box1">
                                        <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/big-doors-2.png">
                                    
                                        <div class="red-button">ВЫГОДНО  </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                    </section>
                    <div class="flex">
   
                            <button data-toggle="modal" data-target="#kupitDeshevle" class="red-button" type="submit">КУПИТЬ ДВЕРИ</button>
              
                        </div>
                </div>   
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                <script type="text/javascript">
                    // ОТЗЫВЫ
                        $(document).ready(function(){
                            $(".slider_doors_js2").slick({
                                
                                dots: false,
                                arrows: true,
                                infinite: true,
                                slidesToShow: 5,
                                slidesToScroll: 1,
                                responsive: [
                                    {
                                    breakpoint: 1200,
                                        settings: {
                                            slidesToShow: 3,
                                            slidesToScroll: 1
                                        }
                                    },
                                    {
                                    breakpoint: 600,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 1
                                        }
                                    },
                                    {
                                    breakpoint: 450,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 1
                                        }
                                    }
                                    
                                ]
                            });
                        });
            
                        
                      </script>
                      <style>
                          .slider_doors_js2 .item-rewiews{
                              padding-bottom: 62px;
                          }
                          @media only screen and (max-width: 1200px){
                              .slider_doors_wrapper2 .slick-slide{
                                      -webkit-transform:  scale(1) !important;
                                      transform: scale(1) !important;
                              }
                              .slider_doors_js2 img{
                                  position: relative;
                              }
                          }
                          @media only screen and (max-width: 450px){
                              .slider_doors_wrapper2 .slick-slide{
                                  -webkit-transform:  scale(0.8) !important;
                                    transform: scale(0.8) !important;
                              }
                              .slider_doors_wrapper2 .box1 .red-button{
                                      bottom: -2vh;
                              }
                          }
                          
                          
                      </style>
        </section> 