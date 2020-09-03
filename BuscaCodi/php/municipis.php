<?php


//  error_reporting(E_ALL);
 // ini_set("display_errors", 1);

  include "connectar.php";
  $codigo_prov = $_POST["codpro"];

    
    //incluyo la conexion, i llamo a la funcion 
    
    mysqli_set_charset($database, "UTF8");
    //fem la consulta
    $consulta = "SELECT DISTINCT Municipio FROM municipios WHERE CodProv =".$codigo_prov." ORDER BY Municipio";
    $resultat = $database->query($consulta);
    $database->close();

    $res;
    while ($row = $resultat->fetch_array()) {
      $res .= "<option>".$row[0]."</option>";
    }
    //  var_dump($res);
    echo json_encode($res);

?>