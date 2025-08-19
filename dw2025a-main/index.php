<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página inicial</h1>

    <a href="form_livro.php">Cadastrar Livro</a> <br>
    <a href="form_autor.php">Cadastrar Autor</a> <br>
    <a href="form_aluno.php">Cadastrar Aluno</a> <br>

    <hr>

    <a href="listar_livros.php">Lista de Livros</a> <br>
    <a href="listar_livros_2.php">Lista de Livros (cartões)</a>

    <p>
        <h3>Dados dos alunos</h3>
        <?php
            require_once  "conexao.php";

            $sql = "SELECT count(*)AS total_alunos from tb_aluno;";
            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultados = mysqli_stmt_get_result($comando);

            while ($comando = mysqli_fetch_assoc($resultados)) {
                $resu = $comando['total_alunos'];
            }

            echo "Quantidade de alunos: $resu";
        ?>
    </p>
    <p> 
        <h3>Dados dos autores</h3>   
        <?php
            require_once  "conexao.php";

            $sql = "SELECT count(*)AS total_autor from tb_autor;";
            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultados = mysqli_stmt_get_result($comando);

            while ($comando = mysqli_fetch_assoc($resultados)) {
                $resu = $comando['total_autor'];
            }

            echo "Quantidade de autor: $resu";
        ?>
    </p>    
    <p> 
        <h3>Dados dos livros</h3>   
        <?php
            require_once  "conexao.php";

            $sql = "SELECT count(*)AS total_livro from tb_livro;";
            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultados = mysqli_stmt_get_result($comando);

            while ($comando = mysqli_fetch_assoc($resultados)) {
                $resu = $comando['total_livro'];
            }

            echo "Quantidade de livro: $resu";


            $sql = "SELECT count(*)AS total_livro from tb_livro;";
            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultados = mysqli_stmt_get_result($comando);

            while ($comando = mysqli_fetch_assoc($resultados)) {
                $resu = $comando['total_livro'];
            }


        ?>

    </p>
</body>
</html>