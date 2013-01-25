<?php

//////////////////
//GUARDA DATO
/////////////////
require_once("cx.php");
foreach($_POST as $v => $k )
$$v=$k;
mysql_query("INSERT INTO datos (nombre, id, descripcion) VALUES('$nombre','$id','$descri')", $conexion)or die(mysql_error());
/*header('Location:newp.php');*/
?>