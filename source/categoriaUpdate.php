<?php
    include_once("_conexao.php");
    $conexao= conectaBD();
    

   $codcat    = $_POST["codcat"];
   $nomcat      = $_POST["nomcat"];
   $corhex  = $_POST["corhex"];

   $SQL = "UPDATE categoria
              SET    nomcat      = '$nomcat',
                     corhex  = '$corhex'
              WHERE  codcat = {$codcat};";


   mysqli_query($conexao, $SQL) or die(mysqli_error());

   echo "Alterado com Sucesso!";

    
   mysqli_close($conexao);
?>


 
