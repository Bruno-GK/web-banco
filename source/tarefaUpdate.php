<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao = conectaBD();

    // receber valores do formulário
    $codtar = $_POST["input_codtar"];
    $codusu = $_POST["input_codusu"];
    $codcat = $_POST["input_codcat"];
    $titulo = $_POST["input_titulo"];
    $descri = $_POST["input_descri"];
    $status = $_POST["input_status"];
    $priori = $_POST["input_priori"];
    $datcri = $_POST["input_datcri"];
    $datven = $_POST["input_datven"];
    $datcon = $_POST["input_datcon"];

    // montar SQL de update
    $SQL = "UPDATE tarefa
            SET codusu = '$codusu',
                codcat = '$codcat',
                titulo = '$titulo',
                descri = '$descri',
                status = '$status',
                priori = '$priori',
                datcri = '$datcri',
                datven = '$datven',
                datcon = '$datcon'
            WHERE codtar = {$codtar};";

    // executar
    mysqli_query($conexao, $SQL) or die(mysqli_error($conexao));

    echo "Alterado com Sucesso!";

    // encerrar conexão
    mysqli_close($conexao);
?>
