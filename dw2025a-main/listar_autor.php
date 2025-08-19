<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Listar Autor</h2>
    <?php
    require_once  "conexao.php";

    $sql = "SELECT * FROM tb_livro";
    $comando = mysqli_prepare($conexao, $sql);
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>ID</td>";
    echo "<td>Nome</td>";
    echo "<td>Data de nascimento</td>";
    echo "<td>Nacionalidade</td>";
    echo "</tr>";

    while ($autor = mysqli_fetch_assoc($resultados)) {
            $id_autor = $autor['id_autor'];
            $nome = $autor['nome'];
            $nascimento = $autor['data_nascimento'];
            $nacionalidade = $autor['nacionalidade'];

    echo "<tr>";
    echo "<td>ID</td>";
    echo "<td>Nome</td>";
    echo "<td>Data de nascimento</td>";
    echo "<td>Nacionalidade</td>";
    echo "</tr>";
    }
    

    


    ?>
</body>
</html>