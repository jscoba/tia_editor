<?php

/* Conexión BD. */
include_once 'conectar.php';
include_once 'config.php';
 
/* Consulta imágenes por fecha (activas para hoy). */
$fecha = date("Y-n-j");
$consulta = "SELECT * FROM `pro_t_imagenes` WHERE `pti_fecha_ini` <= '".$fecha."' AND `pti_fecha_fin` >= '". $fecha."'";
$resultado = mysql_query($consulta) or die(mysql_error());


?>
<html>
<head>
	<meta name="author" content="Javier Sáez de la Coba" >
	<title></title>

</head>
<body >
<table style="border: 1pt  solid; height: 10%; width: 100%; text-align: center; text-decoration: underline, bold;"   >
	<tr style="text-align: center; text-decoration: underline, bold;">
		<td><b>Miniatura</td>
		<td><b>Fecha inicio</td>
		<td><b>Fecha fin</td>
		<td><b>ID</td>
		<td><B>Eliminar</b></td>	
	</tr>
	<?php
	while($rst= mysql_fetch_row($resultado)) {
		echo '<tr>';
		echo '<td>';
		echo '<img src="'.UPLOAD_PATH.$rst[3].'" style="zoom: 15%">';
		echo '</td>';
		echo '<td>';
		echo $rst[1];
		echo '</td>';
		echo '<td>';
		echo $rst[2];
		echo '</td>';
		echo '<td>';
		echo $rst[0];
		echo '</td>';
		echo '<td>';
		echo '<a href="borrar2.php?id='.$rst[0].'&name='.$rst[3].'"><img src="borrar.png"></a>';
		echo '</td>';
		echo '</tr>';
	}
mysql_close();
	?>
</table>
</body>
</html>
