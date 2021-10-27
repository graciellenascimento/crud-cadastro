<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="cabecalho">
        Funcionários
    </div>

    <div class="cadastro">
        <?php
        include 'config.php';

        if(isset($_GET['deletar'])){
            $id = $_GET['deletar'];
        }
        $sql = "DELETE FROM `funcionarios` where id=$id";

        $dados = mysqli_query($conn, $sql);

        if($dados){
            echo 'Cadastro deletado com sucesso!';
        } else {
            echo "erro";
        }
        ?>
        <div id="retornar">
            <a href="./tabeladefuncionarios.php">Retornar</a>
            <a href="./index.php">Menu</a>
        </div>
    </div>
</body>
</html>
