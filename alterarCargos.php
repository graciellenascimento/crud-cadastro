<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cargos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="cabecalho">
        Atualização de cargos
    </div>

    <?php
    include 'config.php';

        $id = $_GET['editarcargos'] ?? '';
        $sql = "SELECT * FROM cargos WHERE id = $id";

        $dados = mysqli_query($conn, $sql);

        $abstracao = mysqli_fetch_assoc($dados);
    ?>

    <!--informações do cargo-->
    <div class="cadastro">
        <form action="./alterarCargosconfig.php" method="POST">
            <div class="input">
                <div class="nome">
                    Nome
                </div>
                <input type="text" name="nome" id="nome" value = "<?php echo $abstracao['nome']?>">
            </div>
            <div class="input">
                <div class="descricao">
                    Descrição
                </div>
                <input type="text" name="descricao" id="descricao" value = "<?php echo $abstracao['descricao']?>">
            </div>
            <div class="input">
                <div class="atividades">
                    Atividades
                </div>
                <input type="text" name="atividades" id="atividades" value = "<?php echo $abstracao['atividades']?>">
            </div>
            <div class="input">
                <input type="submit" name="enviar" value="Atualizar" id="cadastrar">
            </div>
            <div class="input">
                <input type="hidden" name="id" value ="<?php echo $abstracao['id']?>">
            </div>
        </form>
        <a class="cancelar" href="./index.php" style="top: 52%;">
            Cancelar
        </a>
    </div>
</body>
</html>