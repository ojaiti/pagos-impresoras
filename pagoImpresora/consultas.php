<?php

function getPeriodo(){
    include 'conexion.php';
    $stmt = $conn->prepare('SELECT * FROM impresora');
    $stmt->execute();
    $items = $stmt->fetchAll();

    return $items;
  /*   var_dump($items); */
    /* foreach($items as $key => $item){
        echo $item['id'];
        echo '<br>';
    } */
} 


//Eliminar los archivos
/* if(isset($_POST)){
  $valor = $_POST['opcion'];
  
  if($valor == 'borrar'){
    $files = glob('archivosExcelAlimentos/*'); 
  foreach($files as $file){
      if(is_file($file))
      unlink($file); 
  }
     echo 'Archivos Temporales borrados';
  
  }
  
} */


?>


