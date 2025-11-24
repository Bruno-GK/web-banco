<?php

include_once("_conexao.php");
$conexao = conectaBD();

$codtar = $_POST["input_codtar"] ?? null;


if (isset($_FILES["input_nomarq"]) && $_FILES["input_nomarq"]["error"] === 0) {
    $arquivo = $_FILES["input_nomarq"];
    $nome_arquivo = $arquivo['name'];
    $tmp_arquivo = $arquivo['tmp_name'];

    
    $pasta_upload = "uploads/";

    
    if (!is_dir($pasta_upload)) {
        mkdir($pasta_upload, 0777, true);
    }

    
    $destino = $pasta_upload . basename($nome_arquivo);
    if (move_uploaded_file($tmp_arquivo, $destino)) {
        
        $sql = "INSERT INTO anexo (codtar, nomarq) VALUES ('{$codtar}', '{$nome_arquivo}')";
        mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

        echo "Cadastro de anexo realizado com Sucesso!<br>";
        echo "Arquivo enviado: " . $nome_arquivo;
    } else {
        echo "Erro ao mover o arquivo.";
    }
} else {
    echo "Nenhum arquivo enviado ou erro no envio.";
}

mysqli_close($conexao);
?>
