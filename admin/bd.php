<?php
$servidor="localhost";
$Basededatos="app";
$usuario="root";
$contrasenia="";
try{
    $conexion=new pdo("mysql:host=$servidor;dbname=$Basededatos",$usuario,$contrasenia);
    echo "Conexion realizada...";
}catch(exception $error){
    echo $error->getmessage();
}


?>