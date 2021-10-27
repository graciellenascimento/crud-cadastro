<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargos</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="cabecalho">
        Cargos
    </div>

    <!--configuração do formulário de cadastro de cargos com
        o php e o banco de dados--> 
    <div class="cadastro">
        <?php
            include_once 'config.php';

            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $atividades = $_POST["atividades"];

            $sql = "INSERT INTO cargos (nome, descricao, atividades) VALUES ('$nome','$descricao','$atividades')";

            if(mysqli_query($conn, $sql)) {
                echo "Cargo cadastrado com sucesso!";
            } else {
                echo "Não foi possível cadastrar.";
            }
        ?>
        <div id="retornar">
            <a href="./cadastroCargos.php">Retornar</a>
            <a href="./index.php">Menu</a>
        </div>
    </div>
</body>
</html>