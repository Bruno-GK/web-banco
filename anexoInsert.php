<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    
    $codtar      = $_POST["input_codtar"];
    $nomarq     = $_POST["input_nomarq"];
      
    $sql= "INSERT INTO anexo( codtar, nomarq) 
           VALUES ('{$codtar}', '{$nomarq}')";

           echo $nomarq;

           
    mysqli_query($conexao,$sql) or die(mysqli_error());

    echo "Cadastro de anexo realizado com Sucesso!";

    mysqli_close($conexao);
?>
