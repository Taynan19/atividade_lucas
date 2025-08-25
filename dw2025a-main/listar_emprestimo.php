<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 60px;
            height: 60px;
        }
    </style>
</head>
<body>
    <h2>Lista de Livros Cadastrados</h2>

    <a href="index.php">Voltar</a> <br>
    <?php

        require_once "conexao.php";

        
        // SELECT * FROM tb_livro;
        $sql = "SELECT id_emprestimo, tbal.nome AS nome_aluno,tbl.nome AS nome_livro, tbe.data_emprestimo, tbe.data_devolucao FROM  tb_emprestimo AS tbe INNER JOIN  tb_aluno AS tbal ON tbe.id_aluno = tbal.id_aluno INNER JOIN  tb_livro AS tbl ON tbe.id_livro = tbl.id_livro";

        $comando = mysqli_prepare($conexao, $sql);
        mysqli_stmt_execute($comando);
        $resultados = mysqli_stmt_get_result($comando);

        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>ID do Empréstimo</td>";
        echo "<td>Nome do Aluno</td>";
        echo "<td>Nome do Livro</td>";
        echo "<td>Data do Empréstimo</td>";
        echo "<td>Data da Devolução</td>";
        echo "<td>AÇÃO</td>";
        echo "</tr>";

        while ($emprestimo = mysqli_fetch_assoc($resultados)) {
            $id_emprestimo = $emprestimo['id_emprestimo'];
            $nome_aluno = $emprestimo['nome_aluno'];
            $nome_livro = $emprestimo['nome_livro'];
            $data_emprestimo = $emprestimo['data_emprestimo'];
            $data_devolucao = $emprestimo['data_devolucao'];
        
            echo "<tr>";
            echo "<td>$id_emprestimo</td>";
            echo "<td>$nome_aluno</td>";
            echo "<td>$nome_livro</td>";
            echo "<td>$data_emprestimo</td>";
            echo "<td>$data_devolucao</td>";
            echo "<td><a href='deletar_emprestimo.php?id=$id_emprestimo'><img src='delete-button.png'></a></td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_stmt_close($comando);    
    ?>
</body>
</html>