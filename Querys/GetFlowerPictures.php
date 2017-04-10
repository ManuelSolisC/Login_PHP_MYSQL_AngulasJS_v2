
    <?php

      include("../ConnectionBD/Connection.php");
      header('Content-type: application/json; charset=utf8');
      //mysql_set_charset('utf8');

      $con = Conectar();
      //echo "Realizado connection";
      //$resultado = $con->Query("Select * from user");
      $resultado = mysql_query("Select * from Flowers where VigenciaFlowers = 1") or die(mysql_error);

      // creamos un variable array del tipo array la cual almacena todos los registros
      $datos = array();
      // iteramos todos los registros devueltos y llenamos el ArrayAccess
      $i = 0;
      while ($row = mysql_fetch_assoc($resultado)) {

      /*  if($row['PictureFlowers'] ){
          $datos["ImagenDeFotos"][]  = base64_encode($row['PictureFlowers']);
        }
        else{
          $datos["ImagenDeFotos"][] = $row; // trae los datos perfectos desde la BD

        }*/

        //print_r($row);
        //$datos[$i][] = $row; // trae los datos perfectos desde la BD
        $datos["ImagenDeFotos"][$i]["IdFlowers"] = $row["IdFlowers"];
        $datos["ImagenDeFotos"][$i]["NombreFlower"] = $row["NombreFlower"];
        $datos["ImagenDeFotos"][$i]["PriceFlowers"] = $row["PriceFlowers"];
        $datos["ImagenDeFotos"][$i]["PictureFlowers"] = base64_encode($row['PictureFlowers']);
        $datos["ImagenDeFotos"][$i]["DescriptionFlowers"] = $row["DescriptionFlowers"];
        $i++;
    }



      //$json  = html_entity_decode(json_encode($datos));
      //$json = html_entity_decode(json_encode($datos));
      //$json = json_encode($datos);
      $json = json_encode($datos, JSON_UNESCAPED_UNICODE);
      echo $json;
?>
