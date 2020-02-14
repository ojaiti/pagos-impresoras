<?php
 include 'consultas.php';
/*     include_once('include/header.php'); */
$periodo = $_POST['periodo'];
$taller = $_POST['periodo'];
$cantidad = count(getPeriodo());
$impresoras = getPeriodo();
$idImpresoras = [];
foreach($impresoras as $value){
    $idImpresoras[] = ($value['id']);
}

$contadores = [];
$errors = [];
/* for($i = 0; $i < $cantidad; $i++){
    if(empty($_POST[$i])){
         $errors[] = ($i); 
        header("Location: index.php?error=error");
    }

    $contadores[]=(
            $_POST[$i]
         );
    
    
} */
/* var_dump($errors);
$valoresImpresoras = array_combine($idImpresoras, $contadores);
var_dump($valoresImpresoras); */

    # definimos la carpeta destino
    $carpetaDestino="archivos_subidos/";
    # si hay algun archivo que subir
    if(isset($_FILES["archivo"]) && $_FILES["archivo"]["name"][0])
    {
        
        $cantidadArchivos = count($_FILES["archivo"]["name"]);
        # recorremos todos los arhivos que se han subido
        echo '<ul class="contentText">';
        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++)
        {
 
            # si es un formato de excel application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
            if($_FILES["archivo"]["type"][$i]=="text/plain")
            {
 
                # si exsite la carpeta o se ha creado
                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                {
                    $origen=$_FILES["archivo"]["tmp_name"][$i];
                    $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
                    # movemos el archivo
                    if(@move_uploaded_file($origen, $destino))
                    {
                        echo "<p class='archivoSubido'> ".$_FILES["archivo"]["name"][$i]." subido correctamente </p>";
                        header('Location: leertxt.php');
                       /*  header("location:paso2.php?nombre=".$_FILES["archivo"]["name"][0]); */
                    }else{
                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
                    }
                }else{
                    echo "<br>No se ha podido crear la carpeta: ".$carpetaDestino;
                }
            }else{
                echo "<br>".$_FILES["archivo"]["name"][$i]." - NO es TXT";
            }
        }
        echo '</ul>';
    }else{
        header("location:leertxt.php");
    }






    
    ?>
    