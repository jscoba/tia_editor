<?php
Header("Content-type: image/png");

	session_cache_limiter('nocache,private');
	session_name('editor');
	session_start();



$_SESSION['fondo']= imagecreate(1900, 952);
$color_fondo=imagecolorallocate($_SESSION['fondo'], $_SESSION['colorfondo']['r'], $_SESSION['colorfondo']['g'], $_SESSION['colorfondo']['b']);
imagefill($_SESSION['fondo'], 0, 0, $color_fondo);
imagepng($_SESSION['fondo']);
imagepng($_SESSION['fondo'],session_id().$_SESSION['i'].'.png');
imagedestroy($_SESSION['fondo']);
?>