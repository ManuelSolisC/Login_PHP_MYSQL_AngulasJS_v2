<?php
// Conectando, seleccionando la base de datos
function Conectar()
{
  # code...

$link = mysql_connect('localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());
mysql_query("SET NAMES 'utf8'");
//echo 'Connected successfully';
mysql_select_db('pruebasangular') or die('No se pudo seleccionar la base de datos');

return $link;
}
?>
