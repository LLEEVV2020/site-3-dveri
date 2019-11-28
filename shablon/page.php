<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
    
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
            <?php 
            
            /*
            ПУТИ
            rassrochka
            otzyvy-o-kompanii
            adresa-i-telefony
            akczii-i-skidki
            
            Разрабатывая, основу взял отсюда
            https://wp-kama.ru/function/get_pages
            https://wp-kama.ru/function/get_the_id
            */
            
            // Получаем  id текущей странницы
            $post_id = get_the_ID();
            // получаем ярлык пути, без доменного имени и слэшей
            $page_url =  get_page_uri( $post_id );
            
            // Входные двери
            if($page_url == "vkhodnye-dveri" || $page_url ==  "vhodnye-dveri"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' );
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/es1_vhodnie_dveri_1' );
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/finishing_balconies_calc_2' );
                get_template_part( 'template-custom/dveri/main/sms-discount_5' ); /*смс-скидка*/
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/vhodie-dveri_5' ); /*Список дверей*/
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/quick-calculation_7' );
                get_template_part( 'template-custom/dveri/main/es7_padding_8' );
                get_template_part( 'template-custom/dveri/main/form-group-wrapper_7' );
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/price_2018_10' );
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/otpravit_zaiavky_11' );
                
                
                ?><div style="background-color: #EDEDED"><?php 
                get_template_part( 'template-custom/dveri/main/es12_bg_9' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
                ?></div><?php 
                get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/vhodnie_dveri_slider_15');  /*ЛУЧШИЕ ВХОДНЫЕ ДВЕРИ*/
                get_template_part( 'template-custom/main/giving__13' );  /*ЗАКАЗЧИКИ САМОЕ ЦЕННОЕ – МЫ ЭТО ПОНИМАЕМ!*/
                //get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                get_template_part( 'template-custom/dveri/main/es14_bg_custom_13');/*отзывы*/
                get_template_part( 'template-custom/dveri/main/map-wrapper_14');
                get_template_part( 'template-custom/dveri/main/es16_bg_15');
                
                get_template_part( 'template-custom/main/es20_balcony__17' );  /*Бесплатная консультация*/
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/
                get_template_part( 'template-custom/footer-main' ); 
                
            }
            // РАЗДВИЖНЫЕ ДВЕРИ
            if($page_url == "razdvizhnye-dveri"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' );
                                
                get_template_part( 'template-custom/dveri/razdviznie-okna/razdviznie-okna_1' );
                
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/finishing_balconies_calc_2' );
                get_template_part( 'template-custom/dveri/main/sms-discount_5' ); /*смс-скидка*/
                get_template_part( 'template-custom/dveri/razdviznie-okna/vhodie-dveri_5_2' ); /*РАЗДВИЖНЫЕ ДВЕРИ*/
                
                
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/quick-calculation_7' );
                get_template_part( 'template-custom/dveri/main/es7_padding_8' );
                get_template_part( 'template-custom/dveri/main/form-group-wrapper_7' );
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/price_2018_10' );
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/otpravit_zaiavky_11' );
                
                
                ?><div style="background-color: #EDEDED"><?php 
                get_template_part( 'template-custom/dveri/main/es12_bg_9' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
                ?></div><?php 
                get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
               // get_template_part( 'template-custom/dveri/vkhodnye-dveri/vhodnie_dveri_slider_15'); /** Слайлдер дверей сложный */
                get_template_part( 'template-custom/main/giving__13' );  /*ЗАКАЗЧИКИ САМОЕ ЦЕННОЕ – МЫ ЭТО ПОНИМАЕМ!*/
                //get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                get_template_part( 'template-custom/dveri/main/es14_bg_custom_13');/*отзывы*/
                get_template_part( 'template-custom/dveri/main/map-wrapper_14');
                get_template_part( 'template-custom/dveri/main/es16_bg_15');
                
                get_template_part( 'template-custom/main/es20_balcony__17' );  /*Бесплатная консультация*/
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/
                get_template_part( 'template-custom/footer-main' );
            }
            /*контакты*/
            if($page_url == "adresa-i-telefony" || $page_url == "kontakty"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 

                get_template_part( 'template-custom/gde_kupit_shkafy_3/accii_temp' ); /**РАБОТАЕМ ПО ВСЕМУ ТОЛЬЯТТИ И ОБЛАСТИ: */
                get_template_part( 'template-custom/main/map19' ); /*карта*/
                get_template_part( 'template-custom/gde_kupit_shkafy_3/b_contact' ); /*когда мож*/
                get_template_part( 'template-custom/gde_kupit_shkafy_3/b_radar' ); /*радар*/
                get_template_part( 'template-custom/gde_kupit_shkafy_3/b_contact_ceo_bg' ); /*письмо директору*/
                get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
                get_template_part( 'template-custom/dveri/main/slider_doors_wrapper_11');
                get_template_part( 'template-custom/main/giving__13' );  /*ЗАКАЗЧИКИ САМОЕ ЦЕННОЕ – МЫ ЭТО ПОНИМАЕМ!*/
                //get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                get_template_part( 'template-custom/dveri/main/es14_bg_custom_13');/*отзывы*/
                
                get_template_part( 'template-custom/main/map19' );
                get_template_part( 'template-custom/dveri/main/es16_bg_15'); /*РЕМОНТЫ, ВЫПОЛНЕННЫЕ В 2019 ГОДУ*/
                

                //get_template_part( 'template-custom/main/es17_bg21' ); /*БЕСПЛАТНАЯ */
                get_template_part( 'template-custom/main/es20_balcony__17' ); /*БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ*/
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/

                get_template_part( 'template-custom/footer-main' ); /*footer*/

            }   
            
            
            
            // РАССОЧКА
            if($page_url == "rassrochka"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 

                get_template_part( 'template-custom/rassrochki_na_shkafy_1/rassr_balcons' ); 
                get_template_part( 'template-custom/rassrochki_na_shkafy_1/rast_windownow_bg_gerl__2' ); 
                get_template_part( 'template-custom/rassrochki_na_shkafy_1/b_rassr' ); /*УСЛОВИЯ ПО РАССРОЧКЕ И КРЕДИТУ */

                get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
                
                //get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                get_template_part( 'template-custom/dveri/main/es14_bg_custom_13');/*отзывы*/
                get_template_part( 'template-custom/main/map19' );  /*карта*/
                
                get_template_part( 'template-custom/dveri/main/es16_bg_15'); /*РЕМОНТЫ, ВЫПОЛНЕННЫЕ В 2019 ГОДУ*/
                
                
                get_template_part( 'template-custom/main/es17_bg21' ); 
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/

                get_template_part( 'template-custom/footer-main' ); 

            }
            // ОТЗЫВЫ О КОМПАНИИ 
            if($page_url == "otzyvy-o-kompanii" || $page_url == "otzyvy" ){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 


                get_template_part( 'template-custom/shkafy_otzyvy_2/es1_otzivy_bg' ); /*Развёрнутые отзывы*/
                get_template_part( 'template-custom/shkafy_otzyvy_2/d_otziv_form' ); /*Форма оставить отзыв*/
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/

?><div style="background-color: #EDEDED"><?php 
                get_template_part( 'template-custom/dveri/main/es12_bg_9' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
                ?></div><?php 
               get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
                get_template_part( 'template-custom/main/map19' );  /*карта*/

                get_template_part( 'template-custom/dveri/main/es16_bg_15'); /*РЕМОНТЫ, ВЫПОЛНЕННЫЕ В 2019 ГОДУ*/

                //get_template_part( 'template-custom/main/es17_bg21' ); /*БЕСПЛАТНАЯ */
                get_template_part( 'template-custom/main/es20_balcony__17' ); /*БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ*/
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/



                get_template_part( 'template-custom/footer-main' ); /*footer*/

            }   
            
            /*Скидки*/
            if($page_url == "akczii-i-skidki" || $page_url == "akczii-i-skidki" ){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 


                get_template_part( 'template-custom/dveri/akczii-i-skidki/akczii-i-skidki' ); 
            
            ?><div style="margin-top: -6px;"><?php
                get_template_part( 'template-custom/main/es3_balcons__3' ); /*СМС СКИДКА*/
            ?></div>
                <?php            
                
                get_template_part( 'template-custom/dveri/akczii-i-skidki/aktsii-wrap' );
                get_template_part( 'template-custom/dveri/main/form-group-wrapper_7' );
                get_template_part( 'template-custom/dveri/main/es7_padding_8' );
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/

                ?><div style="background-color: #EDEDED"><?php 
                get_template_part( 'template-custom/dveri/main/es12_bg_9' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
                ?></div><?php 
                
                get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
                get_template_part( 'template-custom/dveri/main/slider_doors_wrapper_11'); /*Слайдер дверей не сложный*/
                get_template_part( 'template-custom/main/giving__13' );  /*ЗАКАЗЧИКИ САМОЕ ЦЕННОЕ – МЫ ЭТО ПОНИМАЕМ!*/
                //get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                get_template_part( 'template-custom/dveri/main/es14_bg_custom_13');/*отзывы*/
                
                get_template_part( 'template-custom/main/map19' );
                 get_template_part( 'template-custom/dveri/main/es16_bg_15'); /*РЕМОНТЫ, ВЫПОЛНЕННЫЕ В 2019 ГОДУ*/


                //get_template_part( 'template-custom/main/es17_bg21' ); /*БЕСПЛАТНАЯ */
                get_template_part( 'template-custom/main/es20_balcony__17' ); /*БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ*/
                 get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/



                get_template_part( 'template-custom/footer-main' ); /*footer*/
            }

            

            if($page_url == "none"){

                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }

                endwhile; // End of the loop.
            }

            ?>
            
			

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
