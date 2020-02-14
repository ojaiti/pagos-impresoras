<?php

function getIdandCount($file): Array{



    $vueltas = 0;
    foreach( $file as $key => $value){
        $file_explode[] = (explode("-", $value));
        /* $file_explode[] = explode(" ",$file_explode[$key][0]); */
        /* $words_trimmed = trim($file_explode[$key][0]); */
    
        if($vueltas > 0){
            $words_explode = explode(" ",$file_explode[$vueltas][0]);
            $file_explode[$vueltas][0] = $words_explode[0];
            $name = str_word_count($file_explode[$vueltas][0], 2);
            $file_explode[$vueltas][0] = str_replace($name,"",$file_explode[$vueltas][0]);
            /* $file_explode[$vueltas][3] = explode(" ",$file_explode[$vueltas][3]); */
            $file_explode[$vueltas][3] = preg_split('/(?<=[0-9])(?=[\sa-z]+)/i',$file_explode[$vueltas][3]);
            $file_explode[$vueltas][3] = $file_explode[$vueltas][3][22];
            $file_explode[$vueltas][0] = trim($file_explode[$vueltas][0]); 
            $file_explode[$vueltas][3] = trim($file_explode[$vueltas][3]); 
            
            
    
        }
        $vueltas++;
    }
    /* var_dump($file_explode); */
    /* $arr = preg_split('/(?<=[0-9])(?=[\sa-z]+)/i',$file_explode[2][3]);                                                               
    var_dump($arr); */
    return $file_explode;
    }

function splitStringWithNumbersInside($str){

    $str = ' 12 0 0 0 213 342 234 ';
    $arr = preg_split('/(?<=[0-9])(?=[\sa-z]+)/i',$str);  
    return $arr;                                                             
    /* var_dump($arr); */
}







/* obtenerContraseñas($lista); */
/* $claves = preg_split("/[\s,]+/", " hypertext language, programming "); */

/* 
    property $Lista 
    type: Array
*/
function getUserIdCantidad($lista){

//ABC
$vocalesMinusculas = array(
    'a','á','b','c','d','e','é','f','g','h','i','í','j','k','l','m','n','o','ó','Ó','p','q','r','s','t','u','ú','v','w','x','y','z'
);
$vocalesMayusculas = [];

foreach($vocalesMinusculas as $l)
{
    $letraMayuscula =  strtoupper($l);
    $vocalesMayusculas[] = $letraMayuscula;
}
$letras = array_merge($vocalesMayusculas, $vocalesMinusculas);
$letras[] = 'Ñ';
$letras[] = 'ñ';

    $cantidad = [];
    $idImpresion =[];
    $datos = array();

    for($i = 0; $i < sizeof($lista); $i++){

        $linea1 = explode('-',$lista[$i]);
        unset($linea1[1]);
        unset($linea1[2]);
        $lineaCon = $linea1[0];
        $lineaNum = $linea1[3];
        $lineaCon = explode(" ",($linea1[0]));
        $pass = str_replace($letras, "", ($lineaCon[0]));
        $idImpresion[] = trim($pass);
        $numeros = preg_split("/[\s,]+/",$lineaNum);
        /* var_dump($numeros); */
        foreach($numeros as $key=>$value){
            if($key == 23){
                $cantidad[] = $value;
            }
        }

    }
    /* echo "Hola user id password"; */
    /* var_dump($cantidad);
    var_dump($idImpresion); */

    for($i = 0; $i < sizeof($idImpresion) - 1; $i++){
        $datos[]=array(
            'idUser' => $idImpresion[$i],
            'cantUser' => $cantidad[$i]
        );
    }

    return $datos;
}
/* var_dump($datos); */


?>