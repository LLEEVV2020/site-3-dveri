<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	
	<?php
    
    if (isset($_GET['utm_source']) && $_GET['utm_source'] != '')
        setcookie('utm_source', $_GET['utm_source'], time()+60*60*24*60,'/');

    if (isset($_GET['utm_term']) && $_GET['utm_term'] != '')
        setcookie('utm_term', $_GET['utm_term'], time()+60*60*24*60,'/');

	
	  wp_head(); 
    ?>
        
      <link href="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/fancybox/source/jquery.fancybox.css" rel="stylesheet">

    <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery-1.11.3.min.js"></script>
<script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery.fancybox.pack.js"></script>


    <script language="JavaScript">

        dayarray = new Array("воскресенье", "понедельник", "вторник", "среда", "четверг", "пятница", "суббота")
        montharray = new Array("января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октебря", "ноября", "декабря")
        ndata = new Date();
        day = dayarray[ndata.getDay()];
        month = montharray[ndata.getMonth()];
        date = ndata.getDate();
        year = ndata.getYear();
        datastr = (month)

    </script>

    <script language="JavaScript">
        dayarray = new Array("воскресенье", "понедельник", "вторник", "среда", "четверг", "пятница", "суббота")
        montharray = new Array("января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октебря", "ноября", "декабря")
        ndataarray = new Date("С 1 ПО 15", "С 1 ПО 15", "С 1 ПО 15", "С 1 ПО 15", "С 1 ПО 15", "С 1 ПО 15", "С 1 ПО 15", "С 1 ПО 15", "С 1 ПО 15", "С 1 ПО 15", "С 1 ПО 15", "С 1 ПО 15", "С 1 ПО 15", "С 1 ПО 15", "С 1 ПО 15", "С 15 по 31", "С 15 по 31", "С 15 по 31", "С 15 по 31", "С 15 по 31", "С 15 по 31", "С 15 по 31", "С 15 по 31", "С 15 по 31", "С 15 по 31", "С 15 по 31", "С 15 по 31", "С 15 по 31", "С 15 по 31", "С 15 по 31");
        day = dayarray[ndata.getDay()];
        month = montharray[ndata.getMonth()];
        date = ndata.getDate();
        year = ndata.getYear();
        datastr7 = ("ndata" + "month")
    </script>

    <meta name="robots" content="index, follow" />
    <?php 
        echo '<meta name="keywords" content="' . wp_get_document_title() . ', шкафы" />' . "\n";
    ?>
    <link href="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/bitrix/cache/css/s1/main/kernel_main/kernel_mainf85d.css?149207081948075" type="text/css"
        rel="stylesheet" />
    <link
        href="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/bitrix/cache/css/s1/main/page_f01d178c93292938c0f6b1167201627c/page_f01d178c93292938c0f6b1167201627cb2a4.css?149207143715413"
        type="text/css" rel="stylesheet" />






    <link rel="shortcut icon" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/favicon.ico?1" type="image/x-icon">

    <link rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/css/normalize.css" />
    <link rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/css/fonts.css" />
    <link href="//<?php echo $_SERVER['SERVER_NAME']; ?>/css/style-old.css?2_2" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="//<?php echo $_SERVER['SERVER_NAME']; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- ProdesCode -->

    <link href="//<?php echo $_SERVER['SERVER_NAME']; ?>/css/media.css" rel="stylesheet">
    <link href="//<?php echo $_SERVER['SERVER_NAME']; ?>/css/skin.css" rel="stylesheet">



    <link href="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/twentytwenty-master/twentytwenty.css" rel="stylesheet">


    <link href="//<?php echo $_SERVER['SERVER_NAME']; ?>/css/stylef5eb.css?vrs_4" rel="stylesheet">
    <link href="//<?php echo $_SERVER['SERVER_NAME']; ?>/css/style.css" rel="stylesheet">







    <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/twentytwenty-master/jquery.event.move.js"></script>
    <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/twentytwenty-master/jquery.twentytwenty.js"></script>

    <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/compile.js?1"></script>
    
    <!--logo-->
    <link rel="icon" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/cropped-logo-32x32.png" sizes="32x32">
    <link rel="icon" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/cropped-logo-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/cropped-logo-180x180.png">
    <meta name="msapplication-TileImage" content="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/cropped-logo-270x270.png">

</head>

<body <?php body_class(); ?>>

<div id="page" class="site main">
	
    

   
    

