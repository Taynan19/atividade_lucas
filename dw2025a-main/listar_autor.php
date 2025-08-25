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
        $sql = "SELECT id_autor, nome, data_nascimento, nacionalidade FROM tb_autor";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);

        // echo $resultados;
        // print_r($resultados);

        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>Nome</td>";
        echo "<td>Data nascimento</td>";
        echo "<td>Nascionalidade</td>";
        echo "<td>AÇÃO</td>";
        echo "</tr>";
        while ($autor = mysqli_fetch_assoc($resultados)) {
            $id_autor = $autor['id_autor'];
            $nome = $autor['nome'];
            $data = $autor['data_nascimento'];
            $nascionalidade = $autor['nacionalidade'];

                       
            // echo "$id_livro - $nome<br>";

            echo "<tr>";
            echo "<td>$id_autor</td>";
            echo "<td>$nome</td>";
            echo "<td>$data</td>";
            echo "<td>$nascionalidade</td>";
            echo "<td><a href='deletar_autor.php?id=$id_autor'><img src='delete-button.png'></a></td>";
            echo "</tr>";


        }
        echo "</table>";



        mysqli_stmt_close($comando);    
    ?>
</body>
</html>