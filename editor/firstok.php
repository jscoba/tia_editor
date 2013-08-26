<?php
	session_cache_limiter('nocache,private');
	session_name('editor');
	session_start();
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
//var_dump($_POST);
$_SESSION['colorfondo']=HexToRGB($_POST['color']);
echo '<img src="genfondo.php?'.session_name()."=".session_id().'" width="50%" height="50%" alt="" />';
echo '<br>';
echo '<a href="second.php?'.session_name()."=".session_id().'"><input value="Continuar" type="button"></button></a><a href="first.php?'.session_name()."=".session_id().'"><input value="Volver" type="button"></button></a>';


?>