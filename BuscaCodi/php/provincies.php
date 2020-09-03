<?php


//  error_reporting(E_ALL);
 // ini_set("display_errors", 1);

  include "connectar.php";

    
    //incluyo la conexion, i llamo a la funcion 
    
    mysqli_set_charset($database, "UTF8");
    //fem la consulta
    $consulta = "SELECT * FROM provincias ORDER BY Provincia";
    $resultat = $database->query($consulta);
    $database->close();

    $res;
    while ($row = $resultat->fetch_array()) {
      $res .= "<option value=".$row[0].">".$row[1]."</option>";
    }
      //var_dump($res);
    echo json_encode($res);

?>