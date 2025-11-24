<?php
include_once("_conexao.php");
$conexao = conectaBD();

$cod = filter_input(INPUT_GET, "codcat");
$dados = "DELETE FROM categoria WHERE codcat = {$cod}";


mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

echo "Excluído com Sucesso!";

mysqli_close($conexao);
?>
