<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar_emprestimo.php" method="POST">
        Livro: <br>
        <select name="livro">
            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM tb_livro";

            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultados = mysqli_stmt_get_result($comando);

            while ($autor = mysqli_fetch_assoc($resultados)) {
                $nome = $autor['nome'];
                $id = $autor['id_livro'];

                echo "<option value='$id'>$nome</option>";
            }
            ?>
        </select> <br>
        Aluno: <br>
        <select name="aluno">
            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM tb_aluno";

            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $resultados = mysqli_stmt_get_result($comando);

            while ($autor = mysqli_fetch_assoc($resultados)) {
                $nome = $autor['nome'];
                $id = $autor['id_aluno'];

                echo "<option value='$id'>$nome</option>";
            }
            ?>
        </select> <br>
        Data emprestimo: <br>
        <input type="date" name="data1"> <br>

        Data termino: <br>
        <input type="date" name="data2"> <br>

        <input type="submit" valuer="cadastrar">
    </form>
</body>
</html>