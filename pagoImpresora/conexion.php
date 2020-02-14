<?php
$_MYSQL_HOST = '127.0.0.1';
$_MYSQL_DB = 'impresiones';
$_MYSQL_USER = 'root';
$_MYSQL_PASS = '';
try {
   $conn = new PDO('mysql:host=' . $_MYSQL_HOST . ';dbname=' . $_MYSQL_DB .';charset=utf8', $_MYSQL_USER, $_MYSQL_PASS);
 
   $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 /* echo "Conectado"; */
} catch (PDOException  $e) {
    echo '¡Error al conectar con la base de datos de la intranet!<br> ' . $e -> getMessage();
    die();
}








/* $host = "localhost";
$user = "root";
$pass = "";
$db = "prueba";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conn) . PHP_EOL;
mysqli_close($conn); */
?>