<html>
<head>
    <script type="text/javascript" src="jscolor/jscolor.js"></script>
    <script type="text/javascript" src="actualizar-texto.js"></script>
    <style type="text/css" src="cssfuentes.php"> </style>
</head>
<body>
<?php	
	session_cache_limiter('nocache,private');
	session_name('editor');
	session_start();
	
echo	'<form action="guardartexto.php?'.session_name()."=".session_id().'" method="post">';
?>	
	<input type="text" name="text" value="Texto" id="text" />
	<select id="font" name="font">
<option value="" selected="selected">- Fuente -</option>
	<?php
	$b=dir('./fuentes');
	while($fichero=$b->read()) {      
	$name=substr($fichero,0,-4);
	echo '<option value="'.$name.'">'.$name.'</option>';
	}
	?>
	</select>
	<select id="size" name="size">
<option value="" selected="selected">- Tamaño -</option>
	<?php
	$i=14;
	while($i<=100
) {
	echo '<option value="'.$i.'">'.$i.'</option>';
	$i++;
	}
	?>
	</select>
	<input name="color" class="color" id="color" />
	X:<input type="text" maxlength="5" value="" name="X" id="positionX"/>
	Y:<input type="text" maxlength="5" value="" name="Y" id="positionY"/>

	<!-- Botones de funciones javascript y envio -->
	<input type="button" id="actualizar" value="actualizar" onclick="actualizartexto()"> </input>
	<input type="button"id="mover" value="mover" onclick="empezarmovertexto()"> </input> 
	<input type="submit" value="Continuar" />
	</form>
	<div id="canvas" style="position: absolute; top: 60px; left: 0px;" onclick="" onmousemove="">
	<p id="texto" style="zoom: 50%; position: absolute; margin: 0px; top: 0px; left: 0px;" ></p>
	<?php
echo '<img src="'.session_id().$_SESSION['i'].'.png" style="zoom: 50%;" alt="" id="fondo" />';	
?>	

	</div>
	
	
</body>
</html>