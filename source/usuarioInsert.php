<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $nome   = $_POST["input_nome"];
    $email  = $_POST["input_email"];
    $senha  = $_POST["input_senha"];

    $sql = "INSERT INTO usuario(nomusu, emausu, senusu)
        VALUES ('{$nome}', '${email}', '${senha}')";

    mysqli_query($conexao,$sql) or die (mysqli_error());

    echo "Usuário Cadastrado com Sucesso!";

    mysqli_close($conexao);
?>