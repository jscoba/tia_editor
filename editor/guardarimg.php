<?php
	session_cache_limiter('nocache,private');
	session_name('editor');
	session_start();
$_SESSION['i']++;
//Variables de POST
$_SESSION['X']=(int)$_POST['X'];
$_SESSION['Y']=(int)$_POST['Y'];
$zoom=((int)$_POST['zoom'])/100;
//Imagen base
if(file_exists(session_id().($_SESSION['i']-1).'.png'))
{
	$pathfondo=session_id().($_SESSION['i']-1).'.png';
} else {
	$pathfondo='fondo.png';	
}

$imgbase=imagecreatefrompng($pathfondo);

$imgtoadd= 'images/' . $_SESSION['imagename'];
$tamano=getimagesize($imgtoadd);
$orig_Ancho = $tamano[0];
$orig_Alto =$tamano[1]; 

//Obtener extension de la imagen original


       $tipo=substr($imgtoadd,-3);

//var_dump($tipo);
switch($tipo){
    case "jpg" | 'JPG' | 'JPE' | 'jpe':
          $importada=imagecreatefromjpeg($imgtoadd);
      break;
    case "png" | 'PNG':
          $importada=imagecreatefrompng($imgtoadd);
      break;
    case "gif" | 'GIF':
          $importada=imagecreatefromgif($imgtoadd);
    break;
    case "bmp" | 'BMP':
    		$importada=imagecreatefromwbmp($filename);
    break;
 }


$ampliacion_X=$zoom;
$ampliacion_Y=$zoom; 
# dimensiones del soporte
$ancho_final=$tamano[0]*$ampliacion_X;
$alto_final=$tamano[1]*$ampliacion_Y;
$image=imagecreatetruecolor(1900, 952);
imagecopyresampled($image, $imgbase, 0,0,0,0, 1900, 952, 1900, 952);
imagecopyresampled($image, $importada, $_SESSION['X'], $_SESSION['Y'], 0, 0, $ancho_final, $alto_final, $tamano[0], $tamano[1]);

imagepng($image, session_id().$_SESSION['i'].'.png');


header ("Location: second.php?".session_name()."=".session_id());
?>
