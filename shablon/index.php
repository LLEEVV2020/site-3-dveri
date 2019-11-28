<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<div style="display: none;" id="content" class="site-content">
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

</div><!-- #page -->

<?php

get_template_part( 'template-custom/header' ); 
get_template_part( 'template-custom/top-menu' ); 

/*new*/
get_template_part( 'template-custom/dveri/main/dveri_main1' ); /*ДВЕРИ
ПО НИЗКИМ ЦЕНАМ*/
get_template_part( 'template-custom/dveri/main/es2_doors_2' );
get_template_part( 'template-custom/dveri/main/es6_doors_3' );
get_template_part( 'template-custom/dveri/main/block-doors_4' );
get_template_part( 'template-custom/dveri/main/sms-discount_5' ); /*смс-скидка*/
get_template_part( 'template-custom/dveri/main/mez-dveri' ); /*меж двери*/
get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/
get_template_part( 'template-custom/dveri/main/form-group-wrapper_7' ); /**РАССЧИТЕМ ВАШИ ДВЕРИ ЗА 5 min */
get_template_part( 'template-custom/dveri/main/es7_padding_8' ); /*БЕСПЛАТНЫЙ ЗАМЕР*/
get_template_part( 'template-custom/dveri/main/es12_bg_9' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
get_template_part( 'template-custom/dveri/main/slider_doors_wrapper_11'); /*ЛУЧШИЕ МЕЖКОМНАТНЫЕ ДВЕРИ*/
//get_template_part( 'template-custom/dveri/vkhodnye-dveri/vhodnie_dveri_slider_15'); 
get_template_part( 'template-custom/dveri/main/es6_balcons_12');
get_template_part( 'template-custom/dveri/main/es14_bg_custom_13'); /*отзывы*/
get_template_part( 'template-custom/dveri/main/map-wrapper_14');
get_template_part( 'template-custom/dveri/main/es16_bg_15'); /*ДВЕРИ, УСТАНОВЛЕННЫЕ В 2019 ГОДУ*/
get_template_part( 'template-custom/main/es20_balcony__17' );  /*Бесплатная консультация*/
get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/



get_template_part( 'template-custom/footer-main' ); 



get_footer();
