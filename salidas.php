<?php
  error_reporting(0);
 include 'conexion.php';
  // array for JSON response
  $response = array();
  
  mysqli_query($con,"set names 'utf8'");
  
   
       $result2 = mysqli_query($con, "SELECT * FROM `salidas`");

    
    
      $response = array();

      while ($row = mysqli_fetch_array($result2)) {

        $dts_data=$row["fecha"];
        $separar_date=explode('/', $dts_data);
        $dia=$separar_date['0'];
        $mes=$separar_date['1'];
        $years=$separar_date['2'];

              // temp user array
                           
              $item = array();
              $item["id"] = $row["id"];
              $item["codigo_producto"] = $row["codigo_producto"];
              $item["tienda"] = $row["tienda"];
               $item["marca"] = $row["marca"];
               $item["tipo"] = $row["tipo"];
               $item["genero"] = $row["genero"];
               $item["talla"] = $row["talla"];
               $item["color"] = $row["color"];
               $item["categoria"] = $row["categoria"];
               $item["precio"] = $row["precio"];
               $item["cantidad"] = $row["cantidad"];
               $item["total_v"] = $row["cantidad"] * $row["precio"] ;
               $item["fecha"] = $row["fecha"];
               $item["hora"] = $row["hora"];
               $item["dia"] = $dia;
               $item["mes"] = $mes;
               $item["year"] = $years;

               
              // push ordered items into response array 
              array_push($response, $item);
             }
        // success
       // echoing JSON response


  echo json_encode($response);
 
?>