<?php

  include("../ConnectionBD/Connection.php");

  $con = Conectar();
  //echo "Realizado connection";
  //$resultado = $con->Query("Select * from user");
  $resultado = mysql_query("Select * from users") or die(mysql_error);

  // creamos un variable array del tipo array la cual almacena todos los registros
  $datos = array();
  // iteramos todos los registros devueltos y llenamos el ArrayAccess

  while ($row = mysql_fetch_assoc($resultado)) {
    $datos["Arreglo"][] = $row;


  }
  //echo "<pre>";
  //print_r($datos);
  //echo "</pre>";
  // convertimos a JSON para que angular  pueda leerlo
  echo   json_encode($datos)

 ?>
