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
        Cargos
    </div>

    <div class="tabela">
        <table>
            <tr class="classificacao">
                <th>id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Atividades</th>
            </tr>
        <?php
            $sql = "SELECT * FROM `cargos`";
            $dados = mysqli_query($conn, $sql);

            if($dados){
            while($row = mysqli_fetch_assoc($dados)){
                $id = $row['id'];
                $nome = $row['nome'];
                $descricao = $row['descricao'];
                $atividades = $row['atividades'];
                echo '
                    <tr>
                        <td>'.$id.'</td>
                        <td>'.$nome.'</td>
                        <td>'.$descricao.'</td>
                        <td>'.$atividades.'</td>
                        <td>
                        <button class = "botao-editar"><a href="alterarCargos.php?editarcargos='.$id.'">
                            Editar
                        </a></button>
                        <button class = "botao-excluir"><a href="deletarcargos.php?deletar='.$id.'">
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