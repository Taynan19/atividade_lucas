<?php
    require_once "conexao.php";
    
    // pega as valores lá do formulário
    $livro = $_POST['livro'];
    $aluno = $_POST['aluno'];
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];

    $sql = "INSERT INTO tb_emprestimo (id_livro, id_aluno, data_emprestimo, data_devolucao) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    // letra s -> varchar, date, datetime, char
    // letra i -> int
    // letra d -> float, decimal
    mysqli_stmt_bind_param($comando, 'iiss', $livro, $aluno, $data1, $data2);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    header("Location: index.php");
?>
