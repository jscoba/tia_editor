function actualizartexto(){
	$texto=document.getElementById('text').value;	
	$color=document.getElementById('color').value;
	$fuente=document.getElementById('font').value;
	$size=document.getElementById('size').value + 'px';
	$sitio=document.getElementById('texto');
	$sitio.style.color=$color;
	$sitio.innerHTML=$texto;
	$sitio.style.fontSize=$size;
	fuentetexto();
	
	}
function empezarmovertexto(){
  $canvas=document.getElementById('fondo');
  
  $canvas.setAttribute("onclick","pararmovertexto()") ;	
  $canvas.setAttribute("onmousemove","movertexto()");
	}	
function movertexto(elEvento){
	var evento=elEvento ||window.event;
	
	$sitio=document.getElementById('texto');	
	$sitio.style.top=evento.pageY*2-115;
	$sitio.style.left=evento.pageX*2+1;
	document.getElementById('positionY').value=(evento.pageY-60)*2;
	document.getElementById('positionX').value=(evento.pageX)*2;
	}
function pararmovertexto(){
  $canvas=document.getElementById('fondo');
  $canvas.setAttribute("onclick","") ;	
  $canvas.setAttribute("onmousemove","");
	}

function fuentetexto(){
	$fuente=document.getElementById('font').value;
var $font="	@font-face	{	font-family: "+ $fuente +";	src: url('/fuentes/"+ $fuente +".ttf'); }";
	$sitio=document.getElementById('texto');
	$sitio.style=$font;
	$sitio.style.fontFamily= $fuente;
	
	}