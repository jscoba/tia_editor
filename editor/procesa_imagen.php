<?php
  include "config.php";
  /* Crear el registro. */
  mysql_connect(MYSQL_SERVER, MYSQL_USERNAME, MYSQL_PASSWORD) or die(mysql_error());
  mysql_select_db(MYSQL_DATABASE) or die(mysql_error());
  mysql_set_charset('utf8');

  $query_txt = "INSERT INTO pro_t_imagenes(pti_fecha_ini, pti_fecha_fin)".
          "VALUES ('".$_POST["pti_fecha_ini"]."', '".$_POST["pti_fecha_fin"]."');";

  $result = mysql_query($query_txt) or die(mysql_error());
  
  $pti_id = mysql_insert_id();
  $file_name = sprintf("%d-%s", $pti_id, $_POST["pti_archivo"]);
  
  $query_txt = "UPDATE pro_t_imagenes SET pti_archivo='".$file_name."'".
          " WHERE pti_id=".$pti_id.";";
  $result = mysql_query($query_txt) or die(mysql_error());

  $file_path = sprintf("%s%d-%s", UPLOAD_PATH, $pti_id, $_POST["pti_archivo"]);
	$file_final_path = UPLOAD_PATH.$file_name;

	//sleep(10);
  $yeah= copy($_POST["pti_archivo"], $file_final_path); //move_uploaded_file($_FILES["pti_archivo"]["tmp_name"], $file_final_path); 

	//$yeah=move_uploaded_file($_FILES["pti_archivo"]["tmp_name"], "/devel-tia/tia-upload/");
  
?>

<a href="first.php">Otra imagen</a>
