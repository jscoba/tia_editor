<?php
$borrar=false;
$idaborrar= $_GET['id'];

/* Conexión BD. */
include_once 'conectar.php';
include_once 'config.php';
echo $idaborrar;
$consulta='DELETE FROM `pro_t_imagenes` WHERE `pti_id` = '.$idaborrar;
$resultado = mysql_query($consulta) or die(mysql_error());
mysql_close();
if($borrar) {
$filename= '/var/www'.UPLOAD_PATH.$_GET['name'];
unlink($filename);
var_dump($filename);
var_dump($_GET);
}
header ("Location: borrar.php");
?>