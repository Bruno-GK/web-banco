<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $codigo = $_POST["input_codigo"];
    $codusu = $_POST["input_usuario"];
    $codcat = $_POST["input_categoria"];
    $titulo = $_POST["input_titulo"];
    $descri = $_POST["input_descricao"];
    $status = $_POST["input_status"];
    $priori = $_POST["input_prioridade"];
    $datcri = $_POST["input_datcri"];
    $datven = $_POST["input_datven"];
    $datcon = $_POST["input_datcon"];

    $sql = "INSERT INTO tarefa(codusu, codcat, titulo, descri, status, priori, datven, datcon)
        VALUES ('{$codusu}', '{$codcat}', '{$titulo}', '{$descri}', '{$status}', '{$priori}', '{$datven}', '{$datcon}')";

    mysqli_query($conexao,$sql) or die (mysqli_error());

    echo "Tarefa Cadastrada com Sucesso!";

    mysqli_close($conexao);
?>