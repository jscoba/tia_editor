<?php
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
$fondo= imagecreate(1900, 952);
$color_fondo=imagecolorallocate($fondo, $color['r'], $color['g'], $color['b']);
imagefill($fondo, 0, 0, $color_fondo);
?>