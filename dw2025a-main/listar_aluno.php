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
        $sql = "SELECT id_aluno, nome, matricula, curso, turma, data_nascimento FROM tb_aluno";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);

        // echo $resultados;
        // print_r($resultados);

        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>Nome</td>";
        echo "<td>Matricula</td>";
        echo "<td>Curso</td>";
        echo "<td>Turma</td>";
        echo "<td>Data Nascimento</td>";
        echo "<td>AÇÃO</td>";
        echo "</tr>";
        while ($aluno = mysqli_fetch_assoc($resultados)) {
            $id_aluno = $aluno['id_aluno'];
            $nome = $aluno['nome'];
            $matri = $aluno['matricula'];
            $curso = $aluno['curso'];
            $turma = $aluno['turma'];
            $data = $aluno['data_nascimento'];

                       
            // echo "$id_livro - $nome<br>";

            echo "<tr>";
            echo "<td>$id_aluno</td>";
            echo "<td>$nome</td>";
            echo "<td>$matri</td>";
            echo "<td>$curso</td>";
            echo "<td>$turma</td>";
            echo "<td>$data</td>";
            echo "<td><a href='deletar_aluno.php?id=$id_aluno'><img src='delete-button.png'></a></td>";
            echo "</tr>";


        }
        echo "</table>";


        mysqli_stmt_close($comando);    
    ?>
</body>
</html>