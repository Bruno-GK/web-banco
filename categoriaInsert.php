<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    
    $nomcat      = $_POST["nomcat"];
    $corhex     = $_POST["corhex"];
      
    $sql= "INSERT INTO categoria( nomcat, corhex) 
           VALUES ('{$nomcat}', '{$corhex}')";

           
    mysqli_query($conexao,$sql) or die(mysqli_error());

    echo "Cadastro realizado com Sucesso!";

    mysqli_close($conexao);
?>
