
       

         <link href="//<?php echo $_SERVER['SERVER_NAME']; ?>/css/animate.css" rel="stylesheet">
        <!-- ProdesCode -->
        <!--
<link href="/css/style.css" rel="stylesheet">
 <link href="/css/media.css" rel="stylesheet">
-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->



        <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/bootstrap.min.js"></script>
        <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery.easing-1.3.js"></script>

        <script>
            //Работа с ползунком на туч устройствах
            //$('#slider').draggable();
            //$('#sliderhor').draggable();
            //$('#sliderver').draggable();
            var months = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
            var month_days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            var now = new Date();
            var month = now.getMonth();
            var day = now.getDate();

            if (day < 15) {
                var start = 1;
                var end = 15;
            }
            else {
                var start = 15;
                var end = month_days[month];
            }
            $('#akcia').html('C ' + start + ' по ' + end + ' ' + months[month] + '!');	
        </script>

        <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery.iosslider.js"></script>

        <link rel="stylesheet" href="css/zoom-showcase.css" type="text/css" />
        <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/zoom-showcase.js" type="text/javascript"></script>
        <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery.jcarousel.min_.js"></script>
        <script type="text/javascript" src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery.cookie.min.js"></script>
        <script type="text/javascript" src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/waypoints.min.js"></script>
        <!-- ProdesCode -->
        <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/prodes0fd9.js?up=6" charset="utf-8"></script>

        <script type="text/javascript">
            var comagicYesOrNo = "yes";
        </script>
        <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/for_comagic.js"></script>

        <script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/otherscripts.js"></script>

        <script type="text/javascript">
            $('.b-vid-remonta__spisok_all .b-link-blue').each(function () {
                $(this).data('text', $(this).text());
            });
        </script>
        <script type="text/JavaScript">
	function onoffchange(cual){
		if($(cual).html()=='Свернуть'){
			$(cual).html($(cual).data('text'));
		}else{
			$(cual).html('Свернуть');
		}
		return false;
	}
</script>
       
        <!-- Pixel -->
        <script type="text/javascript" src="//<?php echo $_SERVER['SERVER_NAME']; ?>/js/pixel.js"></script>
        <!-- /Pixel -->
