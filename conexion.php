<?php  

$host="sql550.main-hosting.eu";
$bd="u279581364_webpeniel";
$usuario="u279581364_peniel";
$contrsenia="S8092730489s";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrsenia);
    if($conexion){ "Conectado";}
}catch (Exception $ex){
    echo $ex->getMessage();
}

?>