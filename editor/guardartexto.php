<?php
	session_cache_limiter('nocache,private');
	session_name('editor');
	session_start();
$_SESSION['i']++;
	function HexToRGB($hex)
{
	$hex = str_replace("#", "", $hex);
	$color = array();

	if(strlen($hex)==3)
	{
		$color['r'] = hexdec(substr($hex, 0, 1).substr($hex, 0, 1));
		$color['g'] = hexdec(substr($hex, 1, 1).substr($hex, 1, 1));
		$color['b'] = hexdec(substr($hex, 2, 1).substr($hex, 2, 1));
	}elseif(strlen($hex)==6){
		$color['r'] = hexdec(substr($hex, 0, 2));
		$color['g'] = hexdec(substr($hex, 2, 2));
		$color['b'] = hexdec(substr($hex, 4, 2));
	}
	return $color;
}
$_SESSION['colortexto']=HexToRGB($_POST['color']);

$_SESSION['texto']=$_POST['text'];
$_SESSION['size']=$_POST['size'];
$_SESSION['fuente']=$_POST['font'];
$_SESSION['X']=$_POST['Y'];
$_SESSION['Y']=$_POST['X'];
if(file_exists(session_id().$_SESSION['i'].'.png')
{
	$pathfondo=session_id().$_SESSION['i'].'.png';
}else {
	$pathfondo='fondo.png';	
}
//$pathfondo='fondo.png';
$_SESSION['texto'.$_SESSION['i']]=imagecreatefrompng($pathfondo);
$color_texto=imagecolorallocate($_SESSION['texto'.$_SESSION['i']], $_SESSION['colortexto']['r'], $_SESSION['colortexto']['g'], $_SESSION['colortexto']['b']);
imagettftext($_SESSION['texto'.$_SESSION['i']], $_SESSION['size'], 0, $_SESSION['X'], $_SESSION['Y'], $color_texto,'./fuentes/'.$_SESSION['fuente'].'.ttf' , $_SESSION['texto']);
imagepng($_SESSION['texto'.$_SESSION['i']], session_id().$_SESSION['i'].'.png');

var_dump($_SESSION);
var_dump($pathfondo);
//imagepng($_SESSION['texto'.$_SESSION['i']]);
imagedestroy($_SESSION['texto'.$_SESSION['i']]);

header ("Location: second.php?".session_name()."=".session_id());


?>