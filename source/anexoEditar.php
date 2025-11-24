<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "codane");
      $get2 = filter_input(INPUT_GET, "codtar");
      $get3 = filter_input(INPUT_GET, "nomarq");
   ?>
    

   <b><font color="#0000FF">Tela de Edição de categorias</font></b>
      </br> </br>

    <form action="anexoUpdate.php" method="post">

     <input type=hidden name=tabela value="anexo">

   
     <input hidden name="input_codane" size="30" value="<?php echo $get1?>">

    <b> Tarefa vinculada: </b> <input type="text" name="input_codtar" size="30" value="<?php echo $get2?>">
       </br></br>

    <b> Arquivo: </b> <input type="file" name="input_nomarq" value="<?php echo $get3?>">
       </br></br>

    <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>