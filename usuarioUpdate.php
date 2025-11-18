<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $codigo  = $_POST["input_codigo"];
    $nome    = $_POST["input_nome"];
    $email   = $_POST["input_email"];
    $senha   = $_POST["input_senha"];

    $SQL = "UPDATE usuario
    SET nomusu = '$nome',
    emausu     = '$email',
    senusu     = '$senha'
    WHERE codusu = {$codigo};";

    // echo $SQL;

    mysqli_query($conexao, $SQL) or die(mysqli_error());

    echo "Alterado com Sucesso!";

// encerrar conexão
    mysqli_close($conexao);
?>