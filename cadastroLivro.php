<?php

include ("./conexao.php");

$Livro = $_POST["livro"];

$Query = "Insert into LIVRO (livro) values ('$Livro')";
echo "<br>";
$resultado = pg_query($conn,$Query);


if ($resultado){
    echo "Cadastrado com sucesso";
}

echo "<br>";
echo "<a href='menu.html'> Volta </a>"; 

?>