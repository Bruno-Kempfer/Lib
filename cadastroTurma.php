<?php

include ("conexao.php");
echo "<br>";

$Turma = $_POST['turma'];

$Query = "Insert into Turma (turma) values ( '$Turma')";

$resultado = pg_query($conn, $Query);

if($resultado){
    echo 'Cadastrado com sucesso';
    echo "<br>"; 
}

echo "<a href= './menu.html'> voltar </a>";

?>