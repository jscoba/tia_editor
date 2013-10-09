<?php
	session_cache_limiter('nocache,private');
	session_name('editor');
	session_start();
	print( '<img src="'.session_id().$_SESSION['i'].'.png" height=50% weight=50%/>');
?>
<html lang="es">
    <head>
        <meta charset="utf-8">  
        <title>Crear imagen</title>
        <link href="css/smoothness/jquery-ui-1.8.24.custom.css" rel="stylesheet" />
    </head>
    <body>
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/jquery-ui-1.8.24.min.js"></script>
        <form name="imagen" method="post" action="procesa_imagen.php?<?php echo session_name()."=".session_id(); ?>" enctype="multipart/form-data">
        		<p style="visibility:hidden;">Archivo: <input type="text" name="pti_archivo" value="<?php echo session_id().$_SESSION['i'].'.png'; ?>" id="pti_archivo" /></p>
            <p>Fecha inicio: <input type="date" class="date-pick" id="pti_fecha_ini" name="pti_fecha_ini" value="" /></p>
            <p>Fecha fin: <input type="date" class="date-pick" id="pti_fecha_fin" name="pti_fecha_fin" value="" /></p>
            <p><input type="submit" name="submit" value="Enviar" /></p>
        </form>
    </body>
</html>