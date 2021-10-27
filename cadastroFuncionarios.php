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
        Cadastro de funcionários
    </div>

    <!--informações do funcionário-->
    <div class="cadastro">
        <form action="./cdfuncionarios.php" method="POST">
            <div class="input">
                <div class="nome">
                    Nome
                </div>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="input">
                <div class="sobrenome">
                    Sobrenome
                </div>
                <input type="text" name="sobrenome" id="sobrenome">
            </div>
            <div class="input">
                <div class="cargo">
                    Cargo
                </div>
                <input type="text" name="cargo" id="cargo">
            </div>
            <div class="input">
                <div class="nascimento">
                    Nascimento
                </div>
                <input type="date" name="nascimento" id="nascimento">
            </div>
            <div class="input">
                <div class="admissao">
                    Admissão
                </div>
                <input type="date" name="admissao" id="admissao">
            </div>
            <div class="input">
                <div class="salario">
                    Salário
                </div>
                <input type="number" name="salario" id="salario">
            </div>
            <div class="input">
                <input type="submit" name="enviar" value="Cadastrar" id="cadastrar">
            </div>
        </form>
        <a class="cancelar" href="./index.php" style="top: 79%;">
            Cancelar
        </a>
    </div>
</body>
</html>