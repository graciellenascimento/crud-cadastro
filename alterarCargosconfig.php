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
            include 'config.php';

            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $atividades = $_POST["atividades"];
            
            $sql = "UPDATE `cargos` SET `nome`= '$nome',`descricao`='$descricao',`atividades`='$atividades' WHERE id = $id";

            if(mysqli_query($conn, $sql)) {
                echo "$nome atualizado com sucesso!";
            } else{
                echo "Não foi possível atualizar.";
            }
        ?>
        <div id="retornar">
            <a href="./tabeladecargos.php">Retornar</a>
            <a href="./index.php">Menu</a>
        </div>
    </div>
</body>
</html>