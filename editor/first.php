<!DOCTYPE HTML> 
<html>
  <head>
    <title>Modo de imagen</title>
    <script type="text/javascript" src="jscolor/jscolor.js"></script>
  </head>
  <body>

	<?php
		session_cache_limiter('nocache,private');
		session_name('editor');
		session_start();
		$_SESSION['i']=0;

		//echo session_id(),"<br>";
		//echo session_name(),"<br>";
	?>
	<!--<a Href="ejemplo121.php?<?echo session_name()."=".session_id()?>">
                  Volver a llamar esta página</a>  -->
   <p>Selecciona el color de fondo</p>
   <form action="firstok.php?<?echo session_name()."=".session_id()?>" method="post">
		<input type="text" class="color" name="color" />
		<input value="Siguiente" type="submit"/>  
   </form>
                  
 </body>
</html>