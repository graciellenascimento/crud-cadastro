<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionários</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="cabecalho">
        Editar cadastro de funcionários
    </div>

    <?php
        include 'config.php';

        $id = $_GET['editar'] ?? '';
        $sql = "SELECT * FROM funcionarios WHERE id = $id";

        $dados = mysqli_query($conn, $sql);

        $abstracao = mysqli_fetch_assoc($dados);
        
    ?>

    <!--informações do funcionário-->
    <div class="cadastro">
        <form action="./alterarFuncionariosconfig.php" method="POST">
            <div class="input">
                <div class="nome">
                    Nome
                </div>
                <input type="text" name="nome" id="nome" value = "<?php echo $abstracao['nome']?>">
            </div>
            <div class="input">
                <div class="sobrenome">
                    Sobrenome
                </div>
                <input type="text" name="sobrenome" id="sobrenome" value = "<?php echo $abstracao['sobrenome']?>">
            </div>
            <div class="input">
                <div class="cargo">
                    Cargo
                </div>
                <input type="text" name="cargo" id="cargo" value = "<?php echo $abstracao['cargo']?>">
            </div>
            <div class="input">
                <div class="nascimento">
                    Nascimento
                </div>
                <input type="date" name="nascimento" id="nascimento" value = "<?php echo $abstracao['nascimento']?>">
            </div>
            <div class="input">
                <div class="admissao">
                    Admissão
                </div>
                <input type="date" name="admissao" id="admissao" value = "<?php echo $abstracao['admissao']?>">
            </div>
            <div class="input">
                <div class="salario">
                    Salário
                </div>
                <input type="number" name="salario" id="salario" value = "<?php echo $abstracao['salario']?>">
            </div>
            <div class="input">
                <input type="submit" name="enviar" value="Atualizar" id="cadastrar">
            </div>
            <div class="input">
                <input type="hidden" name="id" value = "<?php echo $abstracao['id']?>">
            </div>
        </form>
        <a class="cancelar" href="./tabeladefuncionarios.php" style="top: 79%;">
            Cancelar
        </a>
    </div>
</body>
</html>