<?php
    include 'config.php';
?>

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
        Funcionários
    </div>

    <div class="tabela">
        <table>
            <tr class="classificacao">
                <th>id</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Cargo</th>
                <th>Nascimento</th>
                <th>Admissão</th>
                <th>Salário</th>
            </tr>
        <?php
            $sql = "SELECT * FROM `funcionarios`";
            $dados = mysqli_query($conn, $sql);

            if($dados){
            while($row = mysqli_fetch_assoc($dados)){
                $id = $row['id'];
                $nome = $row['nome'];
                $sobrenome = $row['sobrenome'];
                $cargo = $row['cargo'];
                $nascimento = $row['nascimento'];
                $admissao = $row['admissao'];
                $salario = $row['salario'];
                echo '
                    <tr>
                        <td>'.$id.'</td>
                        <td>'.$nome.'</td>
                        <td>'.$sobrenome.'</td>
                        <td>'.$cargo.'</td>
                        <td>'.$nascimento.'</td>
                        <td>'.$admissao.'</td>
                        <td>'.$salario.'</td>
                        <td>
                        <button class = "botao-editar"><a href="alteracaoFuncionarios.php?editar='.$id.'">
                            Editar
                        </a></button>
                        <button class = "botao-excluir"><a href="deletarfuncionarios.php?deletar='.$id.'">
                            Excluir
                        </a></button>
                    </td>
                    </tr>';
                }
            }
        ?>
        </table>
            <div class = "voltar">
                <a href="./index.php">
                ← Voltar
                </a>
            </div>
    </div>
</body>
</html>