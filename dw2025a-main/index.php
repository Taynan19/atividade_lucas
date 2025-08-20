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
    <a href="form_emprestimo.php">Cadastrar emprestimo</a> <br>

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

            echo "<br>";


            $sql = "SELECT nome AS aluno_antigo FROM tb_aluno ORDER BY data_nascimento ASC limit 1 ";
            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultados = mysqli_stmt_get_result($comando);

            while ($comando = mysqli_fetch_assoc($resultados)) {
                $resu = $comando['aluno_antigo'];
            }

            echo"Aluno mais antigo: $resu";

            echo "<br>";


            $sql = "SELECT nome AS aluno_novo FROM tb_aluno ORDER BY data_nascimento DESC limit 1 ";
            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultados = mysqli_stmt_get_result($comando);

            while ($comando = mysqli_fetch_assoc($resultados)) {
                $resu = $comando['aluno_novo'];
            }

            echo"Aluno mais novo: $resu";
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

            echo "<br>";


            $sql = "SELECT nome AS autor_antigo FROM tb_autor ORDER BY data_nascimento ASC limit 1 ";
            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultados = mysqli_stmt_get_result($comando);

            while ($comando = mysqli_fetch_assoc($resultados)) {
                $resu = $comando['autor_antigo'];
            }

            echo"Autor mais antigo: $resu";

            echo "<br>";


            $sql = "SELECT nome AS autor_novo FROM tb_autor ORDER BY data_nascimento DESC limit 1 ";
            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultados = mysqli_stmt_get_result($comando);

            while ($comando = mysqli_fetch_assoc($resultados)) {
                $resu = $comando['autor_novo'];
            }

            echo"autor mais novo: $resu";
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
            
            echo "<br>";


            $sql = "SELECT nome AS livro_antigo FROM tb_livro ORDER BY ano ASC limit 1 ";
            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultados = mysqli_stmt_get_result($comando);

            while ($comando = mysqli_fetch_assoc($resultados)) {
                $resu = $comando['livro_antigo'];
            }

            echo"Livro mais antigo: $resu";

            echo "<br>";


            $sql = "SELECT nome AS livro_antigo FROM tb_livro ORDER BY ano DESC limit 1 ";
            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultados = mysqli_stmt_get_result($comando);

            while ($comando = mysqli_fetch_assoc($resultados)) {
                $resu = $comando['livro_antigo'];
            }

            echo"Livro mais novo: $resu";

            echo "aqui";

            echo "<br>";


            $sql = "SELECT data_emprestimo AS empre_antigo FROM tb_emprestimo ORDER BY data_emprestimo ASC limit 1 ";
            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultados = mysqli_stmt_get_result($comando);

            while ($comando = mysqli_fetch_assoc($resultados)) {
                $resu = $comando['empre_antigo'];
            }

            echo"Emprestimo mais antigo: $resu";



        ?>

    </p>
</body>
</html>