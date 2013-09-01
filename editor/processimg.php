<?php	
	session_cache_limiter('nocache,private');
	session_name('editor');
	session_start();

// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

$uploaddir = '/var/www/devel/tia_editor/editor/images/';
$_SESSION['imagename']=session_id() . "." . substr(strrchr($_FILES['file']['name'], "."),1);
$uploadfile = $uploaddir . $_SESSION['imagename'];



move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);

echo "File is valid, and was successfully uploaded.\n";
    
?>