<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();

/// ГЛАВНАЯ
get_template_part( 'template-custom/header' ); 
get_template_part( 'template-custom/top-menu' ); 

/*new*/
get_template_part( 'template-custom/dveri/main/dveri_main1' );
get_template_part( 'template-custom/dveri/main/es2_doors_2' );
get_template_part( 'template-custom/dveri/main/es6_doors_3' );
get_template_part( 'template-custom/dveri/main/block-doors_4' );
get_template_part( 'template-custom/dveri/main/sms-discount_5' ); /*смс-скидка*/
get_template_part( 'template-custom/dveri/main/mez-dveri' ); /*меж двери*/
get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/
get_template_part( 'template-custom/dveri/main/form-group-wrapper_7' );
get_template_part( 'template-custom/dveri/main/es7_padding_8' );
get_template_part( 'template-custom/dveri/main/es12_bg_9' );
get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
get_template_part( 'template-custom/dveri/main/slider_doors_wrapper_11');
//get_template_part( 'template-custom/dveri/vkhodnye-dveri/vhodnie_dveri_slider_15'); 
get_template_part( 'template-custom/dveri/main/es6_balcons_12');
get_template_part( 'template-custom/dveri/main/es14_bg_custom_13'); /*отзывы*/
get_template_part( 'template-custom/dveri/main/map-wrapper_14');
get_template_part( 'template-custom/dveri/main/es16_bg_15');
get_template_part( 'template-custom/main/es20_balcony__17' );  /*Бесплатная консультация*/
get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/



get_template_part( 'template-custom/footer-main' ); 
?>

	<section id="primary" class="content-area" style="display: none;">
		<main id="main" class="site-main">

			<div class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentynineteen' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
