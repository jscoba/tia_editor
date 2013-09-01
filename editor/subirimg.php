<?php	
	session_cache_limiter('nocache,private');
	session_name('editor');
	session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Subir imagen</title>
<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="dropzone.js"></script>
</head>
<body>
<h4>Subir imagen al servidor</h4>
<p>Formatos admitidos: png,jpeg</p>
<form action="processimg.php?<?php echo session_name()."=".session_id(); ?>" class="dropzone" id="dropzone">
	<div class="fallback">     
      <input type="file" name="file" id="file" />
	</div>
</form>
<br>
<a href="editarimg.php?<?php echo session_name()."=".session_id(); ?>" ><button>Continuar</button></a>
<script type="text/javascript" >
// The recommended way from within the init configuration:
Dropzone.options.dropzone = {
  init: function() {
    //this.on("addedfile", function(file) { alert("Added file."); });
  }
};

// Or programmatically, when creating a Dropzone.
// This is more complex and should only be used if you need to create your
// Dropzones on demand.
// 
// This example uses jQuery so it creates the Dropzone, only when the DOM has
// loaded.

// Disabling autoDiscover, otherwise Dropzone will try to attach twice.
Dropzone.autoDiscover = false;
// or disable for specific dropzone:
// Dropzone.options.myDropzone = false;

//$(function() {
  // Now that the DOM is fully loaded, create the dropzone, and setup the 
  // event listeners

  var myDropzone = new Dropzone("#dropzone");

  myDropzone.on("complete", function(file) {
   location.href='editarimg.php?<?php echo session_name()."=".session_id(); ?>'
    /* Maybe display some more file information on your page */
  });

//})
</script>
</body>
</html>
