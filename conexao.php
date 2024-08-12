<?php
$Host = "localhost";
$Usuario = 'postgres';
$Senha = 'brudro203';
$Banco = 'biblioteca';

$conn = pg_connect("host=$Host port=1522 dbname=$Banco user=$Usuario password=$Senha");

if($conn){
    echo 'conectado';
}else{
    echo 'erro'; 
}

?>