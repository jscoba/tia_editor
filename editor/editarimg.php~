
<html>
<head>
    <script type="text/javascript" src="jscolor/jscolor.js"></script>
    <script type="text/javascript" src="actualizarimagen.js"></script>
</head>
<body>
<?php	
	session_cache_limiter('nocache,private');
	session_name('editor');
	session_start();
	
echo	'<form action="guardarimg.php?'.session_name()."=".session_id().'" method="post">';
?>	
	Zoom (%):<input type="text" name="zoom" value="50" id="zoom" />
	X:<input type="text" maxlength="5" value="" name="X" id="positionX"/>
	Y:<input type="text" maxlength="5" value="" name="Y" id="positionY"/>
		<!-- Botones de funciones javascript y envio -->
	<input type="button" id="actualizar" value="actualizar" onclick="actualizarimagen()"> </input>
	<input type="button"id="mover" value="mover" onclick="empezarmoverimagen()"> </input> 
	<input type="submit" value="Continuar" />
	</form>
<div id="canvas" style="position: absolute; top: 60px; left: 0px;" onclick="" onmousemove="">
	<img src="images/<?php echo $_SESSION['imagename']; ?>" id="imagen" style="zoom: 50%; position: absolute; margin: 0px; top: 0px; left: 0px; z-index:50;" ></p>
	<?php
echo '<img src="'.session_id().$_SESSION['i'].'.png" style="zoom: 50%;" alt="" id="fondo" />';	
?>	

	</div>