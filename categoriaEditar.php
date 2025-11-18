<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "codcat");
      $get2 = filter_input(INPUT_GET, "nomcat");
      $get3 = filter_input(INPUT_GET, "corhex");
   ?>
    

   <b><font color="#0000FF">Tela de Edição de categorias</font></b>
      </br> </br>

    <form action="categoriaUpdate.php" method="post">

     <input type=hidden name=tabela value="categoria">

   
     <input hidden name="codcat" size="30" value="<?php echo $get1?>">

    <b> Nome da categoria:</b> <input type="text" name="nomcat" size="30" value="<?php echo $get2?>">
       </br></br>

    <b> Cor:</b> <input type="color" name="corhex" value="<?php echo $get3?>">
       </br></br>

    <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>