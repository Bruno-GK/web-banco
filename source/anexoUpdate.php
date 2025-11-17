<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();
    
   $codane    = $_POST["input_codane"];
   $codtar    = $_POST["input_codtar"];
   $nomarq      = $_POST["input_nomarq"];

   $SQL = "UPDATE anexo
              SET    codtar      = '$codtar',
                     nomarq  = '$nomarq'
              WHERE  codane = {$codane};";

   // echo $SQL;

   mysqli_query($conexao, $SQL) or die(mysqli_error());

   echo "Alterado com Sucesso!";
    

// encerrar conexão
   mysqli_close($conexao);
?>


 
