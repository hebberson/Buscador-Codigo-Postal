<?php


//  error_reporting(E_ALL);
 // ini_set("display_errors", 1);

  include "connectar.php";
  $nombre_numicipio = $_POST["muni"];

  echo ($nomre_numicipio);

    
    //incluyo la conexion, i llamo a la funcion 
    
    mysqli_set_charset($database, "UTF8");
    //fem la consulta
    $consulta = "SELECT CodPostal FROM municipios WHERE Municipio ='".$nombre_numicipio."' ORDER BY CodPostal";
    $resultat = $database->query($consulta);
    $database->close();

    $res="";
    while ($row = $resultat->fetch_array()) {
      $res .= $row[0];
    }

    var_dump($res);
    echo json_encode($res);
?>