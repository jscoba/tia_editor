	<?php
	$b=dir('./fuentes');
	$i=0;
	while($fichero=$b->read()) {   
	//if($i>2){   
	$name=substr($fichero,0,-4);
	print("	@font-face	{	font-family: ". $name .";	src: url('./fuentes/". $name .".ttf'); }");
//	$i++;
//	}
	}
	?>