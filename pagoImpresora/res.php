<META http-equiv="Content-Type" content="text/html" charset="utf-8">
<?php
include 'funciones/limpiarTexto.php';
echo'<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo "<meta charset='UTF-8'>";
//Obtengo la ruta del archivo subido
$directorio = opendir('archivos_subidos/');


$lista = [];
$i = 0;
$explodeArrayArchivos = [];
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

$cantidad_archivos = count($arrayArchivos);
if($cantidad_archivos < 3 || $cantidad_archivos > 3){
    $files = glob('archivos_subidos/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }
    header("Location: index.php?error=error");
}

$file_one = $arrayArchivos[0];
$file_two = $arrayArchivos[1];
$file_trhee = $arrayArchivos[2];

/* var_dump($arrayArchivos); */
/* var_dump($file_one); */
$file_explode = [];
foreach( $file_one as $key => $value){
    $file_explode[] = (explode(" ", $value));

}
echo "Explode";
$pos = $file_explode[1][0];
$lenPos = count($file_explode[2]);
$pos2 = $file_explode[2][$lenPos - 1];
$explodePos =  explode(" ",$pos);
echo $pos2;
var_dump($explodePos);
var_dump($file_explode);
?>