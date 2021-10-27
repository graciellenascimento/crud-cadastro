<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="cabecalho">
        Atualizar funcionários
    </div>

    <!--configuração do formulário de cadastro do funcionário com
        o php e o banco de dados--> 
    <div class="cadastro">
        <?php
            include 'config.php';

            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $cargo = $_POST["cargo"];
            $nascimento = $_POST["nascimento"];
            $admissao = $_POST["admissao"];
            $salario = $_POST["salario"];

            $sql = "UPDATE `funcionarios` SET `nome`= '$nome',`sobrenome`='$sobrenome',`cargo`='$cargo',`nascimento`='$nascimento',`admissao`='$admissao',`salario`='$salario' WHERE id = $id";

            if(mysqli_query($conn, $sql)) {
                echo "$nome $sobrenome atualizado com sucesso!";
            } else {
                echo "Não foi possível atualizar.";
            }
        ?>
        <div id="retornar">
            <a href="./tabeladefuncionarios.php">Retornar</a>
            <a href="./index.php">Menu</a>
        </div>
    </div>
</body>
</html>