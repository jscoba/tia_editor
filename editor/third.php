<?php
	session_cache_limiter('nocache,private');
	session_name('editor');
	session_start();
	echo '<img src="texto'.$_SESSION['i'].'.png" height=50% weight=50%/>';
?>