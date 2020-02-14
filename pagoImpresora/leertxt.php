<META http-equiv="Content-Type" content="text/html" charset="utf-8">
<?php
include 'funciones/helper.php';
echo'<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo "<meta charset='UTF-8'>";
//Obtengo la ruta del archivo subido
$directorio = opendir('archivos_subidos/');

//contador
$i = 0; 
while ($archivo = readdir($directorio)){
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        /* echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes */
    }
    else
    {   
        $ruta = 'archivos_subidos/' . $archivo;
        $partirNombre = explode('_', $archivo);
        $arrayArchivos[]= file(utf8_encode($ruta));
        unset($arrayArchivos[$i][1]);
        /* echo $archivo; */
        $i++;
       
        
    }
}
//cantidad de archivos subidos
$cantidad_archivos = count($arrayArchivos);
if($cantidad_archivos < 3 || $cantidad_archivos > 3){
    $files = glob('archivos_subidos/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }
    header("Location: index.php?error=error");
}
//separacion de archivos
$file_one = $arrayArchivos[0];
$file_two = $arrayArchivos[1];
$file_three = $arrayArchivos[2];


//se llama a un metedod que esta en helper.php
//y retorna un array con los id y contadores
$primerArray = getIdandCount($file_one);
$segundoArray = getIdandCount($file_two);
$tercerArray = getIdandCount($file_three);



echo "Primer array";

var_dump($primerArray);
echo "Segundo array";
var_dump($segundoArray);
echo "Tercer array";

var_dump($tercerArray);


?>