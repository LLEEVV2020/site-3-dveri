<?php
    if (isset($_GET['utm_source']) && $_GET['utm_source'] != '')
        setcookie('utm_source', $_GET['utm_source'], time()+60*60*24*60,'/');

    if (isset($_GET['utm_term']) && $_GET['utm_term'] != '')
        setcookie('utm_term', $_GET['utm_term'], time()+60*60*24*60,'/');
?>
