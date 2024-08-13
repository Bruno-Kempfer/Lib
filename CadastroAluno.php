<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="">Nome do aluno</label>
        <br>
        <input type="text" id="nome" name="nome" value="nome">
        <br>
        <label for="">turma</label>
        <br>



        <select name="turma">


            <?php
            include ("./conexao.php");

            $query = 'SELECT * FROM turma';
            $result = pg_query($conn, $query);

            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }

            while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)) {
                echo "<option value = " . $row["id"] . "> " . $row["turma"] . " </option>";
            }


            ?>

        </select>
        <br>
        <input type="submit" value="enviar">
    </form>
</body>



</html>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $Turma = $_POST['turma'];

    $query = "Insert into aluno(nome,turma) values('$nome',$Turma)";

    $resultado = pg_query($conn, $query);

    if ($resultado) {
        echo 'Aluno cadastrado';
    }
}



?>