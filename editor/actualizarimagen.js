function empezarmoverimagen(){
  $canvas=document.getElementById('fondo');
  
  $canvas.setAttribute("onclick","pararmoverimagen()") ;	
  $canvas.setAttribute("onmousemove","moverimagen()");
	}	
function moverimagen(elEvento){
	var evento=elEvento ||window.event;
	$zoom=document.getElementById('zoom').value
	$sitio=document.getElementById('imagen');	
	$sitio.style.top=(evento.pageY-58)*(200/$zoom);
	$sitio.style.left=(evento.pageX+2)*(200/$zoom);
	document.getElementById('positionY').value=(evento.pageY-60)*2;
	document.getElementById('positionX').value=(evento.pageX)*2;
	}
function pararmoverimagen(){
  $canvas=document.getElementById('fondo');
  $canvas.setAttribute("onclick","") ;	
  $canvas.setAttribute("onmousemove","");
	}

function actualizarimagen(){
	$zoom=document.getElementById('zoom').value/2 + '%';	
	
	$sitio=document.getElementById('imagen');
	$sitio.style.zoom=$zoom;
	
	}