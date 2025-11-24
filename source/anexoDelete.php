<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $codane = filter_input(INPUT_GET, "codane");
    $dados= "DELETE FROM anexo WHERE codane = {$codane}";

    mysqli_query($conexao, $dados) or die(mysqli_error());

    echo "Excluído com Sucesso!";

    mysqli_close($conexao);
?>
