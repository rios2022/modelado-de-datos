<?php
  error_reporting(0);
 include 'conexion.php';
  // array for JSON response
  $response = array();
  
  mysqli_query($con,"set names 'utf8'");
  
    $result = mysqli_query($con, "SELECT * FROM `productos`");
    
      $response = array();

      while ($row = mysqli_fetch_array($result)) {
              // temp user array
                           
              $item = array();
              $item["id"] = $row["id"];
              $item["marca"] = $row["marca"];
              $item["tipo"] = $row["tipo"];
               $item["genero"] = $row["genero"];
               $item["talla"] = $row["talla"];
               $item["color"] = $row["color"];
               $item["categorias"] = $row["categorias"];
               
              // push ordered items into response array 
              array_push($response, $item);
             }
        // success
       // echoing JSON response


  echo json_encode($response);

   $result2 = mysqli_query($con, "SELECT * FROM `salidas`");
    
    
      $response = array();

      while ($row = mysqli_fetch_array($result2)) {
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
               $item["fecha"] = $row["fecha"];
               $item["hora"] = $row["hora"];
               
              // push ordered items into response array 
              array_push($response, $item);
             }
        // success
       // echoing JSON response

  echo json_encode($response);


     $result3 = mysqli_query($con, "SELECT * FROM `abastecimiento`");
      

    
      $response = array();

      while ($row = mysqli_fetch_array($result3)) {
              // temp user array
                           
              $item = array();
              $item["id"] = $row["id"];
              $item["id_producto"] = $row["id_producto"];
              $item["marca"] = $row["marca"];
               $item["tipo"] = $row["tipo"];
               $item["genero"] = $row["genero"];
               $item["talla"] = $row["talla"];
               $item["color"] = $row["color"];
               $item["categorias"] = $row["categorias"];
               $item["precio_compra"] = $row["precio_compra"];
               $item["compra"] = $row["compra"];
               $item["fecha_compra"] = $row["fecha_compra"];
               $item["Proveedor"] = $row["Proveedor"];
               
              // push ordered items into response array 
              array_push($response, $item);
             }

        // success
       // echoing JSON response


  echo json_encode($response);
 
?>