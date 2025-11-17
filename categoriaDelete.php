<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $cod = filter_input(INPUT_GET, "codcat");
    $dados= "DELETE FROM categoria WHERE codigo = {$codcat}";

    mysqli_query($conexao, $dados) or die(mysqli_error());

    echo "Excluído com Sucesso!";

    mysqli_close($conexao);
?>
