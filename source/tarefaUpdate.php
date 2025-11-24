<?php
    include_once("_conexao.php");
    $conexao = conectaBD();

    $codtar = $_POST["input_codtar"] ?? '';
    $codusu = $_POST["input_codusu"] ?? '';
    $codcat = $_POST["input_codcat"] ?? '';
    $titulo = $_POST["input_titulo"] ?? '';
    $descri = $_POST["input_descri"] ?? '';
    $status = $_POST["input_status"] ?? '';
    $priori = $_POST["input_priori"] ?? '';
    $datcri = $_POST["input_datcri"] ?? '';
    $datven = $_POST["input_datven"] ?? '';
    $datcon = $_POST["input_datcon"] ?? '';

    if (!$codtar) die("ID da tarefa inválido.");

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
            WHERE codtar = '$codtar'";

    mysqli_query($conexao, $SQL) or die(mysqli_error($conexao));

    echo "Alterado com Sucesso!<br>";

    echo "codtar: $codtar<br>";
    echo "codusu: $codusu<br>";
    echo "codcat: $codcat<br>";
    echo "titulo: $titulo<br>";
    echo "descri: $descri<br>";
    echo "status: $status<br>";
    echo "priori: $priori<br>";
    echo "datcri: $datcri<br>";
    echo "datven: $datven<br>";
    echo "datcon: $datcon<br>";

    mysqli_close($conexao);
?>
