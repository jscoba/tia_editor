<?php	
	session_cache_limiter('nocache,private');
	session_name('editor');
	session_start();
?>
<p>¿Qu&eacute; deseas introducir en tu imagen?</p>
<br>
<a href="introducirtexto.php?<?php echo session_name()."=".session_id(); ?>" >Texto</a> <br>
<a href="subirimg.php?<?php echo session_name()."=".session_id(); ?>" >Imagen</a>

<br>
<a href="third.php?<?php echo session_name()."=".session_id(); ?>" ><button>Finalizar</button></a>
