<?php
//Header("Content-type: image/png");

	session_cache_limiter('nocache,private');
	session_name('editor');
	session_start();

var_dump($_SESSION);
//imagedestroy($_SESSION['fondo']);
?>