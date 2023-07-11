<?php

$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");$symbian = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");$windowsphone = strpos($_SERVER['HTTP_USER_AGENT'],"Windows Phone");

if ($iphone || $android || $palmpre || $ipod || $berry || $symbian || $windowsphone == true) $dispositivo = "mobile";
else $dispositivo = "computador";  

include_once('paginas/home/text.php');
include_once('paginas/home/slider_notext.php');
include_once('paginas/home/esg.php');

?>